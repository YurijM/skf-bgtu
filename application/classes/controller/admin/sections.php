<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Sections extends Controller_Admin {
  private $page_title = 'Профили';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('section')->table_name();
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
    $sections = View::factory('admin/v_sections_list');
    $sections->sections = ORM::factory('section')->with('direction')->order_by('direction.education')->order_by('direction.direction')->order_by('section')->find_all();
    $sections->page_title = $this->page_title;
    $sections->table = $this->table;
    $sections->education_forms = $this->education_forms;
    
    $this->template->main = $sections;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $section = View::factory('admin/v_section');
    $section->page_title = $this->page_title;
    $section->table = $this->table;
    $section->education_forms = $this->education_forms;
    
    $section->directions = ORM::factory('direction')->order_by('education')->order_by('direction')->find_all();

    if ($id)
    {
      $section->section = ORM::factory('section')->with('direction')->where('section.id', '=', $id)->find();
      $section->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$section->section->section);
    }
    else
    {
      $section->section = ORM::factory('section');
    }

    $this->template->main = $section;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $section = ORM::factory('section', $id);
      if (isset($_POST['delete']))
      {
        $section->delete();
        $this->request->redirect('admin/sections');
      }
    }
    else
    {
      $section = ORM::factory('section');
    }
    
    $section->section = trim(str_replace('.', '', Arr::get($_POST, 'section')));
    $section->short = trim(Arr::get($_POST, 'short'));
    $direction = Arr::get($_POST, 'direction');
    $section->direction_id = ($direction == 0 ? NULL : $direction);

    $section->save();
    
    $this->request->redirect('admin/sections');
  }
}
