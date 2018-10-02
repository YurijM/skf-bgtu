<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_News extends Controller_Admin {
  private $page_title = 'Новости';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
  }
  
  //==========================================================================//
  public function action_index()
  {
    $page = $this->request->param('page');

    if (! $page)
    {
      $page = 1;
    }

    $count_news_for_page = ORM::factory('setting', array('key' => 'admin_count_news_for_page'))->value;
    $count_pages = ceil(ORM::factory('news')->count_all() / $count_news_for_page);
      
    $news = View::factory('admin/v_news_list');
    $news->news = ORM::factory('news')->order_by('date', 'DESC')->limit($count_news_for_page)->offset(($page - 1) * $count_news_for_page)->find_all();
    $news->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page.'/admin@news@');
    $news->page_title = $this->page_title;
    $news->page = $page;

    $this->template->main = $news;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $news = View::factory('admin/v_news');
    $news->page_title = $this->page_title;
    $news->page = $this->request->param('page');
    $news->dir_css = $this->dir_css;
    $news->dir_js = $this->dir_js;

    if ($id)
    {
      $news->news = ORM::factory('news', $id);
      $news->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
      $news->dir_img_news = ORM::factory('setting', array('key' => 'dir_img_news'))->value;
      $news->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], ' ',$news->news->title));
      //$news->galery = $news->news->galery->order_by('photo')->find_all();
      $news->galery = $news->news->galery->order_by('id')->find_all();
    }
    else
    {
      $news->news = ORM::factory('news');
    }

    $this->template->main = $news;
  }

  //==========================================================================//
  public function action_save()
  {
    $page = Arr::get($_POST, 'page');
    $id = Arr::get($_POST, 'id');
    
    $count = ORM::factory('setting', array('key' => 'admin_count_news_for_page'))->value * 1;
    
    //--------------------- Нажата кнопка "Удалить" -------------------------//
    if (isset($_POST['delete']))
    {
      $news = ORM::factory('news', $id);
      
      // Сначала обнуляем идентификатор на запись из галереи
      $news->news_galery_id = NULL;
      $news->save();

      // Затем удаляем записи из таблицы news_galery, связанные с данной новостью
      $galery = ORM::factory('newsgalery', array('news_id' => $id));
      while ($galery->loaded())
      {
        $galery->delete();
        $galery = ORM::factory('newsgalery', array('news_id' => $id));
      }
      
      // Теперь удаляем саму новость
      $news->delete();
      
      // И затем удаляем сами файлы с фотографиями к данной новости
      $fileFilter = $id.'-*.*';
      // Путь к каталогу с фотографиями для новостей без первого символа '/'
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_news'))->value, 1);
      $lst = glob($dir.$fileFilter);
      foreach($lst as $filename)
      {
        @unlink($filename); 
      }
      
      // Если номер текущей страницы после удаления новости стала меньше, чем общее количество страниц новостей,
      // то переходим на предыдущую страницу
      if ($page > ORM::factory('news')->get_count_pages($count))
      {
        $page--;
      }
      
      $this->request->redirect('admin/news/'.$page);
    }
    
    //-------------------- Нажата кнопка "Сохранить" ------------------------//
    if ($id > 0)
    {
      $news = ORM::factory('news', $id);
    }
    else
    {
      $news = ORM::factory('news');
    }
    
    $news->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));
    //$news->title = str_replace('.', '', Arr::get($_POST, 'title'));
    $news->title = trim(Arr::get($_POST, 'title'));
    $news->category = Arr::get($_POST, 'category');
    $news->news = Arr::get($_POST, 'news');

    $news->save();
    
    // Номер страницы равен 0 только в том случае, когда была создана НОВАЯ новость.
    // В этом случае необходимо вычислить страницу, на которой расположена эта новость
    if ($page == 0)
    {
      $page = $news->get_page_by_id($news->id, $count);
    }
    
    $this->request->redirect('admin/news/'.$page);
  }
  
  //==========================================================================//
  public function action_selectphoto() {
    $id = $this->request->param('id');
    $photo_id = $this->request->param('photo');

    $news = View::factory('admin/v_news_photo');
    $news->dir_js = $this->dir_js;
    $news->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $news->dir_img_news = ORM::factory('setting', array('key' => 'dir_img_news'))->value;
    $news->news = ORM::factory('news', $id);
    $news->page = $this->request->param('page');
    
    if ($photo_id)
    {
      $news->photo = ORM::factory('newsgalery', $photo_id);
      $news->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], ' ', $news->photo->description));
    }
    else
    {
      $news->photo = NULL;
    }

    $this->template->main = $news;
  }
  
  //==========================================================================//
  public function action_savephoto() {
    // Указатель на фото будет не NULL, если фотография вызывалась на редактирование
    $photo_id = $this->request->param('photo');
      
    $id = $this->request->param('id');
    $page = $this->request->param('page');
    
    $news = ORM::factory('news', $id);
    
    $photo = Arr::get($_POST, 'src');
    // Выделяем расширение файла с фотографией.
    $ext = strtolower(substr($photo, strpos($photo, '.'), strlen($photo) - 1));

    // У пути убираем первый символ слэш '/'
    $dir_img_news = substr(ORM::factory('setting', array('key' => 'dir_img_news'))->value, 1);
    
    //--------------------- Нажата кнопка "Удалить" -------------------------//
    if (isset($_POST['delete']))
    {
      // Если удаляемая фотография была выбрана, как главная для новости,
      // то устанавливаем указатель в NULL
      if ($news->news_galery_id == $photo_id)
      {
        $news->news_galery_id = NULL;
        $news->save();
      }
      
      $galery = ORM::factory('newsgalery', $photo_id);
      
      // Удаляем все файлы (сам файл и файлы с постфиксами '_midi' и '_mini') из каталога с фоторграфиями для новостей
      $pathinfo = pathinfo($galery->photo);
      
      unlink($dir_img_news.$galery->photo); 
      unlink($dir_img_news.$pathinfo['filename'].'_midi.'.$pathinfo['extension']); 
      unlink($dir_img_news.$pathinfo['filename'].'_mini.'.$pathinfo['extension']); 
      
      // Удаляем запись из таблицы news_galery
      $galery->delete();
      
      // Возвращаемся на страницу новости
      $this->request->redirect('/admin/news/edit/'.$id.'/'.$page);
    }
    
    //-------------------- Нажата кнопка "Сохранить" ------------------------//
    // Если кнопка имеет имя 'add', то режим добавления нового фото
    if (isset($_POST['add']))
    {
      // Добавляем запись в таблицу news_galery.
      $galery = ORM::factory('newsgalery');

      $idx = $this->get_free_photo_idx($news->id);

      // Имя нового файла состоит из id новости и индекса
      $photo_name = $id.'-'.$idx;
      $galery->photo = $photo_name.$ext;
    }
    // Иначе (кнопка имеет имя 'edit') - режим редактирования фото
    else
    {
      // Ищем фото по идентификатору
      $galery = ORM::factory('newsgalery', $photo_id);

      $pathinfo = pathinfo($galery->photo);
      $photo_name = $pathinfo['filename'];

      // Если у нового файла иное расширение, чем было у редактируемого,
      // то новый файл будет сохранён в новом формате (с новым расширением).
      // Поэтом расширение надо поменять и в поле, хранящем имя файла.
      if ($ext != $pathinfo['extension'])
      {
        $galery->photo = $photo_name.$ext;
      }
    }

    $galery->news_id = $id;
    $galery->description = Arr::get($_POST, 'description');

    $galery->save();

    // Если режим добавления, то устанавливаем указатель на новое фото
    if (isset($_POST['add']))
    {
      $photo_id = $galery->id;
    }

    // Проверяем наличие файла в каталое временного хранения
    // Он может там появиться в двух случаях:
    // - добавляется новое фото;
    // - изменили существующую фото
    if (file_exists($dir_img_news.'temp/'.$photo))
    {
      // Загружаем фотографию из каталога временного хранения
      $image = Image::factory($dir_img_news.'temp/'.$photo);
    
      // Изменяем размер для основной фотографии
      // (не более 1000 пикселей по ширине и 700 пикселей по высоте).
      $image->resize(1000, 700);
      $image->save($dir_img_news.$photo_name.$ext);

      // Изменяем размер для фотографии, которая отображается на странице списка новостей
      // (не более 300 пикселей по высоте).
      // К названию файла прибавляется постфикс '_midi'.
      $image->resize(NULL, 300);
      $image->save($dir_img_news.$photo_name.'_midi'.$ext);

      // Изменяем размер для фотографии, которая отображается как миниатюра
      // (не более 150 пикселей по высоте).
      // К названию файла прибавляется постфикс '_mini'.
      $image->resize(NULL, 150);
      $image->save($dir_img_news.$photo_name.'_mini'.$ext);
    }
    
    // Если данная фотография выбрана для показа в тексте новости,
    // записываем её id в поле news_galery_id текущей новости.
    if (Arr::get($_POST, 'is_main') == 1)
    {
      $news->news_galery_id = $photo_id;
      $news->save();
    }
    
    // Если файл находится в каталоге временного хранения, то удаляем его.
    if (file_exists($dir_img_news.'temp/'.$photo))
    {
      unlink($dir_img_news.'temp/'.$photo); 
    }
    
    $this->request->redirect('/admin/news/edit/'.$id.'/'.$page);
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу временного хранения файла, загружаемой фотографии -
    // это путь к каталогу с фотографиями для слайдера (без первого символа '/') и его подкаталогу temp.
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_news'))->value, 1).'temp/';

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_file_to_server($dir, $file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }
  
  //==========================================================================//
  private function get_free_photo_idx($news_id)
  {
    $photo_idx = 0;
    
    //$galery = ORM::factory('newsgalery')->where('news_id', '=', $news_id)->order_by('photo')->find_all()->as_array();
    $galery = ORM::factory('newsgalery')->where('news_id', '=', $news_id)->order_by('id')->find_all()->as_array();

    if (count($galery) > 0)
    {
      $photo = end($galery);
      $name = explode('-', substr($photo->photo, 0, strpos($photo->photo, '.')));
      $photo_idx = end($name);
    }

    return $photo_idx + 1;
  }
}
