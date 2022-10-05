<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Infosecurity extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Защита персональных данных';

    $infosecurity = View::factory('v_info_security');

		$infosecurity->mode = $this->mode;
		$infosecurity->page_title = $this->template->page_title;
		$infosecurity->dir_docs_info_security = ORM::factory('setting', array('key' => 'dir_docs_info_security'))->value;
		$infosecurity->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;

    $this->template->main = $infosecurity;
  }
}
