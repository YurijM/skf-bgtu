<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Confirmationdelete extends Controller_Widget {
  public $template = 'widgets/w_confirmation_delete';
  public function action_index()
  {
    $this->template->message = $this->request->param('message');
  }
}
