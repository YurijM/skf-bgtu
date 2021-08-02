<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rankedlists extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Ранжированные списки абитуриентов ВУЗ';

		$ranked = View::factory('v_ranked_lists');

		$ranked->mode = $this->mode;
		$ranked->page_title = $this->template->page_title;

		$ranked->year = $this->request->param('year');

		$ranked->education_forms = [
			0 => 'очное обучение',
			1 => 'заочное обучение',
			2 => 'очно-заочное обучение'
		];

		$ranked->cost_kinds = [
			0 => 'бюджет',
			1 => 'полное возмещение затрат'
		];

		$ranked->admission_conditions = [
			0 => 'поступающие в рамках особой квоты',
			1 => 'поступающие в рамках целевого набора',
			2 => 'поступающие в рамках общего конкурса'
		];

		$ranked->list = ORM::factory('matriculant')
			->with('section')
			->with('section:direction')
			->where('year', '=', $ranked->year)
			->and_where('section:direction.education', '<', 4)
			->order_by('section:direction.direction')
			->order_by('section:direction.education')
			->order_by('cost_kind')
			->order_by('admission_conditions')
			->order_by(DB::expr('(points_1 + points_2 + points_3 + points_4 + test + achievement)'), 'DESC')
			->find_all();

		$ranked->year = $this->request->param('year');

		$this->template->main = $ranked;
	}
}
