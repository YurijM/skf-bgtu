<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Library extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Библиотека';

    $library = View::factory('v_library');
    
    $library->mode = $this->mode;
    $library->page_title = $this->template->page_title;
   
    $library->dir_img_library = ORM::factory('setting', array('key' => 'dir_img_library'))->value;

    $books_amount = ORM::factory('librarybooksamount')->find();
    $library->books_amount =$books_amount->amount;

    $this->template->main = $library;
  }
}
