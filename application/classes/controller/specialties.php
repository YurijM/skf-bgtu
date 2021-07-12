<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Specialties extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Приемная кампания ВУЗ 2021';

    $specialties = View::factory('v_specialties');
    
    $specialties->mode = $this->mode;
    $specialties->page_title = $this->template->page_title;
    $specialties->link_to_bgtu = 'http://www.bstu.ru/Abitur/useful/specialties_list';

		$specialties->dir_docs_admission = ORM::factory('setting', array('key' => 'dir_docs_admission'))->value;
    $specialties->dir_docs_programs = ORM::factory('setting', array('key' => 'dir_docs_programs'))->value;

    $this->template->main = $specialties;
  }
}
