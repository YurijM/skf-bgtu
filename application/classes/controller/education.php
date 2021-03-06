<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Education extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Образование';

    $education = View::factory('v_education');
    
    $education->mode = $this->mode;
    $education->page_title = $this->template->page_title;
    $education->dir_docs_education = ORM::factory('setting', array('key' => 'dir_docs_education'))->value;
		$education->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;
		$education->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;

    $this->template->main = $education;
  }
}
