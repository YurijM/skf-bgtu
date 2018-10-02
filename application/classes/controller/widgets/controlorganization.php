<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Controlorganization extends Controller_Widget {
  public $template = 'widgets/w_control_organization';
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
  }
}
