<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Enrollmentorders extends Controller_Admin {
  private $page_title = 'Приказы о зачислении';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('enrollmentorder')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $orders = View::factory('admin/v_enrollment_orders_list');
    //$orders->orders = DB::select('id', 'date', 'doc_file', 'img_file', array('YEAR("date")', 'year'))->from('enrollment_orders')->where('YEAR("date")', '=', $year)->order_by('date', 'DESC')->execute();
    $orders->orders = ORM::factory('enrollmentorder')->order_by('date', 'DESC')->find_all();
    $orders->page_title = $this->page_title;
    $orders->table = $this->table;
    
    $this->template->main = $orders;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $order = View::factory('admin/v_enrollment_order');

    $order->page_title = $this->page_title;
    $order->table = $this->table;
    $order->dir_js = $this->dir_js;
    $order->dir_css = $this->dir_css;

    $order->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $order->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $order->dir_img_enrollment_orders = ORM::factory('setting', array('key' => 'dir_img_enrollment_orders'))->value;
    $order->dir_docs_enrollment_orders = ORM::factory('setting', array('key' => 'dir_docs_enrollment_orders'))->value;
    
    if ($id)
    {
      $order->order = ORM::factory('enrollmentorder', $id);
      $order->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/Приказ '.str_replace('.', '-', Helper_Addfunction::date_from_mysql($order->order->date)));
    }
    else
    {
      $order->order = ORM::factory('enrollmentorder');
    }

    $this->template->main = $order;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу (без первого символа '/').
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_enrollment_orders'))->value, 1);

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_doc_file_to_server($dir.$file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }
  
  //==========================================================================//
  public function action_uploadimg()
  {
    // Путь к каталогу хранения миниатюры приказа
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_enrollment_orders'))->value, 1);

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    if (file_exists($dir.$file))
    {
      $result = 'file_is_existed';
    }
    else
    {
      // Путь к каталогу временного хранения файла, загружаемого изображения
      // (без первого символа '/') и его подкаталогу temp.
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_enrollment_orders'))->value, 1).'temp/';

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
      $order = ORM::factory('enrollmentorder', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img_doc($order);
        $order->delete();
        
        $this->request->redirect('admin/enrollmentorders');
      }
    }
    else
    {
      $order = ORM::factory('enrollmentorder');
    }
    
    $order->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));
    
    if ($id == 0)
    {
      // Сохраняем приказ, чтобы получить значение id новой записи
      $order->save();
    }
    
    $new_file = 'order_'.$order->id.'_'.str_replace('-', '', $order->date);

    $order->doc_file = Arr::get($_POST, 'doc_file');
    
    if ($order->doc_file)
    {
      // Выделяем расширение файла
      $ext = strtolower(substr($order->doc_file, strpos($order->doc_file, '.'), strlen($order->doc_file) - 1));
      if ($this->rename_doc_file($order->doc_file, $new_file.$ext))
      {
        $order->doc_file = $new_file.$ext;
      }
    }

    $img = Arr::get($_POST, 'src');
    // Выделяем расширение файла
    $ext = strtolower(substr($img, strpos($img, '.'), strlen($img) - 1));

    if ($this->save_img($img, $new_file.$ext))
    {
      $order->img_file = $new_file.$ext;
    }

    $order->save();
    
    $this->request->redirect('admin/enrollmentorders');
  }
  
  //==========================================================================//
  private function save_img($img, $new_file)
  {
    if ($img == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_enrollment_orders'))->value, 1);

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img))
    {
      // Загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img);
    
      // Изменяем размер (ТОЧНО 200 пикселей по ширине и 285 пикселей по высоте)
      $image->resize(200, 285, Image::NONE);
      $image->save($dir.$new_file);

      unlink($dir.'temp/'.$img); 
      
      return TRUE;
    }
    
    return FALSE;
  }
  
  //==========================================================================//
  private function delete_img_doc($order)
  {
    if ($order->img_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_enrollment_orders'))->value, 1);
      unlink($dir . $order->img_file);
    }

    if ($order->doc_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_enrollment_orders'))->value, 1);
      unlink($dir . $order->doc_file);
    }
  }
  
  //==========================================================================//
  private function rename_doc_file($old, $new)
  {
    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_enrollment_orders'))->value, 1);

    rename($dir.$old, $dir.$new); 
    
    return TRUE;
  }
}
