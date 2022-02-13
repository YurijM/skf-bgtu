<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Psychologicalsupport  extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Социально-психологическая поддержка';

    $support = View::factory('v_psychological_support');
    
    $support->mode = $this->mode;
    $support->page_title = $this->template->page_title;
   
    $support->dir_img_psychological_support = ORM::factory('setting', array('key' => 'dir_img_psychological_support'))->value;

    $this->template->main = $support;
  }
}
