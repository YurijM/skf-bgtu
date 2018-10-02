<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Anticorruption extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Противодействие коррупции';

    $anticorruption = View::factory('v_anticorruption');
    
    $anticorruption->mode = $this->mode;
    $anticorruption->page_title = $this->template->page_title;
    
    $anticorruption->dir_docs_anticorruption = ORM::factory('setting', array('key' => 'dir_docs_anticorruption'))->value;
   
    $this->template->main = $anticorruption;
  }
}
