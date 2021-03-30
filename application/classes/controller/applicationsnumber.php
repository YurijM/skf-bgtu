<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Applicationsnumber extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Поданные заявления';

    $applications = View::factory('v_applications_number');
    
    $applications->mode = $this->mode;
    $applications->page_title = $this->template->page_title;
    
    $applications->year = $this->request->param('year');
    
    $this->education_forms = array(0 => 'очное обучение', 1 => 'заочное обучение');
    
    $applications->intramural = ORM::factory('applicationsnumber')->with('direction')->where('year', '=', $applications->year)->and_where('direction.education', '=', 0)->order_by('direction.direction')->find_all();
    $applications->extramural = ORM::factory('applicationsnumber')->with('direction')->where('year', '=', $applications->year)->and_where('direction.education', '=', 1)->order_by('direction.direction')->find_all();
		$applications->int_ext = ORM::factory('applicationsnumber')->with('direction')->where('year', '=', $applications->year)->and_where('direction.education', '=', 2)->order_by('direction.direction')->find_all();

		$applications->matriculants_page_title = 'Списки на зачисление';

		$intramural_directions = ORM::factory('direction')->where('education', '=', 0)->order_by('direction')->find_all();

		$applications->matriculants_intramural = array();

		$applications->matriculants_year = $this->request->param('year');

		foreach ($intramural_directions as $direction)
		{
			$applications->matriculants_budget = ORM::factory('matriculant')->with('section')->with('section:direction')->where('year', '=',
				$applications->matriculants_year)->where('section:direction.id', '=', $direction->id)->and_where('cost_kind', '=', 0)->order_by('family')
			->order_by('name')->order_by('patronymic')->find_all();
			$applications->matriculants_by_contract = ORM::factory('matriculant')->with('section')->with('section:direction')->where('year', '=',
				$applications->matriculants_year)->where('section:direction.id', '=', $direction->id)->and_where('cost_kind', '=', 1)->order_by('family')
			->order_by('name')->order_by('patronymic')->find_all();
			$temp = ORM::factory('direction', $direction->id);
			$subjects = $temp->subjects->order_by('subject')->find_all();

			$applications->matriculants_intramural[$direction->direction.' ('.$direction->code.')'] = array(
				'subjects' => $subjects,
				'budget' => $applications->matriculants_budget,
				'by_contract' => $applications->matriculants_by_contract
			);
		}

		$extramural_directions = ORM::factory('direction')->where('education', '=', 1)->order_by('direction')->find_all();

		$applications->matriculants_extramural = array();

		foreach ($extramural_directions as $direction)
		{
			$applications->matriculants_by_contract = ORM::factory('matriculant')->with('section')->with('section:direction')->where('year', '=',
				$applications->matriculants_year)->where('section:direction.id', '=', $direction->id)->order_by('family')->order_by('name')->order_by('patronymic')
				->find_all();
			$subjects = ORM::factory('direction', $direction->id)->subjects->order_by('subject')->find_all();

			$applications->matriculants_extramural[$direction->direction.' ('.$direction->code.')'] = array(
				'subjects' => $subjects,
				'by_contract' => $applications->matriculants_by_contract
			);
		}

		$int_ext_directions = ORM::factory('direction')->where('education', '=', 2)->order_by('direction')->find_all();

		$applications->matriculants_int_ext = [];

		foreach ($int_ext_directions as $direction)
		{
			$applications->matriculants_by_contract = ORM::factory('matriculant')->with('section')->with('section:direction')->where('year', '=',
				$applications->matriculants_year)->where('section:direction.id', '=', $direction->id)->order_by('family')->order_by('name')->order_by('patronymic')
				->find_all();
			$subjects = ORM::factory('direction', $direction->id)->subjects->order_by('subject')->find_all();

			$applications->matriculants_int_ext[$direction->direction.' ('.$direction->code.')'] = array(
				'subjects' => $subjects,
				'by_contract' => $applications->matriculants_by_contract
			);
		}

		$applications->matriculants_count_intramural = DB::select(array('COUNT("matriculants.id")', 'current_count'))
			->from('matriculants')
			->join('sections')->on('sections.id', '=', 'matriculants.section_id')
			->join('directions')->on('directions.id', '=', 'sections.direction_id')
			->where('directions.education', '=', 0)
			->and_where('matriculants.year', '=', $applications->matriculants_year)
			->execute()
			->get('current_count');

		$applications->matriculants_count_extramural = DB::select(array('COUNT("matriculants.id")', 'current_count'))
			->from('matriculants')
			->join('sections')->on('sections.id', '=', 'matriculants.section_id')
			->join('directions')->on('directions.id', '=', 'sections.direction_id')
			->where('directions.education', '=', 1)
			->and_where('matriculants.year', '=', $applications->matriculants_year)
			->execute()
			->get('current_count');

		$applications->matriculants_count_int_ext = DB::select(array('COUNT("matriculants.id")', 'current_count'))
			->from('matriculants')
			->join('sections')->on('sections.id', '=', 'matriculants.section_id')
			->join('directions')->on('directions.id', '=', 'sections.direction_id')
			->where('directions.education', '=', 2)
			->and_where('matriculants.year', '=', $applications->matriculants_year)
			->execute()
			->get('current_count');

		$applications->matriculants_statuses = array(0 => '', 1 => 'зачислен(а)', 2 => 'участвует в конкурсе');
		$applications->matriculants_docs_kind = array(0 => 'копия', 1 => 'оригинал');

    $this->template->main = $applications;
  }
}
