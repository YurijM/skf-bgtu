<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Basicinfo extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Основные сведения';

    $basicinfo = View::factory('v_basic_info');
    
    $basicinfo->mode = $this->mode;
    $basicinfo->page_title = $this->template->page_title;
   
    $this->template->main = $basicinfo;
  }
}
