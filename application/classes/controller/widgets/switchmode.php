<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Switchmode extends Controller_Widget {
  public $template = 'widgets/w_switch_mode';
  public function action_index()
  {
    $this->template->mode = $this->mode;
    
    $uri = Request::initial()->uri();
    $this->template->href = '/for_cecutient'.str_replace('for_cecutient', '', ($uri == '/' ? '' : '?uri='.$uri));

    if ($this->mode == 'normal')
    {
      $this->template->caption = ' Версия для слабовидящих';
    }
    else
    {
      $this->template->caption = ' Обычный режим просмотра';
    }
  }
}
