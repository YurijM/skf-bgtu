<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rankedlists extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Ранжированные списки абитуриентов ВУЗ';

		$ranked = View::factory('v_ranked_lists');

		$ranked->mode = $this->mode;
		$ranked->page_title = $this->template->page_title;

		$ranked->start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))->value);
		$ranked->finish = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_finish'))->value);

		if (date('Ymd') < date($ranked->start[2] . $ranked->start[1] . $ranked->start[0])
			|| date('Ymd') > date($ranked->finish[2] . $ranked->finish[1] . $ranked->finish[0])) {
			$ranked->receiving = false;
		} else {
			$ranked->receiving = true;
		}

		//$ranked->year = $this->request->param('year');
		//$year = $ranked->start[2];

		if ($this->request->param('year') != null) {
			$ranked->year = $this->request->param('year');
		} else {
			$ranked->year = $ranked->start[2];
		}

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

		$ranked->statuses = [
			0 => '',
			1 => 'зачислен',
			2 => 'участвует в конкурсе'
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

		//$ranked->year = $this->request->param('year');

		$this->template->main = $ranked;
	}
}
