<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Specialties extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Приемная кампания ВУЗ 2025';

		$specialties = View::factory('v_specialties');

		$specialties->mode = $this->mode;
		$specialties->page_title = $this->template->page_title;
		$specialties->link_to_bgtu = 'http://www.bstu.ru/Abitur/useful/specialties_list';

		$specialties->start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))->value);
		$specialties->finish = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_finish'))->value);

		if (date('Ymd') < date($specialties->start[2] . $specialties->start[1] . $specialties->start[0])
			|| date('Ymd') > date($specialties->finish[2] . $specialties->finish[1] . $specialties->finish[0])) {
			$specialties->receiving = false;
		} else {
			$specialties->receiving = true;
		}

		$specialties->dir_docs_admission = ORM::factory('setting', array('key' => 'dir_docs_admission'))->value;
		$specialties->dir_docs_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;
		$specialties->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;

		$this->template->main = $specialties;
	}
}
