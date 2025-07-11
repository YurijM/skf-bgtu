<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rankedlistscolledge extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Ранжированные списки абитуриентов СПО';

		$ranked = View::factory('v_ranked_lists_colledge');

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

		$ranked->educations = [
			3 => 'на базе 9 классов',
			4 => 'на базе 11 классов'
		];

		$ranked->statuses = [
			0 => '',
			1 => 'зачислен(а)',
			2 => 'участвует в конкурсе',
			3 => 'не зачислен(а)',
		];

		$ranked->list = ORM::factory('matriculantcollege')
			->with('direction')
			->where('year', '=', $ranked->year)
			->order_by('direction:education')
			->order_by('direction:direction')
			->order_by('privilege', 'DESC')
			->order_by('points', 'DESC')
			->order_by('insurance_number')
			->find_all();

		//$ranked->year = $this->request->param('year');

		$this->template->main = $ranked;
	}
}
