<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Management extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Руководство';

    $management = View::factory('v_management');
    
    $management->mode = $this->mode;
    $management->page_title = $this->template->page_title;

    $this->template->main = $management;
  }
}
