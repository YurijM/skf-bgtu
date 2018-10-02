<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Achievements extends Controller_Admin {
  private $page_title = 'Достижения';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('achievement')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $achievements = View::factory('admin/v_achievements_list');
    $achievements->achievements = ORM::factory('achievement')->order_by('date', 'DESC')->find_all();
    $achievements->page_title = $this->page_title;
    $achievements->table = $this->table;

    $this->template->main = $achievements;
  }

	//==========================================================================//
	public function action_edittext()
	{
		$achievements_text = View::factory('admin/v_achievements_text');

		$achievements_text->page_title = $this->page_title;
		$achievements_text->table = $this->table;
		$achievements_text->dir_css = $this->dir_css;
		$achievements_text->dir_js = $this->dir_js;

		$achievements_text->text = ORM::factory('achievementtext')->find()->limit(1);

		$this->template->main = $achievements_text;
	}

	//==========================================================================//
	public function action_savetext()
	{
		$id = Arr::get($_POST, 'id');

		$achievements_text = ORM::factory('achievementtext', $id);

		$achievements_text->content = Arr::get($_POST, 'content');

		$achievements_text->save();

		$this->request->redirect('admin/achievements');
	}

	//==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $achievements = View::factory('admin/v_achievement');
    
    $achievements->page_title = $this->page_title;
    $achievements->table = $this->table;
    $achievements->dir_css = $this->dir_css;
    $achievements->dir_js = $this->dir_js;
    
    $achievements->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $achievements->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $achievements->dir_img_achievements = ORM::factory('setting', array('key' => 'dir_img_achievements'))->value;
    $achievements->dir_docs_achievements = ORM::factory('setting', array('key' => 'dir_docs_achievements'))->value;
    
    if ($id)
    {
      $achievements->achievement = ORM::factory('achievement', $id);
      $achievements->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace('.', '-', Helper_Addfunction::date_from_mysql($achievements->achievement->date)));
    }
    else
    {
      $achievements->achievement = ORM::factory('achievement');
    }

    $this->template->main = $achievements;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу хранения файлов наград
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_achievements'))->value, 1);

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    if (file_exists($dir.$file))
    {
      $result = 'file_is_existed';
    }
    else
    {
      // Путь к каталогу временного хранения файла, загружаемого изображения
      // (без первого символа '/') и его подкаталогу temp.
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_achievements'))->value, 1).'temp/';

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
      $achievement = ORM::factory('achievement', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_img($achievement->img_file);
        $achievement->delete();
        
        $this->request->redirect('admin/achievements');
      }
    }
    else
    {
      $achievement = ORM::factory('achievement');
    }
    
    $achievement->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));
    
    $img_file = Arr::get($_POST, 'src');
    if ($this->save_img($img_file))
    {
      $achievement->img_file = $img_file;
    }

    $achievement->save();
      
    $this->request->redirect('admin/achievements');
  }
  
  //==========================================================================//
  private function save_img($img_file)
  {
    if ($img_file == '')
      return true;

    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_img_achievements'))->value, 1);
    // Выделяем имя файла
    $file = substr($img_file, 0, strpos($img_file, '.'));
    // Выделяем расширение файла
    $ext = strtolower(substr($img_file, strpos($img_file, '.'), strlen($img_file) - 1));

    // Проверяем наличие файла в каталое временного хранения
    if (file_exists($dir.'temp/'.$img_file))
    {
      // Загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img_file);

      // Изменяем размер (не более 1125 пикселей по ширине и 750 пикселей по высоте)
      $image->resize(1125, 750);
      $image->save($dir.$file.$ext);

      // Снова загружаем изображение из каталога временного хранения
      $image = Image::factory($dir.'temp/'.$img_file);

      // Изменяем размер для миниатюры (не более 100 пикселей по высоте).
      $image->resize(NULL, 100);
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
      $dir = substr(ORM::factory('setting', array('key' => 'dir_img_achievements'))->value, 1);
      unlink($dir . $img_file);
    }
  }
}
