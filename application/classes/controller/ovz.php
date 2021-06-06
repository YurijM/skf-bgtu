<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ovz extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Доступная среда';

    $ovz = View::factory('v_ovz');
    
    $ovz->mode = $this->mode;
    $ovz->page_title = $this->template->page_title;
		$ovz->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;
		$ovz->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;

    $this->template->main = $ovz;
  }
}
