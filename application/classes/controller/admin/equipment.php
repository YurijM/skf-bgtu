<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Equipment extends Controller_Admin {
  private $page_title = 'Оборудование лаборатории строительных материалов';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('equipment')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $equipment = View::factory('admin/v_equipment_list');
    $equipment->equipment = ORM::factory('equipment')->order_by('description')->find_all();
    $equipment->page_title = $this->page_title;
    $equipment->table = $this->table;

    $this->template->main = $equipment;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $equipment = View::factory('admin/v_equipment');
    
    $equipment->page_title = $this->page_title;
    $equipment->table = $this->table;
    $equipment->dir_js = $this->dir_js;
    
    $equipment->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $equipment->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $equipment->dir_img_equipment = ORM::factory('setting', array('key' => 'dir_img_equipment'))->value;
    
    if ($id)
    {
      $equipment->equipment = ORM::factory('equipment', $id);
      $equipment->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], '', $equipment->equipment->description));
    }
    else
    {
      $equipment->equipment = ORM::factory('equipment');
    }

    $this->template->main = $equipment;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу хранения файлов оборудования
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_equipment'))->value, 1);

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    if (file_exists($dir.$file))
    {
      $result = 'file_is_existed';
    }
    else
    {
      // Путь к каталогу временного хранения файла, загружаемого изображения
      // (без первого символа '/') и его подкаталогу temp.
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_equipment'))->value, 1).'temp/';

      $result = Helper_Addfunction::load_file_to_server($dir, $file, TRUE);
    }
    
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
      $equipment = ORM::factory('equipment', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img($equipment->img_file);
        $equipment->delete();
        
        $this->request->redirect('admin/equipment');
      }
    }
    else
    {
      $equipment = ORM::factory('equipment');
    }
    
    $equipment->description = trim(Arr::get($_POST, 'description'));
    
    $img_file = strtolower(trim(Arr::get($_POST, 'src')));
    if ($this->save_img($img_file))
    {
      $equipment->img_file = $img_file;
    }

    $equipment->save();
      
    $this->request->redirect('admin/equipment');
  }
  
  //==========================================================================//
  private function save_img($img_file)
  {
    if ($img_file == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_equipment'))->value, 1);
    // Выделяем имя файла
    $file = strtolower(substr($img_file, 0, strpos($img_file, '.')));
    // Выделяем расширение файла
    $ext = strtolower(substr($img_file, strpos($img_file, '.'), strlen($img_file) - 1));

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img_file))
    {
      // Загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img_file);

      // Изменяем размер (не более 1125 пикселей по ширине и 750 пикселей по высоте)
      if ($image->height > 750 or $image->width > 1125)
      {
        $image->resize(1125, 750);
      }

      $image->save($dir.$file.$ext);

      // Изменяем размер для миниатюры (не более 175 пикселей по высоте).
      $image->resize(NULL, 175);
      $mini = $file.'_mini'.$ext;
      $image->save($dir.$mini);

      unlink($dir.'temp/'.$img_file); 
      
      return true;
    }
    
    return false;
  }
  
  //==========================================================================//
  private function delete_img($img_file)
  {
    if ($img_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_equipment'))->value, 1);
      unlink($dir . $img_file);
    }
  }
}
