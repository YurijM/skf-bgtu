<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Edustandarts extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Образовательные стандарты';

    $standard = View::factory('v_edustandarts');

    $standard->mode = $this->mode;
    $standard->page_title = $this->template->page_title;
    
    $standard->dir_docs_educational_standard = ORM::factory('setting', array('key' => 'dir_docs_educational_standard'))->value;

    $this->template->main = $standard;
  }
}
