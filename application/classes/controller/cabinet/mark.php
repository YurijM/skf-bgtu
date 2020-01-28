<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Mark extends Controller_Cabinet
{
	public function action_index()
	{
		$cabinet = View::factory('cabinet/v_cabinet');
		$cabinet->pageTitle = $this->pageTitle . ' - Успеваемость';
		$cabinet->kind = $this->user->kind;

		$mark = View::factory('cabinet/v_mark');

		$mark->marks = ORM::factory('mark')
			->where('student_id', '=', $this->user->id)
			->order_by('semester', 'desc')
			->order_by('subject')
			->find_all();

		$mark->date = ORM::factory('setting', ['key' => 'cabinet_actual_date'])->value;

		$mark->dates = ORM::factory('certificationdates')->find();

		$student = ORM::factory('student', $this->user->id);
		$mark->isFulltimeEducation = (mb_substr($student->group, 0, 1) === 'З' ? false : true);

		$cabinet->cabinet = $mark;
		$this->template->main = $cabinet;
	}
}
