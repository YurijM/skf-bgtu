<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Matriculantspreviousyears extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Информация о приёме прошлых лет';

    $matriculants = View::factory('v_matriculants_previous_years');
    
    $matriculants->mode = $this->mode;
    $matriculants->page_title = $this->template->page_title;

		$start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))
			->value);

    $matriculants->years = ORM::factory('matriculant')
      //->where('year', '<', (date('Y' . '1231') > date('Ymd') ? date('Y') : date('Y') + 1)) //date('Y'))
      ->where('year', '<', $start[2])
      ->order_by('year', 'DESC')
      ->group_by('year')
      ->find_all();

    $this->template->main = $matriculants;
  }
}
