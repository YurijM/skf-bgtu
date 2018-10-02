<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Universityscience extends Controller_Admin {
  private $page_title = 'Журнал "Университетская наука"';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('universityscience')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $magazine = View::factory('admin/v_university_science_list');
    $magazine->magazine = ORM::factory('universityscience')->order_by('year', 'DESC')->order_by('number', 'DESC')->find_all();
    $magazine->page_title = $this->page_title;
    $magazine->table = $this->table;

    $this->template->main = $magazine;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $magazine = View::factory('admin/v_university_science');
    
    $magazine->page_title = $this->page_title;
    $magazine->table = $this->table;
    $magazine->dir_css = $this->dir_css;
    $magazine->dir_js = $this->dir_js;
    
    $magazine->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $magazine->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $magazine->dir_img_university_science = ORM::factory('setting', array('key' => 'dir_img_university_science'))->value;
    $magazine->dir_docs_university_science = ORM::factory('setting', array('key' => 'dir_docs_university_science'))->value;
    
    if ($id)
    {
      $magazine->magazine = ORM::factory('universityscience', $id);
      $magazine->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$magazine->magazine->number.'_'.$magazine->magazine->year);
    }
    else
    {
      $magazine->magazine = ORM::factory('universityscience');
    }

    $this->template->main = $magazine;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемого изображения
    // (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_university_science'))->value, 1).'temp/';

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
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_university_science'))->value, 1);

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
      $magazine = ORM::factory('universityscience', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img_doc($magazine);
        $magazine->delete();
        
        $this->request->redirect('admin/universityscience');
      }
    }
    else
    {
      $magazine = ORM::factory('universityscience');
    }
    
    $magazine->year = Arr::get($_POST, 'year');
    $magazine->number = Arr::get($_POST, 'number');
    $magazine->doc_file = Arr::get($_POST, 'doc_file');
    
    $img = Arr::get($_POST, 'src');
    if ($this->save_img($img))
    {
      $magazine->img_file = $img;
    }

    $magazine->save();
      
    $this->request->redirect('admin/universityscience');
  }
  
  //==========================================================================//
  private function save_img($img)
  {
    if ($img == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_university_science'))->value, 1);

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
  private function delete_img_doc($magazine)
  {
    if ($magazine->img_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_university_science'))->value, 1);
      unlink($dir . $magazine->img_file);
    }

    if ($magazine->doc_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_university_science'))->value, 1);
      unlink($dir . $magazine->doc_file);
    }
  }
}
