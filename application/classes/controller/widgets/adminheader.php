<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Adminheader extends Controller_Widget {
  public $template = 'widgets/w_admin_header';
  
  public function action_index()
  {
    $this->template->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
  }
}
