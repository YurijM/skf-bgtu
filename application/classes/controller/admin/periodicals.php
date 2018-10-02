<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Periodicals extends Controller_Admin {
  private $page_title = 'Периодические издания';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('periodical')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $periodicals = View::factory('admin/v_periodicals_list');
    $periodicals->periodicals = ORM::factory('periodical')->order_by('year', 'DESC')->order_by('db')->order_by('date', 'DESC')->order_by('periodical')->find_all();
    $periodicals->page_title = $this->page_title;
    $periodicals->table = $this->table;

    $this->template->main = $periodicals;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $periodical = View::factory('admin/v_periodical');
    
    $periodical->page_title = $this->page_title;
    $periodical->table = $this->table;
    $periodical->dir_js = $this->dir_js;
    $periodical->dir_css = $this->dir_css;
    
    $periodical->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $periodical->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $periodical->dir_img_periodicals = ORM::factory('setting', array('key' => 'dir_img_periodicals'))->value;
    
    $periodical->db = array(NULL => 'Поле db', 'SCOPUS' => 'SCOPUS', 'РИНЦ' => 'РИНЦ');
    
    if ($id)
    {
      $periodical->periodical = ORM::factory('periodical', $id);
      $periodical->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$periodical->periodical);
    }
    else
    {
      $periodical->periodical = ORM::factory('periodical');
      $periodical->periodical->date = date("Y-m-d"); 
    }

    $this->template->main = $periodical;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемого изображения
    // (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_periodicals'))->value, 1).'temp/';

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_file_to_server($dir, $file);
    
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
      $periodical = ORM::factory('periodical', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img($periodical->img_file);
        $periodical->delete();
        
        $this->request->redirect('admin/periodicals');
      }
    }
    else
    {
      $periodical = ORM::factory('periodical');
    }
    
    $title = Arr::get($_POST, 'periodical');
    $periodical->periodical = ($title == '' ? 'Без названия' : $title);
    $periodical->year = Arr::get($_POST, 'year');
    $number = Arr::get($_POST, 'number');
    $periodical->number = ($number == '' ? NULL : $number);
    $periodical->db = strtoupper(Arr::get($_POST, 'db'));
    $periodical->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));
    
    $img = strtolower(Arr::get($_POST, 'src'));
    if ($this->save_img($img))
    {
      $periodical->img_file = $img;
    }

    $periodical->save();
      
    $this->request->redirect('admin/periodicals');
  }
  
  //==========================================================================//
  private function save_img($img)
  {
    if ($img == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_periodicals'))->value, 1);

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img))
    {
      // Загружаем изображение из каталога временного хранения
      // и сохраняем оригинальный размер
      $image = Image::factory($dir.'temp/'.$img);
      $image->save($dir.$img);
    
      // Изменяем размер (Не более 145 пикселей по ширине и 200 пикселей по высоте)
      $image->resize(145, 200);
      // Выделяем имя и расширение файла с картинкой и сохраняем миниатюру
      $file = strtolower(substr($img, 0, strpos($img, '.')));
      $ext = strtolower(substr($img, strpos($img, '.'), strlen($img) - 1));
      $image->save($dir.$file.'_mini'.$ext);

      unlink($dir.'temp/'.$img); 
      
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
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_periodicals'))->value, 1);
      unlink($dir . $img_file);
    }
  }
}
