<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Personnel extends Controller_Admin {
  private $page_title = 'Сотрудники';
  
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
    $personnel = View::factory('admin/v_personnel_list');
    $personnel->personnel = ORM::factory('personnel')->order_by('family')->order_by('name')->order_by('patronymic')->find_all();
    $personnel->page_title = $this->page_title;
    $personnel->table = $this->table;

    $this->template->main = $personnel;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $personnel = View::factory('admin/v_personnel');

    $personnel->page_title = $this->page_title;
    $personnel->table = $this->table;
    $personnel->dir_js = $this->dir_js;
    
    $personnel->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $personnel->dir_img_personnel = ORM::factory('setting', array('key' => 'dir_img_personnel'))->value;
    
    $personnel->departments = ORM::factory('department')->order_by('department')->find_all()->as_array();
    $personnel->posts = ORM::factory('post')->order_by('post')->find_all()->as_array();
    $personnel->academic_titles = ORM::factory('academictitle')->order_by('academic_title')->find_all()->as_array();
    $personnel->degrees = ORM::factory('degree')->order_by('degree')->find_all()->as_array();
    $personnel->employment_types = ORM::factory('employmenttype')->order_by('employment_type')->find_all()->as_array();
    
    if ($id)
    {
      $personnel->personnel = ORM::factory('personnel', $id);
      $personnel->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$personnel->personnel->family.' '.$personnel->personnel->name.' '.$personnel->personnel->patronymic);
    }
    else
    {
      $personnel->personnel = ORM::factory('personnel');
    }

    $this->template->main = $personnel;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемой фотографии -
    // это путь к каталогу с фотографиями персонала (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_personnel'))->value, 1).'temp/';

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_file_to_server($dir, $file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }

  //==========================================================================//
  public function action_deletedegree()
  {
    $personnel_id = $this->request->param('personnel_id');
    $degree_id = $this->request->param('degree_id');
    
    $personnel = ORM::factory('personnel', $personnel_id);
    $personnel->remove('degrees', $degree_id);
      
    $this->request->redirect('admin/personnel/edit/'.$personnel_id);
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $personnel = ORM::factory('personnel', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_degrees($personnel);
        $this->delete_photo($personnel->photo);
        $personnel->delete();
        
        $this->request->redirect('admin/personnel');
      }
    }
    else
    {
      $personnel = ORM::factory('personnel');
    }
    
    $department = Arr::get($_POST, 'department');
    $post = Arr::get($_POST, 'post');
    $academic_title = Arr::get($_POST, 'academic_title');
    $employment_type = Arr::get($_POST, 'employment_type');
    $fired = Arr::get($_POST, 'fired');
    
    $personnel->family = Arr::get($_POST, 'family');
    $personnel->name = Arr::get($_POST, 'name');
    $personnel->patronymic = Arr::get($_POST, 'patronymic');
    $personnel->department_id = ($department == 0 ? NULL : $department);
    $personnel->post_id = ($post == 0 ? NULL : $post);
    $personnel->academic_title_id = ($academic_title == 0 ? NULL : $academic_title);
    $personnel->employment_type_id = ($employment_type == 0 ? NULL : $employment_type);
    $personnel->fired = ($fired == NULL ? 0 : $fired);
    $personnel->add_info = Arr::get($_POST, 'add_info');

    $personnel->save();
    
    // Для записи в таблицу personnel_degrees нужно, чтобы запись в таблице personnel уже существовала.
    // Поэтому сначала сохраняем изменения в таблице personnel, а уже потом добавляем запись в таблицу personnel_degrees.
    $degree = Arr::get($_POST, 'degree');
    if ($degree > 0)
    {
      $personnel->add('degrees', $degree);
    }
    
    // Для формирования имени файла с фото, нужно знать id сотрудника.
    // Поэтому сначала сохраняем изменения, а потом сохраняем сам файл с фото.
    $photo = Arr::get($_POST, 'src');
    
    if ($photo != '' and $personnel->photo != $photo)
    {
      $photo = $this->save_photo($photo, $personnel->id);
      if ($photo != '')
      {
        $personnel->photo = $photo;
        $personnel->save();
      }
    }
      
    $this->request->redirect('admin/personnel');
  }
  
  //==========================================================================//
  private function save_photo($photo, $id)
  {
    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_personnel'))->value, 1);

    // Проверяем наличие файла в каталое временного хранения
    // Он может там появиться в двух случаях:
    // - добавляется новое фото;
    // - изменили существующую фото
    if (file_exists($dir.'temp/'.$photo))
    {
      // Выделяем расширение файла с фотографией.
      $ext = strtolower(substr($photo, strpos($photo, '.'), strlen($photo) - 1));

      // Загружаем фотографию из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$photo);
    
      // Изменяем размер (не более 255 пикселей по ширине и 340 пикселей по высоте).
      $image->resize(255, 340);
      $image->save($dir.$id.$ext);

      unlink($dir.'temp/'.$photo); 
      
      return $id.$ext;
    }
    
    return '';
  }
  
  //==========================================================================//
  private function delete_photo($photo)
  {
    if ($photo)
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_personnel'))->value, 1);
      unlink($dir.$photo);
    }
  }
  
  //==========================================================================//
  private function delete_degrees($personnel)
  {
    $degrees = $personnel->degrees->find_all();
    foreach ($degrees as $degree)
    {
      $personnel->remove('degrees', $degree->id);
    }
  }
}
