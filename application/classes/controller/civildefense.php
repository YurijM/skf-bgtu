<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Civildefense extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'ГО и ЧС';

    $defense = View::factory('v_civil_defense');

		$defense->mode = $this->mode;
		$defense->page_title = $this->template->page_title;
		$defense->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_civil_defense'))->value;

    $this->template->main = $defense;
  }
}
