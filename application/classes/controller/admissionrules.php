<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admissionrules extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Нормативно-правовые акты ВУЗ';

    $rules = View::factory('v_admission_rules');
    
    $rules->mode = $this->mode;
    $rules->page_title = $this->template->page_title;

		$rules->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $rules->dir_docs_admission = ORM::factory('setting', array('key' => 'dir_docs_admission'))->value;

    $this->template->main = $rules;
  }
}
