<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Educationquality extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Внутренняя система оценки качества образования';

    $quality = View::factory('v_education_quality');

		$quality->mode = $this->mode;
		$quality->page_title = $this->template->page_title;
		$quality->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;

    $this->template->main = $quality;
  }
}
