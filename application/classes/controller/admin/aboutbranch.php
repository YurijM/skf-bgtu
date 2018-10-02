<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Aboutbranch extends Controller_Admin {
  private $page_title = 'Фотографии для раздела "О филиале"';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('aboutbranch')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $about = View::factory('admin/v_about_branch_list');
    $about->page_title = $this->page_title;
    $about->table = $this->table;
    $about->photos = ORM::factory('aboutbranch')->order_by('order_no')->find_all();

    $this->template->main = $about;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $about = View::factory('admin/v_about_branch');
    $about->dir_js = $this->dir_js;
    $about->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $about->dir_img_about_branch = ORM::factory('setting', array('key' => 'dir_img_about_branch'))->value;
    
    if ($id)
    {
      $about->photo = ORM::factory('aboutbranch', $id);
      $about->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], ' ', $about->photo->order_no));
    }
    else
    {
      $about->photo = ORM::factory('aboutbranch');
    }

    $this->template->main = $about;
  }
  
  //==========================================================================//
  public function action_save() {
    $id = $this->request->param('id');
    
    $photo = Arr::get($_POST, 'src');

    $pathinfo = pathinfo($photo);
    $name = $pathinfo['filename'];
    $ext = $pathinfo['extension'];

    // У пути убираем первый символ слэш '/'
    $dir_img_about_branch = substr(ORM::factory('setting', array('key' => 'dir_img_about_branch'))->value, 1);
    
    //--------------------- Нажата кнопка "Удалить" -------------------------//
    if (isset($_POST['delete']))
    {
      $about = ORM::factory('aboutbranch', $id);
      
      // Удаляем все файлы (сам файл и файл с постфиксом '_mini') из каталога с фоторграфиями
      $pathinfo = pathinfo($about->photo);
      
      unlink($dir_img_about_branch.$about->photo); 
      unlink($dir_img_about_branch.$pathinfo['filename'].'_mini.'.$pathinfo['extension']); 
      
      // Удаляем запись из таблицы about_branch
      $about->delete();
      
      // Возвращаемся на страницу новости
      $this->request->redirect('/admin/aboutbranch');
    }
    
    //-------------------- Нажата кнопка "Сохранить" ------------------------//
    // Если кнопка имеет имя 'add', то режим добавления нового фото
    if (isset($_POST['add']))
    {
      // Добавляем запись в таблицу about_branch
      $about = ORM::factory('aboutbranch');

      $about->photo = $photo;
    }
    // Иначе (кнопка имеет имя 'edit') - режим редактирования фото
    else
    {
      // Ищем фото по идентификатору
      $about = ORM::factory('aboutbranch', $id);
      
      // Если загружен новый файл, то удаляем сам "старый" файл и файл с постфиксом '_mini' из каталога с фоторграфиями
      // и записываем новое имя файла в БД
      if ($about->photo != $name.'.'.$ext)
      {
        
        $pathinfo = pathinfo($about->photo);

        unlink($dir_img_about_branch.$about->photo); 
        unlink($dir_img_about_branch.$pathinfo['filename'].'_mini.'.$pathinfo['extension']); 
        
        $about->photo = $name.'.'.$ext; 
      }
    }

    $about->order_no = Arr::get($_POST, 'order_no');
    $about->description = Arr::get($_POST, 'description');

    $about->save();

    // Если режим добавления, то устанавливаем указатель на новое фото
    if (isset($_POST['add']))
    {
      $id = $about->id;
    }

    // Проверяем наличие файла в каталое временного хранения
    // Он может там появиться в двух случаях:
    // - добавляется новое фото;
    // - изменили существующую фото
    if (file_exists($dir_img_about_branch.'temp/'.$photo))
    {
      // Загружаем фотографию из каталога временного хранения
      $image = Image::factory($dir_img_about_branch.'temp/'.$photo);
    
      // Изменяем размер для основной фотографии
      // (не более 1000 пикселей по ширине и 700 пикселей по высоте).
      $image->resize(1000, 700);
      $image->save($dir_img_about_branch.$photo);

      // Изменяем размер для фотографии, которая отображается как миниатюра
      // (не более 70 пикселей по высоте).
      // К названию файла прибавляется постфикс '_mini'.
      $image->resize(NULL, 70);
      $image->save($dir_img_about_branch.$name.'_mini.'.$ext);
    }
    
    // Если файл находится в каталоге временного хранения, то удаляем его.
    if (file_exists($dir_img_about_branch.'temp/'.$photo))
    {
      unlink($dir_img_about_branch.'temp/'.$photo); 
    }
    
    $this->request->redirect('/admin/aboutbranch');
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемой фотографии -
    // это путь к каталогу с фотографиями для слайдера (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_about_branch'))->value, 1).'temp/';

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_file_to_server($dir, $file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }
}
