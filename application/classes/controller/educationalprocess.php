<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Educationalprocess extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Учебный процесс';

    $studies = View::factory('v_educational_process');

    $studies->mode = $this->mode;
    $studies->page_title = $this->template->page_title;
    
    $studies->dir_docs_schedule = ORM::factory('setting', array('key' => 'dir_docs_schedule'))->value;
    
    $studies->depot = ORM::factory('depot')->order_by('order_no')->find_all();
    $studies->schedule_exams_fulltime = ORM::factory('schedule')->where('education', '=', 'очное')->order_by('schedule')->find_all();
    $studies->schedule_exams_distance = ORM::factory('schedule')->where('education', '=', 'заочное')->order_by('schedule')->find_all();
		$studies->schedule_exams_parttime = ORM::factory('schedule')->where('education', '=', 'очно-заочное')->order_by('schedule')->find_all();
		$studies->schedule_exams_middle = ORM::factory('schedule')->where('education', '=',
			'СПО')->order_by('schedule')->find_all();

    $this->template->main = $studies;
  }
}
