<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Applicationtraining extends Controller_Widget {
  public $template = 'widgets/w_application_training';
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;
  }
}
