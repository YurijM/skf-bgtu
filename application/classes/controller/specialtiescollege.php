<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Specialtiescollege extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Приемная кампания СПО 2021';

    $specialties = View::factory('v_specialties_college');
    
    $specialties->mode = $this->mode;
    $specialties->page_title = $this->template->page_title;

		$specialties->start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))->value);
		$specialties->finish = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_finish'))->value);

		$specialties->dir_docs_admission = ORM::factory('setting', array('key' => 'dir_docs_admission'))->value;
		$specialties->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;

    $this->template->main = $specialties;
  }
}
