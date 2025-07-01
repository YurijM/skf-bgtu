<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Matriculantscollege extends Controller_Admin
{
	private $page_title = 'Абитуриенты СПО';
	private $table;

	//==========================================================================//
	public function before()
	{
		parent::before();

		$this->template->page_title = $this->page_title;
		$this->table = ORM::factory('matriculantcollege')->table_name();
		$this->education_types = array(
			3 => 'очное на базе 9 классов',
			4 => 'очное на базе 11 классов',
		);
		$this->docs_kind = array(0 => 'копия', 1 => 'оригинал');
		$this->statuses = [
			0 => '',
			1 => 'зачислен(а)',
			2 => 'участвует в конкурсе',
			3 => 'не зачислен(а)',
		];
		$this->privilege = [0 => 'нет', 1 => 'да'];
	}

	//==========================================================================//
	public function action_index()
	{
		$page = $this->request->param('page');

		if (!$page) {
			$page = 1;
		}

		$count_matriculants_for_page = ORM::factory('setting', array('key' => 'admin_count_matriculants_for_page'))->value;
		$count_pages = ceil(ORM::factory('matriculantcollege')->count_all() / $count_matriculants_for_page);

		$matriculants = View::factory('admin/v_matriculants_college_list');
		$matriculants->matriculants = ORM::factory('matriculantcollege')
			->with('direction')
			->order_by('year', 'DESC')
			->order_by('family')->order_by('name')->order_by('patronymic')
			->limit($count_matriculants_for_page)
			->offset(($page - 1) * $count_matriculants_for_page)->find_all();
		$matriculants->pagination = $this->widget_load(
			$this->widgets_folder . 'pagination/' . $count_pages . '/' . $page . '/admin@matriculantscollege@'
		);
		$matriculants->page = $page;
		$matriculants->count_matriculants_for_page = $count_matriculants_for_page;
		$matriculants->page_title = $this->page_title;
		$matriculants->table = $this->table;
		$matriculants->education_types = $this->education_types;
		$matriculants->docs_kind = $this->docs_kind;
		$matriculants->statuses = $this->statuses;
		$matriculants->privilege = $this->privilege;

		$this->template->main = $matriculants;
	}

	//==========================================================================//
	public function action_edit()
	{
		$id = $this->request->param('id');

		$matriculant = View::factory('admin/v_matriculant_college');
		$matriculant->page = $this->request->param('page');
		$matriculant->page_title = $this->page_title;
		$matriculant->table = $this->table;
		$matriculant->education_types = $this->education_types;
		$matriculant->docs_kind = $this->docs_kind;
		$matriculant->statuses = $this->statuses;

		$matriculant->current_year = date('Y');

		$matriculant->directions = ORM::factory('direction')
			->where('education', '>', 2)
			->order_by('direction')
			->order_by('education')
			->find_all()
			->as_array();

		if ($id) {
			$matriculant->matriculant = ORM::factory('matriculantcollege', $id);
			$matriculant->confirmation_delete = $this->widget_load(
				$this->widgets_folder . 'confirmationdelete/' . $matriculant->matriculant->family . ' ' . $matriculant->matriculant->name . ' ' . $matriculant->matriculant->patronymic
			);
		} else {
			$matriculant->matriculant = ORM::factory('matriculantcollege');
		}

		$this->template->main = $matriculant;
	}

	//==========================================================================//
	public function action_save()
	{
		$id = Arr::get($_POST, 'id');

		if ($id > 0) {
			$matriculant = ORM::factory('matriculantcollege', $id);
			if (isset($_POST['delete'])) {
				$matriculant->delete();

				$count_matriculants_for_page = ORM::factory('setting', array('key' => 'admin_count_matriculants_for_page'))->value;
				$count_pages = ceil(ORM::factory('matriculantcollege')->count_all() / $count_matriculants_for_page);
				$page = $this->request->param('page');

				$this->request->redirect('admin/matriculantscollege/' . ($page > $count_pages ? $count_pages : $page));
			}
		} else {
			$matriculant = ORM::factory('matriculantcollege');
		}

		$matriculant->year = Arr::get($_POST, 'year');
		$matriculant->insurance_number = trim(Arr::get($_POST, 'insurance_number'));
		$matriculant->family = trim(Arr::get($_POST, 'family'));
		$matriculant->name = trim(Arr::get($_POST, 'name'));
		$matriculant->patronymic = trim(Arr::get($_POST, 'patronymic'));

		$direction = Arr::get($_POST, 'direction');
		$matriculant->direction_id = ($direction == 0 ? NULL : $direction);

		$matriculant->points = Arr::get($_POST, 'points');

		$matriculant->doc_kind = Arr::get($_POST, 'doc_kind');
		$matriculant->status = Arr::get($_POST, 'status');
		$matriculant->privilege = Arr::get($_POST, 'privilege');

		$matriculant->save();

		$this->request->redirect('admin/matriculantscollege/' . $this->search_page($matriculant->id));
	}

	//==========================================================================//
	private function search_page($id)
	{
		$matriculants = ORM::factory('matriculantcollege')
			->with('direction')
			->order_by('year', 'DESC')
			->order_by('family')->order_by('name')->order_by('patronymic')
			->find_all();

		$n = 1;
		foreach ($matriculants as $matriculant) {
			if ($matriculant->id == $id) {
				break;
			}
			$n++;
		}

		$count_matriculants_for_page = ORM::factory('setting', array('key' => 'admin_count_matriculants_for_page'))->value;

		return ceil($n / $count_matriculants_for_page);
	}
}
