<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rankedlists extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Ранжированные списки абитуриентов ВУЗ';

    $ranked = View::factory('v_ranked_lists');
    
    $ranked->mode = $this->mode;
    $ranked->page_title = $this->template->page_title;
    
    $ranked->year = $this->request->param('year');

    $ranked->list0 = ORM::factory('matriculant')
			->where('year', '=', $ranked->year)
			->and_where('admission_conditions', '=', 0)
			->find_all();

		$ranked->list1 = ORM::factory('matriculant')
			->where('year', '=', $ranked->year)
			->and_where('admission_conditions', '=', 1)
			->find_all();

		$ranked->list2 = ORM::factory('matriculant')
			->where('year', '=', $ranked->year)
			->and_where('admission_conditions', '=', 2)
			->find_all();

		$ranked->year = $this->request->param('year');

    $this->template->main = $ranked;
  }
}
