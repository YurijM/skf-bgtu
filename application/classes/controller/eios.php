<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Eios extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'ЭИОС';

    $eios = View::factory('v_eios');

		$eios->mode = $this->mode;
		$eios->page_title = $this->template->page_title;
		$eios->dir_docs_education = ORM::factory('setting', array('key' => 'dir_docs_education'))->value;
		$eios->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;

    $this->template->main = $eios;
  }
}
