<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Inter extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Международное сотрудничество';

    $inter = View::factory('v_inter');
    
    $inter->mode = $this->mode;
    $inter->page_title = $this->template->page_title;
   
    $this->template->main = $inter;
  }
}
