<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Certificatetype extends Controller_Widget {
  public $template = 'widgets/w_certificate_type';
  public function action_index()
  {
    $this->template->mode = $this->mode;
  }
}
