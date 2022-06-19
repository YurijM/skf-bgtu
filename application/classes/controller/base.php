<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
  public $template = 'v_base';  // Базовый шаблон
  public $mode = 'normal'; // Режим просмотра сайта ('for_cecutient' - для слабовидящих)
  protected $widgets_folder = 'widgets/';  // Папка для контроллеров виджетов  

  //--------------------------------------------------------------------------//
  public function before()
  {
    parent::before();

    // Вывод в шаблон
    $this->template->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $this->template->site_description = ORM::factory('setting', array('key' => 'site_description'))->value;
    $dir_css = ORM::factory('setting', array('key' => 'dir_css'))->value;
    $dir_js = ORM::factory('setting', array('key' =>'dir_js'))->value;

    $this->template->keywords = 'СКФ БГТУ им.В.Г.Шухова, Северо-Кавказский филиал Белгородского государственного технологического университета';
    $this->template->description = 'Северо-Кавказский филиал Белгородского государственного технологического университета им.В.Г.Шухова';

    $this->template->page_title = NULL;
    
    // Подключение блоков
    $this->template->main = NULL;

		if (Request::initial()->directory() === 'admin'):
			// Подключение блоков
			$this->template->header = $this->widget_load($this->widgets_folder.'adminheader');
		elseif (Request::initial()->directory() === 'cabinet'):
			// Подключение блоков
			$this->template->header = $this->widget_load($this->widgets_folder.'adminheader');
		else:
			$this->mode = Helper_Addfunction::get_mode();

			// Подключение блоков
			$this->template->header = $this->widget_load($this->widgets_folder.'header');
			$this->template->menu_top = $this->widget_load($this->widgets_folder.'menutop');
			$this->template->footer = $this->widget_load($this->widgets_folder.'footer');
		endif;

    $this->set_styles($dir_css);
    $this->set_scripts($dir_js);
  }
  
  //--------------------------------------------------------------------------//
  public function action_for_cecutient()
  {
    $session = Session::instance();

    if ($this->mode === 'normal')
    {
      $session->set('mode', 'for_cecutient');
      $this->mode = 'for_cecutient';
    }
    else
    {
      $session->set('mode', 'normal');
      $this->mode = 'normal';
    }
    
    $uri_from_get = $this->request->query('uri');

    $uri = str_replace('for_cecutient', '', $this->request->uri()).($uri_from_get ? '/'.$uri_from_get : '');

    $this->request->redirect($uri);
  }

  //--------------------------------------------------------------------------//
  public static function widget_load($widget)
  {
    //return Request::factory($this->widgets_folder.'/'.$widget)->execute();
    return Request::factory($widget)->execute();
  }
  
  //--------------------------------------------------------------------------//
  private function set_styles($dir_css)
  {
    // Подключение стилей
    $this->template->styles = array(
      $dir_css.'bootstrap.min.css',
			$dir_css.'all.min.css',
			$dir_css.'v4-shims.min.css',
			$dir_css.'animate.css',
      $dir_css.'skfbgtu.css',
      $dir_css.'bvi.min.css'
    );

    if ($this->mode == 'for_cecutient')
    {
      array_push($this->template->styles, $dir_css.'skfbgtu_cecutient.css');
    }
    
    if (Request::initial()->directory() == 'admin')
    {
      array_push($this->template->styles, $dir_css.'skfbgtu_admin.css');
    }

		if (Request::initial()->directory() == 'cabinet')
		{
			array_push($this->template->styles, $dir_css.'skfbgtu_cabinet.css');
		}
  }
  
  //--------------------------------------------------------------------------//
  private function set_scripts($dir_js)
  {
    // Подключение скриптов
    $this->template->scripts = array(
      $dir_js.'jquery.min.js',
      $dir_js.'bootstrap.min.js',
      $dir_js.'holder.min.js',
      $dir_js.'bvi.min.js',
    );

		if (Request::initial()->directory() == 'cabinet')
		{
			array_push($this->template->scripts, $dir_js.'cabinet.js');
		}
  }
}
