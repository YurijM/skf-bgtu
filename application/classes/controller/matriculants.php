<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Matriculants extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Списки на зачисление';

    $matriculants = View::factory('v_matriculants');
    
    $matriculants->mode = $this->mode;
    $matriculants->page_title = $this->template->page_title;
    
    $intramural_directions = ORM::factory('direction')->where('education', '=', 0)->order_by('direction')->find_all();
    
    $matriculants->intramural = array();
    
    $matriculants->year = $this->request->param('year');
    
    foreach ($intramural_directions as $direction)
    {
      $matriculants_budget = ORM::factory('matriculant')->with('section')->with('section:direction')->where('year', '=', $matriculants->year)->where('section:direction.id', '=', $direction->id)->and_where('cost_kind', '=', 0)->order_by('family')->order_by('name')->order_by('patronymic')->find_all();
      $matriculants_by_contract = ORM::factory('matriculant')->with('section')->with('section:direction')->where('year', '=', $matriculants->year)->where('section:direction.id', '=', $direction->id)->and_where('cost_kind', '=', 1)->order_by('family')->order_by('name')->order_by('patronymic')->find_all();
      $temp = ORM::factory('direction', $direction->id);
      $subjects = $temp->subjects->order_by('subject')->find_all();
     
      $matriculants->intramural[$direction->direction.' ('.$direction->code.')'] = array(
        'subjects' => $subjects,
        'budget' => $matriculants_budget,
        'by_contract' => $matriculants_by_contract
      );
    }
    
    $extramural_directions = ORM::factory('direction')->where('education', '=', 1)->order_by('direction')->find_all();
    
    $matriculants->extramural = array();
    
    foreach ($extramural_directions as $direction)
    {
      $matriculants_by_contract = ORM::factory('matriculant')->with('section')->with('section:direction')->where('year', '=', $matriculants->year)->where('section:direction.id', '=', $direction->id)->order_by('family')->order_by('name')->order_by('patronymic')->find_all();
      $subjects = ORM::factory('direction', $direction->id)->subjects->order_by('subject')->find_all();

      $matriculants->extramural[$direction->direction.' ('.$direction->code.')'] = array(
        'subjects' => $subjects,
        'by_contract' => $matriculants_by_contract
      );
    }

    $matriculants->count_intramural = DB::select(array('COUNT("matriculants.id")', 'current_count'))
      ->from('matriculants')
      ->join('sections')->on('sections.id', '=', 'matriculants.section_id')
      ->join('directions')->on('directions.id', '=', 'sections.direction_id')
      ->where('directions.education', '=', 0)
      ->and_where('matriculants.year', '=', $matriculants->year)
      ->execute()
      ->get('current_count');

    $matriculants->count_extramural = DB::select(array('COUNT("matriculants.id")', 'current_count'))
      ->from('matriculants')
      ->join('sections')->on('sections.id', '=', 'matriculants.section_id')
      ->join('directions')->on('directions.id', '=', 'sections.direction_id')
      ->where('directions.education', '=', 1)
      ->and_where('matriculants.year', '=', $matriculants->year)
      ->execute()
      ->get('current_count');

    $matriculants->statuses = array(0 => '', 1 => 'зачислен(а)', 2 => 'участвует в конкурсе');
    $matriculants->docs_kind = array(0 => 'копия', 1 => 'оригинал');

    $this->template->main = $matriculants;
  }
}
