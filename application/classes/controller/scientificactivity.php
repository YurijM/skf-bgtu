<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Scientificactivity extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Итоги научной деятельности ППС';
    
    $scientificactivity = View::factory('v_scientific_activity');
    $scientificactivity->mode = $this->mode;
    $scientificactivity->page_title = $this->template->page_title;

		$scientificactivity->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;

		/*$scientificactivity->year = DB::select(array('MAX("year")', 'max_year'))->from('scientific_activity')->execute()->get('max_year', 0);

		$scientificactivity->scientificactivity = ORM::factory('scientificactivity')->with('personnel')->with('personnel:department')->where('year', '=', $scientificactivity->year)->order_by('personnel:department.department')->order_by('personnel.family')->order_by('personnel.name')->order_by('personnel.patronymic')->find_all();*/
    
    //$scientificactivity->department = $scientificactivity->scientificactivity[0]->personnel->department->department;

    $this->template->main = $scientificactivity;
  }
}
