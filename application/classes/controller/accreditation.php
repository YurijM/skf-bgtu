<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Accreditation extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Аккредитация';

    $accreditation = View::factory('v_accreditation');

		$accreditation->mode = $this->mode;
		$accreditation->page_title = $this->template->page_title;
		$accreditation->dir_docs_education = ORM::factory('setting', array('key' => 'dir_docs_education'))->value;
		$accreditation->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;

    $this->template->main = $accreditation;
  }
}
