<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Studentcouncil extends Controller_Admin {
  private $page_title = 'Студенческий совет';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('studentcouncil')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $students = View::factory('admin/v_student_council_list');
    $students->students = ORM::factory('studentcouncil')->order_by('order_no')->find_all();
    $students->page_title = $this->page_title;
    $students->table = $this->table;

    $this->template->main = $students;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $students = View::factory('admin/v_student_council');
    
    $students->page_title = $this->page_title;
    $students->table = $this->table;
    $students->dir_js = $this->dir_js;
    
    $students->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $students->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $students->dir_img_student_council = ORM::factory('setting', array('key' => 'dir_img_student_council'))->value;
    
    if ($id)
    {
      $students->student = ORM::factory('studentcouncil', $id);
      $students->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$students->student->student);
    }
    else
    {
      $students->student = ORM::factory('studentcouncil');
    }

    $this->template->main = $students;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемого фото
    // (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_student_council'))->value, 1).'temp/';

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
      $student = ORM::factory('studentcouncil', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img($student);
        $student->delete();
        
        $this->request->redirect('admin/studentcouncil');
      }
    }
    else
    {
      $student = ORM::factory('studentcouncil');
    }
    
    $student->post = trim(Arr::get($_POST, 'post'));
    $student->student = trim(Arr::get($_POST, 'student'));
    $student->order_no = Arr::get($_POST, 'order_no');
    
    $img = Arr::get($_POST, 'src');
    if ($this->save_img($img))
    {
      $student->photo = $img;
    }

    $student->save();
      
    $this->request->redirect('admin/studentcouncil');
  }
  
  //==========================================================================//
  private function save_img($img)
  {
    if ($img == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_student_council'))->value, 1);

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img))
    {
      // Загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img);
    
      // Изменяем размер (не более 300 пикселей по высоте).
      $image->resize(NULL, 300);
      $image->save($dir.$img);

      unlink($dir.'temp/'.$img); 
      
      return true;
    }
    
    return false;
  }
  
  //==========================================================================//
  private function delete_img($student)
  {
    if ($student->photo != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_student_council'))->value, 1);
      unlink($dir . $student->photo);
    }
  }
}
