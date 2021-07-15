<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Applicationsnumbercollege extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Поданные заявления СПО';

		$applications = View::factory('v_applications_number_college');

		$applications->mode = $this->mode;
		$applications->page_title = $this->template->page_title;

		$applications->year = $this->request->param('year');

		$applications->education_forms = array(
			3 => 'очное обучение на базе 9 классов',
			4 => 'очное обучение на базе 11 классов'
		);
		$applications->docs_kind = array(0 => 'копия', 1 => 'оригинал');
		$applications->is_list_empty = true;

		$applications->numbers = ORM::factory('applicationsnumbercollege')
			->with('direction')
			->where('year', '=', $applications->year)
			->order_by('direction.code')
			->order_by('direction.education')
			->find_all();

		$applications->places = [];
		foreach ($applications->numbers as $item) {
			$count = DB::select(array('COUNT("direction_id")', 'current_count'))
				->from('matriculants_college')
				->where('year', '=', $applications->year)
				->and_where('direction_id', '=', $item->direction->id)
				->execute()
				->get('current_count');
			$applications->places[$item->direction->id] = $count;
		}

		$applications->forms = [];
		$applications->list = [];

		foreach ($applications->education_forms as $form => $title) {
			$directions = ORM::factory('direction')
				->where('education', '=', $form)
				->order_by('code')
				->find_all();

			$applications->forms[$form] = $directions;

			foreach ($directions as $direction) {
				$persons = ORM::factory('matriculantcollege')
					->where('year', '=', $applications->year)
					->and_where('direction_id', '=', $direction->id)
					->order_by('family')
					->order_by('name')
					->order_by('patronymic')
					->find_all();

				if (count($persons) > 0) $applications->is_list_empty = false;

				$applications->list[$direction->id] = $persons;
			}
		}

		$this->template->main = $applications;
	}
}
