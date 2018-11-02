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

		$achievements = ORM::factory('studentachievements')
			->where('student_id', '=', $this->user->id)
			->order_by('description')
			->find_all();

		$user->achievement = View::factory('cabinet/v_achievement', $achievements);

		$isAchievements = ($achievements->count() > 0);
		$isContract = ($user->contract != '0');

		if ((!$isContract) and (!$isAchievements)) {
			$classPersonnel = 'personnel col-xs-12 col-md-offset-3 col-md-6';
		}

		$user->classPayment = $user->user->contract == '0'
			? 'hidden'
			: 'payment col-xs-12 col-md-7';

		$user->stylePayment = 'overflow-y: scroll; '
			. ($user->achievements->count() > 0
				? 'max-height: 370px;'
				: 'max-height: 155px;');

		$user->classAchievements = ($user->achievements->count() == 0
			? 'hidden'
			: 'achievements col-xs-12 '
				. ($user->user->contract == '0' ? 'col-md-7' : 'col-md-5')
		);

		$cabinet->cabinet = $user;
		$this->template->main = $cabinet;
	}
}
