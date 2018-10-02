<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Scientificactivity extends Controller_Admin {
  private $page_title = 'Итоги результативности научной деятельности ППС';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('scientificactivity')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $scientificactivity = View::factory('admin/v_scientific_activity_list');
    $scientificactivity->scientificactivity = ORM::factory('scientificactivity')->with('personnel')->order_by('year', 'DESC')->order_by('personnel.family')->order_by('personnel.name')->order_by('personnel.patronymic')->find_all();
    $scientificactivity->page_title = $this->page_title;
    $scientificactivity->table = $this->table;
    
    $this->template->main = $scientificactivity;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $scientificactivity = View::factory('admin/v_scientific_activity');
    $scientificactivity->page_title = $this->page_title;
    $scientificactivity->table = $this->table;
    $scientificactivity->personnel = ORM::factory('personnel')->where('fired', '=', 0)->order_by('family')->order_by('name')->order_by('patronymic')->find_all()->as_array();
    $scientificactivity->years = array(2015 => 2015, 2016 => 2016, 2017 => 2017, 2018 => 2018, 2019 => 2019, 2020 => 2020, 2021 => 2021, 2022 => 2022, 2023 => 2023, 2024 => 2024, 2025 => 2025);
    
    if ($id)
    {
      $scientificactivity->scientificactivity = ORM::factory('scientificactivity', $id);
      $scientificactivity->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete');
    }
    else
    {
      $scientificactivity->scientificactivity = ORM::factory('scientificactivity');
      $scientificactivity->scientificactivity->year = date('Y') - 1;
    }

    $this->template->main = $scientificactivity;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $scientificactivity = ORM::factory('scientificactivity', $id);
      if (isset($_POST['delete']))
      {
        $scientificactivity->delete();
        $this->request->redirect('admin/scientificactivity');
      }
    }
    else
    {
      $scientificactivity = ORM::factory('scientificactivity');
    }
    
    $scientificactivity->year = Arr::get($_POST, 'year');
    $scientificactivity->personnel_id = Arr::get($_POST, 'personnel');
    $scientificactivity->point = Arr::get($_POST, 'point');

    $scientificactivity->save();
    
    $this->request->redirect('admin/scientificactivity');
  }
}
