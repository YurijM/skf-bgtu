<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Addinfo extends Controller_Widget {
  public $template = 'widgets/w_add_info';
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->site_name    = ORM::factory('setting', array('key' => 'site_name'))->value;
    $this->template->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;
    $this->template->dir_img_docs = ORM::factory('setting', array('key' => 'dir_img_docs'))->value;

		$this->template->email = ORM::factory('setting', array('key' => 'email_prk'))->value;

		$this->template->switch_mode = Controller_Base::widget_load(Request::current()->directory().'/switchmode');
  }
}
