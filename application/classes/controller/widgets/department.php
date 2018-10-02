<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Department extends Controller_Widget {
  public $template = 'widgets/w_department';
  public function action_index()
  {
    $id = $this->request->param('id');

    $this->template->mode = $this->mode;

    $this->template->dir_img_personnel = ORM::factory('setting', array('key' => 'dir_img_personnel'))->value;

    $this->template->head = ORM::factory('department', $id)->head_personnel_id;
    // Выбираем штатных сотрудников.
    // В таблице employment_types запись со штатными преподавателями должна иметь поле order_no = 1
    // Изменения внесены в связи с желанием заказчика показывать ТОЛЬКО штатных преподавателей
    $staffer = ORM::factory('employmenttype')->where('order_no', '=', 1)->find();
    $this->template->personnel = ORM::factory('personnel')->where('fired', '=', 0)->and_where('department_id', '=',
      $id)->and_where('employment_type_id', '=', $staffer->id)->order_by('family')->order_by('name')
      ->order_by
    ('patronymic')->find_all();
  }
}
