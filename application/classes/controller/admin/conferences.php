<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Conferences extends Controller_Admin {
  private $page_title = 'Конференции';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('conference')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $conferences = View::factory('admin/v_conferences_list');
    $conferences->conferences = ORM::factory('conference')->order_by('date', 'DESC')->find_all();
    $conferences->page_title = $this->page_title;
    $conferences->table = $this->table;

    $this->template->main = $conferences;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $conferences = View::factory('admin/v_conference');
    
    $conferences->page_title = $this->page_title;
    $conferences->table = $this->table;
    $conferences->dir_css = $this->dir_css;
    $conferences->dir_js = $this->dir_js;
    
    $conferences->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $conferences->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $conferences->dir_img_conferences = ORM::factory('setting', array('key' => 'dir_img_conferences'))->value;
    $conferences->dir_docs_conferences = ORM::factory('setting', array('key' => 'dir_docs_conferences'))->value;
    
    if ($id)
    {
      $conferences->conference = ORM::factory('conference', $id);
      $conferences->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace('.', '-', Helper_Addfunction::date_from_mysql($conferences->conference->date)));
    }
    else
    {
      $conferences->conference = ORM::factory('conference');
    }

    $this->template->main = $conferences;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемого изображения
    // (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_conferences'))->value, 1).'temp/';

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_file_to_server($dir, $file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }
  
  //==========================================================================//
  public function action_uploaddoc()
  {
    // Путь к каталогу (без первого символа '/').
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_conferences'))->value, 1);

    $file = basename($_FILES['uploadfile']['name']);    
    
    $result = Helper_Addfunction::load_doc_file_to_server($dir.$file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $conference = ORM::factory('conference', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img_doc($conference);
        $conference->delete();
        
        $this->request->redirect('admin/conferences');
      }
    }
    else
    {
      $conference = ORM::factory('conference');
    }
    
    $conference->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));
    $conference->conference = trim(Arr::get($_POST, 'conference'));
    $conference->doc_file = Arr::get($_POST, 'doc_file');
    
    $img = Arr::get($_POST, 'src');
    if ($this->save_img($img))
    {
      $conference->img_file = $img;
    }

    $conference->save();
      
    $this->request->redirect('admin/conferences');
  }
  
  //==========================================================================//
  private function save_img($img)
  {
    if ($img == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_conferences'))->value, 1);

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img))
    {
      // Загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img);
    
      // Изменяем размер (ТОЧНО 215 пикселей по ширине и 300 пикселей по высоте).
      $image->resize(215, 300, Image::NONE);
      $image->save($dir.$img);

      unlink($dir.'temp/'.$img); 
      
      return true;
    }
    
    return false;
  }
  
  //==========================================================================//
  private function delete_img_doc($conference)
  {
    if ($conference->img_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_conferences'))->value, 1);
      unlink($dir . $conference->img_file);
    }

    if ($conference->doc_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_conferences'))->value, 1);
      unlink($dir . $conference->doc_file);
    }
  }
}
