<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Welcome extends Controller_Widget {
  public $template = 'widgets/w_welcome';
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->site_name  = ORM::factory('setting', array('key' => 'site_name'))->value;
    $this->template->dir_img    = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $this->template->dir_docs_head_income = ORM::factory('setting', array('key' => 'dir_docs_head_income'))->value;
  }
}
