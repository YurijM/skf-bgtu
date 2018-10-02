<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Directions extends Controller_Admin {
  private $page_title = 'Направления';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('direction')->table_name();
    $this->education_types = array(0 => 'очное отделение', 1 => 'заочное отделение');
  }
  
  //==========================================================================//
  public function action_index()
  {
    $directions = View::factory('admin/v_directions_list');
    $directions->directions = ORM::factory('direction')->order_by('education')->order_by('direction')->find_all();
    $directions->page_title = $this->page_title;
    $directions->table = $this->table;
    $directions->education_types = $this->education_types;
    
    $this->template->main = $directions;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $direction = View::factory('admin/v_direction');
    $direction->page_title = $this->page_title;
    $direction->table = $this->table;
    $direction->education_types = $this->education_types;

    $direction->subjects = ORM::factory('subject')->order_by('subject')->find_all();

    if ($id)
    {
      $direction->direction = ORM::factory('direction', $id);
      $direction->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$direction->education_types[$direction->direction->education].' - '.$direction->direction->direction);
    }
    else
    {
      $direction->direction = ORM::factory('direction');
    }
    
    $direction->direction_subjects = $direction->direction->subjects->order_by('subject')->find_all();

    $this->template->main = $direction;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $direction = ORM::factory('direction', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_subjects($direction);
        $direction->delete();
        $this->request->redirect('admin/directions');
      }
    }
    else
    {
      $direction = ORM::factory('direction');
    }
    
    $direction->education = Arr::get($_POST, 'education');
    $direction->code = Arr::get($_POST, 'code');
    $direction->direction = trim(str_replace('.', '', Arr::get($_POST, 'direction')));

    $direction->save();
    
    // Для записи в таблицу directions_subjects нужно, чтобы запись в таблице directions уже существовала.
    // Поэтому сначала сохраняем изменения в таблице directions, а уже потом добавляем запись в таблицу directions_subjects.
    $subject = Arr::get($_POST, 'subject');
    if ($subject > 0)
    {
      $direction->add('subjects', $subject);
    }
    
    $this->request->redirect('admin/directions');
  }

  //==========================================================================//
  public function action_deletesubject()
  {
    $direction_id = $this->request->param('direction_id');
    $subject_id = $this->request->param('subject_id');
    
    $direction = ORM::factory('direction', $direction_id);
    $direction->remove('subjects', $subject_id);
     
    $this->request->redirect('admin/directions/edit/'.$direction_id);
  }
  
  //==========================================================================//
  private function delete_subjects($direction)
  {
    $subjects = $direction->subjects->find_all();
    foreach ($subjects as $subject)
    {
      $direction->remove('subjects', $subject->id);
    }
  }
}
