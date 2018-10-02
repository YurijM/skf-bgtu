<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Sroprograms extends Controller_Admin {
  private $page_title = 'Программы КПК для СРО, службы надзора';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('sroprogram')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $programs = View::factory('admin/v_sro_programs_list');
    $programs->sro = ORM::factory('kpksro')->order_by('course')->find_all();
    $programs->page_title = $this->page_title;
    $programs->table = $this->table;
    
    $this->template->main = $programs;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $program = View::factory('admin/v_sro_program');
    $program->page_title = $this->page_title;
    $program->table = $this->table;
    $program->sro = ORM::factory('kpksro')->order_by('course')->find_all();
    
    if ($id)
    {
      $program->program = ORM::factory('sroprogram', $id);
      $program->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], '', $program->program->program));
    }
    else
    {
      $program->program = ORM::factory('sroprogram');
    }

    $this->template->main = $program;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $program = ORM::factory('sroprogram', $id);
      if (isset($_POST['delete']))
      {
        $program->delete();
        $this->request->redirect('admin/sroprograms');
      }
    }
    else
    {
      $program = ORM::factory('sroprogram');
    }
    
    $sro = Arr::get($_POST, 'sro');
    $program->kpk_sro_id = ($sro == 0 ? NULL : $sro);
    $program->program = trim(Arr::get($_POST, 'program'));
    $program->pressmark = Arr::get($_POST, 'pressmark');
    $program->order_no = Arr::get($_POST, 'order_no');
    $program->hours = Arr::get($_POST, 'hours');
    $program->cost = Arr::get($_POST, 'cost');
    $program->work_type = Arr::get($_POST, 'work_type');

    $program->save();
    
    $this->request->redirect('admin/sroprograms');
  }
}
