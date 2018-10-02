<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Governance extends Controller_Widget {
  public $template = 'widgets/w_governance';
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->dir_img_personnel = ORM::factory('setting', array('key' => 'dir_img_personnel'))->value;

    $this->template->governance = ORM::factory('governance')->order_by('order_no')->find_all();
  }
}
