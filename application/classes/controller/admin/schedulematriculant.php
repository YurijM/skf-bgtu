<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Schedulematriculant extends Controller_Admin {
  private $page_title = 'Расписание вступительных испытаний';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('schedulematriculant')->table_name();
    $this->event_types = array(0 => 'экзамен', 1 => 'консультация', 2 => 'объявление результатов', 3 => 'апелляция');
  }
  
  //==========================================================================//
  public function action_index()
  {
    $schedule = View::factory('admin/v_schedule_matriculant_list');
    $schedule->page_title = $this->page_title;
    $schedule->table = $this->table;

    $schedule->event_types = $this->event_types;

    $schedule->intramural = ORM::factory('schedulematriculant')->where('education', '=', 0)->order_by('date')->order_by('subject')->find_all();
    $schedule->extramural = ORM::factory('schedulematriculant')->where('education', '=', 1)->order_by('date')->order_by('subject')->find_all();
		$schedule->int_ext = ORM::factory('schedulematriculant')->where('education', '=', 2)->order_by('date')->order_by('subject')->find_all();

    $this->template->main = $schedule;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $schedule = View::factory('admin/v_schedule_matriculant');
    $schedule->page_title = $this->page_title;
    $schedule->table = $this->table;
    $schedule->dir_css = $this->dir_css;
    $schedule->dir_js = $this->dir_js;
    $schedule->event_types = $this->event_types;

    $schedule->weekdays = array(0 => 'вс', 1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб');
    $schedule->education_forms = array(
			0 => 'очное отделение',
			1 => 'заочное отделение',
			2 => 'очно-заочное',
			3 => 'очное на базе 9 классов',
			4 => 'очное на базе 11 классов',
		);
    $schedule->subjects = array('информатика' => 'информатика', 'математика' => 'математика', 'обществознание' => 'обществознание', 'русский язык' => 'русский язык', 'физика' => 'физика', 'резервный день' => 'резервный день');
    
    if ($id)
    {
      $schedule->schedule = ORM::factory('schedulematriculant', $id);
      $schedule->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace('.', '-', Helper_Addfunction::datetime_from_mysql($schedule->schedule->date, FALSE)).' '.$schedule->schedule->subject);
    }
    else
    {
      $schedule->schedule = ORM::factory('schedulematriculant');
    }

    $this->template->main = $schedule;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $schedule = ORM::factory('schedulematriculant', $id);
      if (isset($_POST['delete']))
      {
        $schedule->delete();
        $this->request->redirect('admin/schedulematriculant');
      }
    }
    else
    {
      $schedule = ORM::factory('schedulematriculant');
    }
    
    $schedule->education = Arr::get($_POST, 'education');
    $schedule->date = Helper_Addfunction::datetime_to_mysql(Arr::get($_POST, 'date'));
    $schedule->subject = mb_strtolower(trim(Arr::get($_POST, 'subject')));
    $schedule->event_type = Arr::get($_POST, 'event_type');
    $schedule->classroom = trim(Arr::get($_POST, 'classroom'));

    $schedule->save();
    
    $this->request->redirect('admin/schedulematriculant');
  }
}
