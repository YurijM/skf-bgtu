<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Slider extends Controller_Admin {
  private $page_title = 'Слайдер';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
  }
  
  //==========================================================================//
  public function action_index()
  {
    $slider = View::factory('admin/v_slider_list');
    $slider->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $slider->dir = ORM::factory('setting', array('key' => 'dir_img_slider'))->value;
    $slider->page_title = $this->page_title;
    $slider->dir = ORM::factory('setting', array('key' => 'dir_img_slider'))->value;
    $slider->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/Фото для слайдера');

    // Просматриваем каталог с файлами для карусели
    $filter = '*_mini.*';
    // Каталог с файлами для карусели без первого символа слэш '/'
    $dir = substr($slider->dir, 1);
    $lst = glob($dir.$filter);
    
    $slider->photos = array();
    
    // Просмотр каталога с файлами для карусели и добавление их имён в массив
    foreach($lst as $filename)
    {
      array_push($slider->photos, basename($filename)); 
    }

    $this->template->main = $slider;
  }
  
  //==========================================================================//
  public function action_add()
  {
    $slider = View::factory('admin/v_slider_photo');
    $slider->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $slider->dir_js = ORM::factory('setting', array('key' => 'dir_js'))->value;
    $slider->dir = ORM::factory('setting', array('key' => 'dir_img_slider'))->value;

    $this->template->main = $slider;
  }
  
  //==========================================================================//
  public function action_savephoto()
  {
    $photo = Arr::get($_POST, 'src');
    // Выделяем расширение файла с фотографией.
    $ext = strtolower(substr($photo, strpos($photo, '.'), strlen($photo) - 1));

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_slider'))->value, 1);

    // Загружаем фотографию из каталога временного хранения
    $image = Image::factory($dir.'temp/'.$photo);

    // Изменяем размер для основной фотографии
    // (не более 450 пикселей по высоте).
    $image->resize(NULL, 450);
    $image->save($dir.$photo);

    // Изменяем размер для фотографии, которая отображается как миниатюра
    // (не более 150 пикселей по высоте).
    // К названию файла прибавляется постфикс '_mini'.
    $image->resize(NULL, 150);
    $photo_name = substr($photo, 0, strpos($photo, '.'));
    $image->save($dir.$photo_name.'_mini'.$ext);
      
    // И затем удаляем все файлы из временного каталога
    $filter = '*.*';
    $lst = glob($dir.'temp/'.$filter);
    foreach($lst as $filename)
    {
      @unlink($filename); 
    }
    
    $this->request->redirect('/admin/slider');
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемой фотографии -
    // это путь к каталогу с фотографиями для слайдера (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_slider'))->value, 1).'temp/';

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_file_to_server($dir, $file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }
  
  //==========================================================================//
  public function action_delete()
  {
    $photo = $_POST['src'];
    
    // Путь к каталогу с фотографиями для слайдера (без первого символа '/')
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_slider'))->value, 1);
    
    unlink($dir.$photo);
    unlink($dir.str_replace('_mini', '', $photo));
    
    $this->request->redirect('/admin/slider');
  }
}
