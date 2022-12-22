<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Base {
	public function action_index()
  {
    $main = View::factory('v_main');

    if ($this->mode == 'normal'):
      $main->welcome_width = 'col-sm-6';
      $main->newslast_width = 'col-sm-6';
    else:
      $main->welcome_width = 'col-xs-12';
      $main->newslast_width = 'col-xs-12';
    endif;

    $main->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;


    $main->welcome = $this->widget_load($this->widgets_folder.'welcome');
    $main->control_organization = $this->widget_load($this->widgets_folder.'controlorganization');
    $main->news = $this->widget_load($this->widgets_folder.'newslast');

    $this->template->page_title = 'Главная';

    $this->template->main = $main;
  }
}
