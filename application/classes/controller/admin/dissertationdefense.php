<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Dissertationdefense extends Controller_Admin {
  private $page_title = 'Защита диссертаций';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('dissertationdefense')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $dissertationdefense = View::factory('admin/v_dissertation_defense_list');
    $dissertationdefense->dissertationdefense = ORM::factory('dissertationdefense')->with('personnel')->order_by('year')->order_by('quarter')->order_by('personnel.family')->order_by('personnel.name')->order_by('personnel.patronymic')->find_all();
    $dissertationdefense->page_title = $this->page_title;
    $dissertationdefense->table = $this->table;
    
    $this->template->main = $dissertationdefense;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $dissertationdefense = View::factory('admin/v_dissertation_defense');
    $dissertationdefense->page_title = $this->page_title;
    $dissertationdefense->table = $this->table;
		$dissertationdefense->dir_css = $this->dir_css;
		$dissertationdefense->dir_js = $this->dir_js;
    $dissertationdefense->personnel = ORM::factory('personnel')->where('fired', '=', 0)->order_by('family')->order_by('name')->order_by('patronymic')->find_all()->as_array();
    $dissertationdefense->degrees = ORM::factory('degree')->order_by('degree')->find_all()->as_array();
    $dissertationdefense->quarters = array(1 => 1, 2 => 2, 3 => 3, 4 => 4);
    $dissertationdefense->years = array(2015 => 2015, 2016 => 2016, 2017 => 2017, 2018 => 2018, 2019 => 2019, 2020 => 2020, 2021 => 2021, 2022 => 2022, 2023 => 2023, 2024 => 2024, 2025 => 2025);
    
    if ($id)
    {
      $dissertationdefense->dissertationdefense = ORM::factory('dissertationdefense', $id);
      $dissertationdefense->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/Планируемая диссертация');
    }
    else
    {
      $dissertationdefense->dissertationdefense = ORM::factory('dissertationdefense');
    }

    $this->template->main = $dissertationdefense;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $dissertationdefense = ORM::factory('dissertationdefense', $id);
      if (isset($_POST['delete']))
      {
        $dissertationdefense->delete();
        $this->request->redirect('admin/dissertationdefense');
      }
    }
    else
    {
      $dissertationdefense = ORM::factory('dissertationdefense');
    }
    
    $personnel = Arr::get($_POST, 'personnel');
    $dissertationdefense->personnel_id = ($personnel == 0 ? NULL : $personnel);
    $degree = Arr::get($_POST, 'degree');
    $dissertationdefense->degree_id = ($degree == 0 ? NULL : $degree);
    $dissertationdefense->quarter = Arr::get($_POST, 'quarter');
    $dissertationdefense->year = Arr::get($_POST, 'year');
		$dissertationdefense->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));

    $dissertationdefense->save();
    
    $this->request->redirect('admin/dissertationdefense');
  }
}
