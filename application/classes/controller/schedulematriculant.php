<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Schedulematriculant extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Расписание вступительных испытаний';

		$schedule = View::factory('v_schedule_matriculant');

		$schedule->mode = $this->mode;
		$schedule->page_title = $this->template->page_title;

		$schedule->weekdays = array(0 => 'вс', 1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб');

		$schedule->intramural = ORM::factory('schedulematriculant')->where('education', '=', 0)->and_where('event_type', '=', 0)->and_where('subject', '<>', 'резервный день')->order_by('date')->find_all();
		$schedule->intramural_reserve_day = ORM::factory('schedulematriculant')->where('education', '=', 0)->and_where('subject', '=', 'резервный день')->find();

		$schedule->extramural = ORM::factory('schedulematriculant')->where('education', '=', 1)->and_where('event_type', '=', 0)->and_where('subject', '<>', 'резервный день')->order_by('date')->find_all();
		$schedule->extramural_reserve_day = ORM::factory('schedulematriculant')->where('education', '=', 1)->and_where('subject', '=', 'резервный день')->find();

		$schedule->int_ext = ORM::factory('schedulematriculant')->where('education', '=', 2)->and_where('event_type', '=', 0)->and_where('subject', '<>', 'резервный день')->order_by('date')->find_all();
		$schedule->int_ext_reserve_day = ORM::factory('schedulematriculant')->where('education', '=', 2)->and_where('subject', '=', 'резервный день')->find();

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
