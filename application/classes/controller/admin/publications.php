<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Publications extends Controller_Admin {
  private $page_title = 'Издания';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('publication')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $publications = View::factory('admin/v_publications_list');
    $publications->publications = ORM::factory('publication')->order_by('year', 'DESC')->find_all();
    $publications->page_title = $this->page_title;
    $publications->table = $this->table;

    $this->template->main = $publications;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $publications = View::factory('admin/v_publication');
    
    $publications->page_title = $this->page_title;
    $publications->table = $this->table;
    $publications->dir_js = $this->dir_js;
    
    $publications->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $publications->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $publications->dir_img_publications = ORM::factory('setting', array('key' => 'dir_img_publications'))->value;
    $publications->dir_docs_publications = ORM::factory('setting', array('key' => 'dir_docs_publications'))->value;

    if ($id)
    {
      $publications->publication = ORM::factory('publication', $id);
      $publications->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], '', $publications->publication->title));
    }
    else
    {
      $publications->publication = ORM::factory('publication');
    }

    $this->template->main = $publications;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу хранения файлов с изображением обложек
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_publications'))->value, 1);

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    if (file_exists($dir.$file))
    {
      $result = 'file_is_existed';
    }
    else
    {
      // Путь к каталогу временного хранения файла, загружаемого изображения
      // (без первого символа '/') и его подкаталогу temp.
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_publications'))->value, 1).'temp/';

      $result = Helper_Addfunction::load_file_to_server($dir, $file, TRUE);
    }
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }

  //==========================================================================//
  public function action_uploaddoc()
  {
    // Путь к каталогу (без первого символа '/').
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_publications'))->value, 1);

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
      $publication = ORM::factory('publication', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img_doc($publication);
        $publication->delete();
        
        $this->request->redirect('admin/publications');
      }
    }
    else
    {
      $publication = ORM::factory('publication');
    }
    
    $publication->year = Arr::get($_POST, 'year');
    $title = trim(Arr::get($_POST, 'title')); 
    $publication->title = $title.($title{strlen($title) - 1} != '.' ? '.' : '');
    $publication->bibliography = trim(Arr::get($_POST, 'bibliography'));
    $publication->description = trim(Arr::get($_POST, 'description'));
    $publication->doc_file = trim(Arr::get($_POST, 'doc_file'));
    $publication->for_company = Arr::get($_POST, 'for_company');
    
    $img = Arr::get($_POST, 'src');
    if ($this->save_img($img))
    {
      $publication->img_file = $img;
    }

    $publication->save();
      
    $this->request->redirect('admin/publications');
  }
  
  //==========================================================================//
  private function save_img($img)
  {
    if ($img == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_publications'))->value, 1);
    // Выделяем имя файла
    $file = substr($img, 0, strpos($img, '.'));
    // Выделяем расширение файла
    $ext = strtolower(substr($img, strpos($img, '.'), strlen($img) - 1));

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img))
    {
      // Загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img);
    
      // Изменяем размер (не более 500 пикселей по ширине и 700 пикселей по высоте).
      $image->resize(500, 700);
      $image->save($dir.$img);

      // Снова загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img);
    
      // Изменяем размер для миниатюры (не более 175 пикселей по высоте).
      $image->resize(NULL, 175);
      $mini = $file.'_mini'.$ext;
      $image->save($dir.$mini);

      unlink($dir.'temp/'.$img); 
      
      return true;
    }
    
    return false;
  }
  
  //==========================================================================//
  private function delete_img_doc($publication)
  {
    if ($publication->img_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_publications'))->value, 1);
      unlink($dir . $publication->img_file);
    }

    if ($publication->doc_file != '')
    {
      // У пути убираем первый символ слэш '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_publications'))->value, 1);
      unlink($dir . $publication->doc_file);
    }
  }
}
