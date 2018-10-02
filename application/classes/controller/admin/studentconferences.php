<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Studentconferences extends Controller_Admin {
  private $page_title = 'Студенческие конференции';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('studentconference')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $conferences = View::factory('admin/v_student_conferences_list');
    $conferences->conferences = ORM::factory('studentconference')->order_by('date', 'DESC')->order_by('conference')->find_all();
    $conferences->page_title = $this->page_title;
    $conferences->table = $this->table;
    
    $this->template->main = $conferences;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $conference = View::factory('admin/v_student_conference');
    $conference->page_title = $this->page_title;
    $conference->table = $this->table;
    $conference->dir_css = $this->dir_css;
    $conference->dir_js = $this->dir_js;
    $conference->organizers = ORM::factory('studentconferenceorganizer')->order_by('organizer')->find_all()->as_array();

    if ($id)
    {
      $conference->conference = ORM::factory('studentconference', $id);
      $conference->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$conference->conference);
    }
    else
    {
      $conference->conference = ORM::factory('studentconference');
    }

    $this->template->main = $conference;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $conference = ORM::factory('studentconference', $id);
      if (isset($_POST['delete']))
      {
        $conference->delete();
        $this->request->redirect('admin/studentconferences');
      }
    }
    else
    {
      $conference = ORM::factory('studentconference');
    }
    
    $conference->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));
    $conference->conference = trim(Arr::get($_POST, 'conference'));
    $conference->organizer_id = trim(Arr::get($_POST, 'organizer'));

    $conference->save();
    
    $this->request->redirect('admin/studentconferences');
  }
}
