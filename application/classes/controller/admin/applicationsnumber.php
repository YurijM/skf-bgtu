<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Applicationsnumber extends Controller_Admin {
  private $page_title = 'Количество мест для поступления';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('applicationsnumber')->table_name();
    $this->education_forms = array(0 => 'очное обучение', 1 => 'заочное обучение');
  }
  
  //==========================================================================//
  public function action_index()
  {
    $applications = View::factory('admin/v_applications_number_list');
    $applications->page_title = $this->page_title;
    $applications->table = $this->table;

    $applications->education_forms = $this->education_forms;

    $applications->applications = ORM::factory('applicationsnumber')->with('direction')->order_by('year', 'DESC')->order_by('direction.education')->order_by('direction.direction')->find_all();
    
    $this->template->main = $applications;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $applications = View::factory('admin/v_applications_number');
    $applications->page_title = $this->page_title;
    $applications->table = $this->table;
    $applications->education_forms = $this->education_forms;
    
    $applications->years = array(2015 => 2015, 2016 => 2016, 2017 => 2017, 2018 => 2018, 2019 => 2019, 2020 => 2020);
    $applications->year = date('Y');
    
    $applications->directions = ORM::factory('direction')->order_by('education')->order_by('direction')->find_all();

    if ($id)
    {
      $applications->applications = ORM::factory('applicationsnumber')->with('direction')->where('applicationsnumber.id', '=', $id)->find();
      $applications->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$applications->education_forms[$applications->applications->direction->education].' - '.$applications->applications->direction->direction);
    }
    else
    {
      $applications->applications = ORM::factory('applicationsnumber');
    }

    $this->template->main = $applications;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $applications = ORM::factory('applicationsnumber', $id);
      if (isset($_POST['delete']))
      {
        $applications->delete();
        $this->request->redirect('admin/applicationsnumber');
      }
    }
    else
    {
      $applications = ORM::factory('applicationsnumber');
    }
    
    $applications->year = Arr::get($_POST, 'year');
    $direction = Arr::get($_POST, 'direction');
    $applications->direction_id = ($direction == 0 ? NULL : $direction);
    $budget = Arr::get($_POST, 'budget');
    $applications->budget = ($budget ? $budget : 0);
    $by_contract = Arr::get($_POST, 'by_contract');
    $applications->by_contract = ($by_contract ? $by_contract : 0);
/*    $current_count = Arr::get($_POST, 'current_count');
    $applications->current_count = ($current_count ? $current_count : 0);;*/

    $applications->save();
    
    $this->request->redirect('admin/applicationsnumber');
  }
}
