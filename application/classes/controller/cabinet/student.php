<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Student extends Controller_Cabinet
{
  public function action_index()
  {
		$cabinet = View::factory('cabinet/v_cabinet');
		$cabinet->kind = $this->user->kind;
		$cabinet->pageTitle = $this->pageTitle;

		$user = View::factory('cabinet/v_student');

		$user->user = ORM::factory('student', $this->user->id);
		$user->dirDocs = $this->dirDocs;
		$user->dirImg = $this->dirImg;

		$user->payment = ORM::factory('payment')
			->where('student_id', '=', $this->user->id)
			->order_by('date', 'desc')
			->find_all();

		$cabinet->cabinet = $user;
		$this->template->main = $cabinet;
	}
}
