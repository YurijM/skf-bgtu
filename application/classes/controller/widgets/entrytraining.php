<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Entrytraining extends Controller_Widget {
  public $template = 'widgets/w_entry_training';
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->phone = ORM::factory('setting', array('key' => 'phone_kpk'))->value;
    $this->template->email = ORM::factory('setting', array('key' => 'email_kpk'))->value;
  }
}
