<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admissionrulescollege extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Нормативно-правовые акты СПО';

    $rules = View::factory('v_admission_rules_college');
    
    $rules->mode = $this->mode;
    $rules->page_title = $this->template->page_title;

		$rules->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $rules->dir_docs_admission = ORM::factory('setting', array('key' => 'dir_docs_admission'))->value;

    $this->template->main = $rules;
  }
}
