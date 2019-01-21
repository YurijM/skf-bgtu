<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Portfolio extends Controller_Cabinet
{
	public $cabinet;

	public function before()
	{
		parent::before();

		$this->cabinet = View::factory('cabinet/v_cabinet');
		$this->cabinet->kind = $this->user->kind;
		$this->cabinet->pageTitle = $this->pageTitle . ' - Учебные материалы';
	}

	public function action_index()
	{
		$this->cabinet->pageTitle = $this->pageTitle . ' - Портфолио студентов';

		$portfolio = View::factory('cabinet/v_portfolio');

		/*$portfolio->no = 1;

		$portfolio->students = DB::select('s.id', 's.person', 's.group', ['count("a.student_id")', 'count'])
			->from(['student_achievements', 'a'])
			->join(['students', 's'], 'LEFT')
			->on('s.id', '=', 'a.student_id')
			->group_by('a.student_id')
			->order_by('s.person')
			//->distinct('s.id')
			->execute();*/

		$portfolio->student = $this->request->param('student');
		$portfolio->isAbsent = $this->request->param('isAbsent');

		$this->cabinet->cabinet = $portfolio;
		$this->template->main = $this->cabinet;
	}

	//==========================================================================//
	public function action_view()
	{
		/*$studentId = $this->request->param('id');

		$student = ORM::factory('student', $studentId)->person;

		$this->cabinet->pageTitle = 'Портфолио - ' . $student;

		$data['dirDoc'] = substr(ORM::factory('setting', ['key' => 'dir_docs_student_achievements'])->value, 1);
		$data['achievements'] = ORM::factory('studentachievements')
			->where('student_id', '=', $studentId)
			->order_by('description')
			->find_all();

		$portfolio = View::factory('cabinet/v_portfolio_list', $data);

		$this->cabinet->cabinet = $portfolio;
		$this->template->main = $this->cabinet;*/


		$student = Arr::get($_POST, 'student');

		$studentId = ORM::factory('student')->where('person', '=', $student)->find()->id;

		$isAchivement = ORM::factory('studentachievements')
			->where('student_id', '=', $studentId)
			->find()
			->id;

		if ($isAchivement) {
			$this->cabinet->pageTitle = 'Портфолио - ' . $student;

			$data['dirDoc'] = substr(ORM::factory('setting', ['key' => 'dir_docs_student_achievements'])->value, 1);
			$data['achievements'] = ORM::factory('studentachievements')
				->where('student_id', '=', $studentId)
				->order_by('description')
				->find_all();

			$portfolio = View::factory('cabinet/v_portfolio_list', $data);
		} else {
			$data['student'] = $student;
			$data['isAbsent'] = ($student == '' ? false : true);

			$portfolio = View::factory('cabinet/v_portfolio', $data);
		}
		$this->cabinet->cabinet = $portfolio;
		$this->template->main = $this->cabinet;
	}
}