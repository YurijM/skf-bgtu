<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Matriculants extends Controller_Admin {
  private $page_title = 'Абитуриенты ВУЗ';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('matriculant')->table_name();
    $this->statuses = array(0 => '', 1 => 'зачислен(а)', 2 => 'участвует в конкурсе');
    $this->costs_kind = array(0 => 'бюджет', 1 => 'полное возмещение затрат');
    $this->education_types = array(0 => 'очно', 1 => 'заочно', 2 => 'очно-заочно');
  }
  
  //==========================================================================//
  public function action_index()
  {
    $page = $this->request->param('page');

    if (! $page)
    {
      $page = 1;
    }

    $count_matriculants_for_page = ORM::factory('setting', array('key' => 'admin_count_matriculants_for_page'))->value;
    $count_pages = ceil(ORM::factory('matriculant')->count_all() / $count_matriculants_for_page);
      
    $matriculants = View::factory('admin/v_matriculants_list');
    $matriculants->matriculants = ORM::factory('matriculant')->with('section')->with('section:direction')->order_by('year', 'DESC')->order_by('family')->order_by('name')->order_by('patronymic')->limit($count_matriculants_for_page)->offset(($page - 1) * $count_matriculants_for_page)->find_all();
    $matriculants->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page.'/admin@matriculants@');
    $matriculants->page = $page;
    $matriculants->count_matriculants_for_page = $count_matriculants_for_page;
    $matriculants->page_title = $this->page_title;
    $matriculants->table = $this->table;
    $matriculants->statuses = $this->statuses;
    $matriculants->costs_kind = $this->costs_kind;
    $matriculants->education_types = $this->education_types;
    
    $this->template->main = $matriculants;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $matriculant = View::factory('admin/v_matriculant');
    $matriculant->page = $this->request->param('page');
    $matriculant->page_title = $this->page_title;
    $matriculant->table = $this->table;
    $matriculant->statuses = $this->statuses;
    $matriculant->costs_kind = $this->costs_kind;
    $matriculant->education_types = $this->education_types;

    $matriculant->current_year = date('Y');
    
    $matriculant->docs_kind = array(0 => 'копия', 1 => 'оригинал');
    
    $matriculant->sections = ORM::factory('section')->with('direction')->order_by('section')->find_all()->as_array();
    
    if ($id)
    {
      $matriculant->matriculant = ORM::factory('matriculant', $id);
      $matriculant->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$matriculant->matriculant->family.' '.$matriculant->matriculant->name.' '.$matriculant->matriculant->patronymic);
    }
    else
    {
      $matriculant->matriculant = ORM::factory('matriculant');
    }

    $this->template->main = $matriculant;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    
    if ($id > 0)
    {
      $matriculant = ORM::factory('matriculant', $id);
      if (isset($_POST['delete']))
      {
        //$section_id = $matriculant->section_id;
        //$year = $matriculant->year;

        $matriculant->delete();

        //$this->update_applicationsnumber($section_id, $year, true);

        $count_matriculants_for_page = ORM::factory('setting', array('key' => 'admin_count_matriculants_for_page'))->value;
        $count_pages = ceil(ORM::factory('matriculant')->count_all() / $count_matriculants_for_page);
        $page = $this->request->param('page');

        $this->request->redirect('admin/matriculants/'.($page > $count_pages ? $count_pages : $page));
      }
    }
    else
    {
      $matriculant = ORM::factory('matriculant');
    }
    
    $matriculant->year = Arr::get($_POST, 'year');
    $matriculant->family = trim(Arr::get($_POST, 'family'));
    $matriculant->name = trim(Arr::get($_POST, 'name'));
    $matriculant->patronymic = trim(Arr::get($_POST, 'patronymic'));

    //!!! Предметы ЕГЭ для направления выбранного профиля обязательно должны быть установлены !!!
    //Иначе при сохранении будет выходить ошибка
    $matriculant->subject_id_1 = Arr::get($_POST, 'subject_1');
    $matriculant->subject_id_2 = Arr::get($_POST, 'subject_2');
    $matriculant->subject_id_3 = Arr::get($_POST, 'subject_3');
		$matriculant->subject_id_4 = Arr::get($_POST, 'subject_4');

    $test = Arr::get($_POST, 'test');
    $matriculant->test = ($test ? : 0);
    // Еслии введены баллы за вступительное испытание, то баллы за ЕГЭ будут обнулены
    if ($matriculant->test > 0) {
      $matriculant->points_1 = 0;
      $matriculant->points_2 = 0;
      $matriculant->points_3 = 0;
			$matriculant->points_4 = 0;
    }
    else
    {
      $points_1 = Arr::get($_POST, 'points_1');
      $matriculant->points_1 = ($points_1 ?: 0);
      $points_2 = Arr::get($_POST, 'points_2');
      $matriculant->points_2 = ($points_2 ?: 0);
      $points_3 = Arr::get($_POST, 'points_3');
      $matriculant->points_3 = ($points_3 ?: 0);
			$points_4 = Arr::get($_POST, 'points_4');
			$matriculant->points_4 = ($points_4 ?: 0);
    }

    $achievment = Arr::get($_POST, 'achievement');
    $matriculant->achievement = ($achievment ? $achievment : 0);
    $section = Arr::get($_POST, 'section');
    $matriculant->section_id = ($section == 0 ? NULL : $section);

    $education = ORM::factory('section', $section)->direction->education;
    //Если направление выбранного профиля имеет заочную форму обучения ($direction = 1), то независимо от выбранного
    // вида оплаты будет записано "полное возмещение затрат" (=1)
    $matriculant->cost_kind = ($education == 1 ? 1 : Arr::get($_POST, 'cost_kind'));

    $matriculant->doc_kind = Arr::get($_POST, 'doc_kind');
    $matriculant->status = Arr::get($_POST, 'status');
    $matriculant->remark = Arr::get($_POST, 'remark');

    $matriculant->save();

    //if ($id == 0)
      //$this->update_applicationsnumber($matriculant->section_id, $matriculant->year);

    $this->request->redirect('admin/matriculants/'.$this->search_page($matriculant->id));
  }
  
  //==========================================================================//
	public function action_loadsubject()
	{
		$id = $this->request->post('id');
    
    if ($id == 0)
    {
      exit('');
    }
    
		$idx = $this->request->post('idx');
    
    $section = ORM::factory('section', $id);
		
    $direction = ORM::factory('direction', $section->direction_id);
    $subjects = $direction->subjects->order_by('subject')->find_all()->as_array();

    exit($subjects[$idx - 1]->subject);
	}
  
  //==========================================================================//
	public function action_loadsubjectid()
	{
		$id = $this->request->post('id');

    if ($id == 0)
    {
      exit('');
    }

    $idx = $this->request->post('idx');
    
    $section = ORM::factory('section', $id);
		
    $direction = ORM::factory('direction', $section->direction_id);
    $subjects = $direction->subjects->order_by('subject')->find_all()->as_array();

    exit($subjects[$idx - 1]->id);
	}
  
  //==========================================================================//
  private function search_page($id)
  {
    $matriculants = ORM::factory('matriculant')->with('section')->order_by('year', 'DESC') ->order_by('family')->order_by('name')->order_by('patronymic')->find_all();
    
    $n = 1;
    foreach ($matriculants as $matriculant)
    {
      if ($matriculant->id == $id)
      {
        break;
      }
      $n++;
    }

    $count_matriculants_for_page = ORM::factory('setting', array('key' => 'admin_count_matriculants_for_page'))->value;
    
    return ceil($n / $count_matriculants_for_page);
  }

  //==========================================================================//
/*  private function update_applicationsnumber($section_id, $year, $delete = false)
  {
    $direction_id = ORM::factory('section', $section_id)->direction->id;
    $applicationsnumber = ORM::factory('applicationsnumber', ['direction_id' => $direction_id, 'year' => $year]);

    if ($applicationsnumber->id)
    {
      $applicationsnumber->current_count = ($delete ? $applicationsnumber->current_count - 1 :
        $applicationsnumber->current_count + 1);
      $applicationsnumber->save();
    }
  }*/
}
