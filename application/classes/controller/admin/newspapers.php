<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Newspapers extends Controller_Admin {
  private $page_title = 'Студенческая газета';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('newspaper')->table_name();

    $this->months = array(1 => 'январь', 2 => 'февраль', 3 => 'март', 4 => 'апрель', 5 => 'май', 6 => 'июнь',
                          7 => 'июль', 8 => 'август', 9 => 'сентябрь', 10 => 'октябрь', 11 => 'ноябрь', 12 => 'декабрь');
}
  
  //==========================================================================//
  public function action_index()
  {
    $newspapers = View::factory('admin/v_newspapers_list');

    $newspapers->page_title = $this->page_title;
    $newspapers->table = $this->table;
    $newspapers->months = $this->months;
    
    $newspapers->newspapers = ORM::factory('newspaper')->order_by('year', 'DESC')->order_by('month', 'DESC')->order_by('issue', 'DESC')->find_all();

    $this->template->main = $newspapers;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $newspaper = View::factory('admin/v_newspaper');

    $newspaper->dir_js = $this->dir_js;
    $newspaper->page_title = $this->page_title;
    $newspaper->table = $this->table;
    $newspaper->months = $this->months;
    $newspaper->dir_js = $this->dir_js;
    
    $newspaper->years = [
			2015 => 2015,
			2016 => 2016,
			2017 => 2017,
			2018 => 2018,
			2019 => 2019,
			2020 => 2020,
			2021 => 2021,
			2022 => 2022,
			2023 => 2023,
			2024 => 2024,
			2025 => 2025
		];
    $newspaper->year = date('Y');
    
    $newspaper->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $newspaper->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $newspaper->dir_img_newspapers = ORM::factory('setting', array('key' => 'dir_img_newspapers'))->value;
    $newspaper->dir_docs_newspapers = ORM::factory('setting', array('key' => 'dir_docs_newspapers'))->value;

    if ($id)
    {
      $newspaper->newspaper = ORM::factory('newspaper', $id);
      $newspaper->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$newspaper->newspaper->year.' '.$newspaper->months[$newspaper->newspaper->month].' №'.$newspaper->newspaper->issue);
    }
    else
    {
      $newspaper->newspaper = ORM::factory('newspaper');
    }

    $this->template->main = $newspaper;
  }
  
  //==========================================================================//
  public function action_uploaddoc()
  {
    // Путь к каталогу (без первого символа '/')
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_newspapers'))->value, 1);

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_doc_file_to_server($dir.$file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }
  
  //==========================================================================//
  public function action_uploadimg()
  {
    // Путь к каталогу хранения миниатюры газеты
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_newspapers'))->value, 1);

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    if (file_exists($dir.$file))
    {
      $result = 'file_is_existed';
    }
    else
    {
      // Путь к каталогу временного хранения файла, загружаемого изображения
      // (без первого символа '/') и его подкаталогу temp.
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_newspapers'))->value, 1).'temp/';

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
      $newspaper = ORM::factory('newspaper', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img_doc($newspaper);
        $newspaper->delete();
        
        $this->request->redirect('admin/newspapers');
      }
    }
    else
    {
      $newspaper = ORM::factory('newspaper');
    }
    
    $newspaper->year = Arr::get($_POST, 'year');
    $newspaper->month = Arr::get($_POST, 'month');
    $newspaper->issue = Arr::get($_POST, 'issue');
    $newspaper->doc_file = Arr::get($_POST, 'doc_file');
    
    $img = Arr::get($_POST, 'src');
    if ($this->save_img($img))
    {
      $newspaper->img_file = $img;
    }

    $newspaper->save();
    
    $this->request->redirect('admin/newspapers');
  }
  
  //==========================================================================//
  private function save_img($img)
  {
    if ($img == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_newspapers'))->value, 1);

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img))
    {
      // Загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img);
    
      // Изменяем размер (не более 200 пикселей по ширине и 300 пикселей по высоте).
      $image->resize(200, 300);
      $image->save($dir.$img);

      unlink($dir.'temp/'.$img); 
      
      return true;
    }
    
    return false;
  }
  
  //==========================================================================//
  private function delete_img_doc($newspaper)
  {
    if ($newspaper->img_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_newspapers'))->value, 1);
      unlink($dir . $newspaper->img_file);
    }

    if ($newspaper->doc_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_newspapers'))->value, 1);
      unlink($dir . $newspaper->doc_file);
    }
  }
}
