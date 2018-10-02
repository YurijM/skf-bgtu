<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Studentconferenceorganizers extends Controller_Admin {
  private $page_title = 'Организаторы студенческих конференций';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('studentconferenceorganizer')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $organizers = View::factory('admin/v_student_conference_organizers_list');
    $organizers->organizers = ORM::factory('studentconferenceorganizer')->order_by('organizer')->find_all();
    $organizers->page_title = $this->page_title;
    $organizers->table = $this->table;
    
    $this->template->main = $organizers;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $organizer = View::factory('admin/v_student_conference_organizer');
    $organizer->page_title = $this->page_title;
    $organizer->table = $this->table;

    if ($id)
    {
      $organizer->organizer = ORM::factory('studentconferenceorganizer', $id);
      $organizer->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$organizer->organizer);
    }
    else
    {
      $organizer->organizer = ORM::factory('studentconferenceorganizer');
    }

    $this->template->main = $organizer;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $organizer = ORM::factory('studentconferenceorganizer', $id);
      if (isset($_POST['delete']))
      {
        $organizer->delete();
        $this->request->redirect('admin/studentconferenceorganizers');
      }
    }
    else
    {
      $organizer = ORM::factory('studentconferenceorganizer');
    }
    
    $organizer->organizer = trim(Arr::get($_POST, 'organizer'));
    $organizer->contact = trim(Arr::get($_POST, 'contact'));

    $organizer->save();
    
    $this->request->redirect('admin/studentconferenceorganizers');
  }
}
