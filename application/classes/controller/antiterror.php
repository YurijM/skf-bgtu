<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Antiterror extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Антитеррор';

    $antiterror = View::factory('v_antiterror');
    
    $antiterror->mode = $this->mode;
    $antiterror->page_title = $this->template->page_title;
   
    $this->template->main = $antiterror;
  }
}
