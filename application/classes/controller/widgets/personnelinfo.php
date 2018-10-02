<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Personnelinfo extends Controller_Widget
{
	public $template = 'widgets/w_personnel_info';
	private $staffer;

	public function  before()
	{
		parent::before();

		$this->template->mode = $this->mode;
	}

	public function action_department()
	{
		$id = $this->request->param('id');
		// Выбираем штатных сотрудников.
		// В таблице employment_types запись со штатными преподавателями должна иметь поле order_no = 1
		// Изменения внесены в связи с желанием заказчика показывать ТОЛЬКО штатных преподавателей
		$staffer = ORM::factory('employmenttype')->where('order_no', '=', 1)->find();

		$this->template->personnel = ORM::factory('personnel')->where('fired', '=', 0)->and_where('department_id', '=',
			$id)->and_where('employment_type_id', '=', $staffer->id)->find_all();
	}

	public function action_governance()
	{
		$governance = ORM::factory('governance')->find_all();
		$personnel = [];
		foreach ($governance as $item)
			$personnel[] = $item->personnel_id;

		$this->template->personnel = ORM::factory('personnel')->where('id', 'in', $personnel)->order_by('family')
			->order_by('name')->order_by('patronymic')->find_all();
	}
}
