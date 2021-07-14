<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Applicationsnumbercollege extends Controller_Admin
{
	private $page_title = 'Количество мест для поступления СПО';
	private $table;

	//==========================================================================//
	public function before()
	{
		parent::before();

		$this->template->page_title = $this->page_title;
		$this->table = ORM::factory('applicationsnumbercollege')->table_name();
		$this->education_forms = array(
			0 => 'очное отделение',
			1 => 'заочное отделение',
			2 => 'очно-заочное',
			3 => 'очное на базе 9 классов',
			4 => 'очное на базе 11 классов',
		);
	}

	//==========================================================================//
	public function action_index()
	{
		$applications = View::factory('admin/v_applications_number_college_list');
		$applications->page_title = $this->page_title;
		$applications->table = $this->table;

		$applications->education_forms = $this->education_forms;

		$applications->applications = ORM::factory('applicationsnumbercollege')
			->with('direction')
			->order_by('year', 'DESC')
			->order_by('direction.direction')
			->find_all();

		$this->template->main = $applications;
	}

	//==========================================================================//
	public function action_edit()
	{
		$id = $this->request->param('id');

		$applications = View::factory('admin/v_applications_number_college');
		$applications->page_title = $this->page_title;
		$applications->table = $this->table;
		$applications->education_forms = $this->education_forms;

		$applications->years = [
			2015 => 2015,
			2016 => 2016,
			2017 => 2017,
			2018 => 2018,
			2019 => 2019,
			2020 => 2020,
			2021 => 2021,
			2022 => 2022,
			2023 => 2023,
			2024 => 2024,
			2025 => 2025
		];
		$applications->year = date('Y');

		$applications->directions = ORM::factory('direction')
			->order_by('education')
			->order_by('direction')
			->find_all();

		if ($id) {
			$applications->applications = ORM::factory('applicationsnumbercollege')
				->with('direction')
				->where('applicationsnumbercollege.id', '=', $id)
				->find();
			$applications->confirmation_delete = $this->widget_load($this->widgets_folder . 'confirmationdelete/' . $applications->education_forms[$applications->applications->direction->education] . ' - ' . $applications->applications->direction->direction);
		} else {
			$applications->applications = ORM::factory('applicationsnumbercollege');
		}

		$this->template->main = $applications;
	}

	//==========================================================================//
	public function action_save()
	{
		$id = Arr::get($_POST, 'id');
		if ($id > 0) {
			$applications = ORM::factory('applicationsnumbercollege', $id);
			if (isset($_POST['delete'])) {
				$applications->delete();
				$this->request->redirect('admin/applicationsnumbercollege');
			}
		} else {
			$applications = ORM::factory('applicationsnumbercollege');
		}

		$applications->year = Arr::get($_POST, 'year');
		$direction = Arr::get($_POST, 'direction');
		$applications->direction_id = ($direction == 0 ? NULL : $direction);
		$count = Arr::get($_POST, 'count');
		$applications->count = ($count ? $count : 0);

		$applications->save();

		$this->request->redirect('admin/applicationsnumbercollege');
	}
}
