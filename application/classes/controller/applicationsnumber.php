<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Applicationsnumber extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Поданные заявления';

    $applications = View::factory('v_applications_number');
    
    $applications->mode = $this->mode;
    $applications->page_title = $this->template->page_title;
    
    $applications->year = $this->request->param('year');
    
    $this->education_forms = array(0 => 'очное обучение', 1 => 'заочное обучение');
    
    $applications->intramural = ORM::factory('applicationsnumber')->with('direction')->where('year', '=', $applications->year)->and_where('direction.education', '=', 0)->order_by('direction.direction')->find_all();
    $applications->extramural = ORM::factory('applicationsnumber')->with('direction')->where('year', '=', $applications->year)->and_where('direction.education', '=', 1)->order_by('direction.direction')->find_all();
		$applications->int_ext = ORM::factory('applicationsnumber')->with('direction')->where('year', '=', $applications->year)->and_where('direction.education', '=', 2)->order_by('direction.direction')->find_all();

    $this->template->main = $applications;
  }
}
