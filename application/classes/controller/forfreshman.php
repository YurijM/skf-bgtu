<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Forfreshman extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Информация для первокурсников';

    $freshman = View::factory('v_for_freshman');
    
    $freshman->mode = $this->mode;
    $freshman->page_title = $this->template->page_title;

    $this->template->main = $freshman;
  }
}
