<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс виджетов
 */
class Controller_Widget extends Controller_Template {
  public $template = NULL;
  public $mode = 'normal'; // Режим просмотра сайта ('for_cecutient' - для слабовидящих)
  protected $widgets_folder = 'widgets/';  // Папка для контроллеров виджетов  
  
  public function  before() {
    parent::before();

    //$widget_name = Request::current()->controller();  // название виджета
    //$controller = Request::initial()->controller();   // контроллер
    //$action = Request::initial()->action();           // экшен
    
    if (Request::initial()->directory() !== 'admin'):
      $this->mode = Helper_Addfunction::get_mode();
    endif;
    
//    // Загружаем файл конфигураций
//    $widget_config = Kohana::$config->load("widgets.$widget_name.$controller");
//
//    // Запрещаем вывод виджета в экшенах, указанных в конфигах
//    if ($widget_config != NULL)
//    {
//      if (in_array($action, $widget_config))
//      {
//        $this->auto_render = FALSE;
//        return NULL;
//      }
//    }
  }
}