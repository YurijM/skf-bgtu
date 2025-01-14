<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Licensing extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Лицензирование';

    $licensing = View::factory('v_licensing');

		$licensing->mode = $this->mode;
		$licensing->page_title = $this->template->page_title;
		$licensing->dir_docs_licensing = ORM::factory('setting', array('key' => 'dir_docs_licensing'))->value;

    $this->template->main = $licensing;
  }
}
