<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Patents extends Controller_Admin {
  private $page_title = 'Патенты и полезные модели';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('patent')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $patents = View::factory('admin/v_patents_list');
    $patents->patents = ORM::factory('patent')->order_by('date', 'DESC')->find_all();
    $patents->page_title = $this->page_title;
    $patents->table = $this->table;

    $this->template->main = $patents;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $patents = View::factory('admin/v_patent');
    
    $patents->page_title = $this->page_title;
    $patents->table = $this->table;
    $patents->dir_css = $this->dir_css;
    $patents->dir_js = $this->dir_js;
    
    $patents->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $patents->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $patents->dir_img_patents = ORM::factory('setting', array('key' => 'dir_img_patents'))->value;
    $patents->dir_docs_patents = ORM::factory('setting', array('key' => 'dir_docs_patents'))->value;
    
    if ($id)
    {
      $patents->patent = ORM::factory('patent', $id);
      $patents->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace('.', '-', Helper_Addfunction::date_from_mysql($patents->patent->date)));
    }
    else
    {
      $patents->patent = ORM::factory('patent');
      $patents->patent->is_patent = 1;
    }

    $this->template->main = $patents;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемого изображения
    // (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_patents'))->value, 1).'temp/';

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
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_patents'))->value, 1);

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
      $patent = ORM::factory('patent', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img_doc($patent);
        $patent->delete();
        
        $this->request->redirect('admin/patents');
      }
    }
    else
    {
      $patent = ORM::factory('patent');
    }
    
    $patent->number = Arr::get($_POST, 'number');
    $patent->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));
    $patent->doc_file = Arr::get($_POST, 'doc_file');
    $patent->patent = Arr::get($_POST, 'patent');
    $patent->application_area = Arr::get($_POST, 'application_area');
    $patent->is_patent = Arr::get($_POST, 'is_patent');

    $img = Arr::get($_POST, 'src');
    if ($this->save_img($img))
    {
      $patent->img_file = $img;
    }

    $patent->save();
      
    $this->request->redirect('admin/patents');
  }
  
  //==========================================================================//
  private function save_img($img)
  {
    if ($img == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_patents'))->value, 1);

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img))
    {
      // Загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img);
    
      // Изменяем размер (не более 200 пикселей по высоте).
      $image->resize(NULL, 200);
      $image->save($dir.$img);

      unlink($dir.'temp/'.$img);

      return true;
    }

    return false;
  }
  
  //==========================================================================//
  private function delete_img_doc($patent)
  {
    if ($patent->img_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_patents'))->value, 1);
      unlink($dir . $patent->img_file);
    }

    if ($patent->doc_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_patents'))->value, 1);
      unlink($dir . $patent->doc_file);
    }
  }
}
