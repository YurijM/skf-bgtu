<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Competition extends Controller_Cabinet
{
	public function action_index()
	{
		$cabinet = View::factory('cabinet/v_cabinet');
		$cabinet->pageTitle = 'Результаты освоения основной образовательной программы';
		$cabinet->kind = $this->user->kind;

		$faculty = ORM::factory('student', $this->user->id)->faculty;
		$facultyId = ORM::factory('faculty', ['faculty' => $faculty])->id;

		$competition = View::factory('cabinet/v_competition');

		$competition->date = ORM::factory('setting', ['key' => 'cabinet_actual_date'])->value;
		$competition->competitions = DB::select(
			'c.code', 'c.competition', 'c.subject', ['ifnull("cm.mark", "")', 'mark'])
			->distinct(true)
			->from(['competitions', 'c'])
			->join(['competition_marks', 'cm'], 'LEFT')
			->on('cm.subject_id', '=', 'c.subject_id')
			->where('c.spec_id', '=',  $facultyId)
			->where_open()
			->where('cm.student_id', '=', $this->user->id)
			->or_where('cm.student_id', '=', null)
			->where_close()
			->order_by('c.code')
			->order_by('c.subject')
			->execute();

		$cabinet->cabinet = $competition;
		$this->template->main = $cabinet;
	}
}
