<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Header extends Controller_Widget {
  public $template = 'widgets/w_header';
  
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->site_name	= ORM::factory('setting', array('key' => 'site_name'))->value;
    $this->template->dir_img   	= ORM::factory('setting', array('key' => 'dir_img'))->value;
    $this->template->address   	= ORM::factory('setting', array('key' => 'address'))->value;
    $this->template->phone     	= ORM::factory('setting', array('key' => 'phone'))->value;
    $this->template->email     	= ORM::factory('setting', array('key' => 'email'))->value;
		$this->template->instagram	= ORM::factory('setting', array('key' => 'instagram'))->value;

    $this->template->slider = Controller_Base::widget_load($this->widgets_folder.'slider');
    $this->template->add_info = Controller_Base::widget_load($this->widgets_folder.'addinfo');
  }
}
