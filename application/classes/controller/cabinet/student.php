<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Student extends Controller_Cabinet
{
  public function action_index()
  {
		$cabinet = View::factory('cabinet/v_cabinet');
		$cabinet->kind = $this->user->kind;
		$cabinet->pageTitle = $this->pageTitle;

		$user = View::factory('cabinet/v_student');

		$user->dirImg = $this->dirImg;

		$user->user = ORM::factory('student', $this->user->id);

		$data = [];
		$data['user'] = $user->user;
		$user->personnel = View::factory('cabinet/v_personnel', $data);

		$data = [];
		$data['dirDoc'] = substr(ORM::factory('setting', ['key' => 'dir_docs_student_achievements'])->value, 1);
		$data['achievements'] = ORM::factory('studentachievements')
			->where('student_id', '=', $this->user->id)
			->order_by('description')
			->find_all();

		$user->achievement = View::factory('cabinet/v_achievement', $data);

		$isAchievements = ($data['achievements']->count() > 0);
		$isContract = ($user->user->contract != '0');

		$stylePayment = 'overflow-y: auto; margin-top: .5em; ';

		if ((!$isContract) and (!$isAchievements)) {
			$classPersonnel = 'personnel col-xs-12 col-sm-offset-3 col-sm-6';
			$classPayment = 'hidden';
			$classAchievement = 'hidden';
			$stylePayment .= 'max-height: 175px;';
		} elseif ((!$isContract) and ($isAchievements)) {
			$classPersonnel = 'personnel col-xs-12 col-sm-6';
			$classPayment = 'hidden';
			$stylePayment = '';
			$classAchievement = 'achievements col-xs-12 col-sm-6';
		} elseif (($isContract) and (!$isAchievements)) {
			$classPersonnel = 'personnel col-xs-12 col-sm-5';
			$classPayment = 'payment col-xs-12 col-sm-7';
			$stylePayment .= 'max-height: 175px;';
			$classAchievement = 'hidden';
		} else {
			$classPersonnel = 'personnel col-xs-12 col-sm-5';
			$classPayment = 'payment col-xs-12 col-sm-7';
			$stylePayment .= 'max-height: 350px;';
			$classAchievement = 'achievements';
		}

		$user->isContract = $isContract;
		$user->isAchievements = $isAchievements;

		$user->classPersonnel = $classPersonnel;
		$user->classPayment = $classPayment;
		$user->classAchievement = $classAchievement;

		$data = [];
		$data['date'] = ORM::factory('setting', ['key' => 'cabinet_actual_date'])->value;
		$data['stylePayment'] = $stylePayment;
		$data['dirDocs'] = $this->dirDocs;
		$data['payment'] = ORM::factory('payment')
			->where('student_id', '=', $this->user->id)
			->order_by('date', 'desc')
			->find_all();
		$user->payment = View::factory('cabinet/v_payment', $data);


		$cabinet->cabinet = $user;
		$this->template->main = $cabinet;
	}
}
