<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Schedule extends Controller_Admin {
  private $page_title = 'Расписание';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('schedule')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $schedule = View::factory('admin/v_schedule_list');
    $schedule->schedule = ORM::factory('schedule')->order_by('education')->order_by('schedule')->find_all();
    $schedule->page_title = $this->page_title;
    $schedule->table = $this->table;
    
    $this->template->main = $schedule;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $schedule = View::factory('admin/v_schedule');

    $schedule->dir_js = $this->dir_js;
    $schedule->page_title = $this->page_title;
    $schedule->table = $this->table;
    
    $schedule->education = array('заочное' => 'заочное', 'очное' => 'очное');
    $schedule->schedule_list = array('1 курс' => '1 курс', '2 курс' => '2 курс', '3 курс' => '3 курс', '4 курс' => '4 курс', '5 курс' => '5 курс', '6 курс' => '6 курс', 'экзамены' => 'экзамены');

    if ($id)
    {
      $schedule->schedule = ORM::factory('schedule', $id);
      $schedule->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$schedule->schedule->education.' - '.$schedule->schedule->schedule);
    }
    else
    {
      $schedule->schedule = ORM::factory('schedule');
    }

    $this->template->main = $schedule;
  }
  
  //==========================================================================//
  public function action_upload()
  {
    // Путь к каталогу (без первого символа '/').
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_schedule'))->value, 1);

    $file = strtolower(basename($_FILES['uploadfile']['name']));    
    
    $result = Helper_Addfunction::load_doc_file_to_server($dir.$file);
    
    $response = new Response();
    $response->body($result);
    $this->request->response($response);
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $schedule = ORM::factory('schedule', $id);
      if (isset($_POST['delete']))
      {
        $schedule->delete();
        $this->request->redirect('admin/schedule');
      }
    }
    else
    {
      $schedule = ORM::factory('schedule');
    }
    
    $schedule->education = Arr::get($_POST, 'education');
    $schedule->schedule = Arr::get($_POST, 'schedule');
    $schedule->doc_file = Arr::get($_POST, 'doc_file');

    $schedule->save();
    
    $this->request->redirect('admin/schedule');
  }
}
