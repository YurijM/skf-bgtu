<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Schedulematriculantcollege extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Расписание вступительных испытаний СПО';

		$schedule = View::factory('v_schedule_matriculant_college');

		$schedule->mode = $this->mode;
		$schedule->page_title = $this->template->page_title;

		$schedule->start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))
			->value);
		$schedule->finish = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_finish'))
			->value);

		if (date('Ymd') < date($schedule->start[2] . $schedule->start[1] . $schedule->start[0])
			|| date('Ymd') > date($schedule->finish[2] . $schedule->finish[1] . $schedule->finish[0])) {
			$schedule->receiving = false;
		} else {
			$schedule->receiving = true;
		}

		$this->template->main = $schedule;
	}
}
