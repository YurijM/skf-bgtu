<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Retrainingschool extends Controller_Admin {
  private $page_title = 'Подготовительные курсы по химии (ОГЭ/ЕГЭ)';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('retraining')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $retraining = View::factory('admin/v_retraining_school_list');
    $retraining->retraining = ORM::factory('retrainingschool')->order_by('course')->find_all();
    $retraining->page_title = $this->page_title;
    $retraining->table = $this->table;

    $this->template->main = $retraining;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $retraining = View::factory('admin/v_retraining_school');
    
    $retraining->page_title = $this->page_title;
    $retraining->table = $this->table;
    $retraining->dir_js = $this->dir_js;

    $retraining->dir_docs_retraining = ORM::factory('setting', array('key' => 'dir_docs_retraining_school'))->value;
    
    if ($id)
    {
      $retraining->retraining = ORM::factory('retrainingschool', $id);
      $retraining->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace([',', '.'], ' ', $retraining->retraining->course));
    }
    else
    {
      $retraining->retraining = ORM::factory('retrainingschool');
    }

    $this->template->main = $retraining;
  }
  
  //==========================================================================//
  public function action_uploaddoc()
  {
    // Путь к каталогу (без первого символа '/').
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_retraining_school'))->value, 1);

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
      $retraining = ORM::factory('retrainingschool', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_doc($retraining->file_program);
        $retraining->delete();
        
        $this->request->redirect('admin/retrainingschool');
      }
    }
    else
    {
      $retraining = ORM::factory('retrainingschool');
    }
    
    $retraining->course = trim(Arr::get($_POST, 'course'));
    $retraining->time = trim(Arr::get($_POST, 'time'));
    $retraining->cost = Arr::get($_POST, 'cost');
    $retraining->remark = trim(Arr::get($_POST, 'remark'));
    $retraining->file_program = trim(Arr::get($_POST, 'file_program'));

    $retraining->save();
      
    $this->request->redirect('admin/retrainingschool');
  }
  
  //==========================================================================//
  private function delete_doc($doc)
  {
    if ($doc == '')
      return;
    
    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_retraining_school'))->value, 1);
    unlink($dir.$doc); 
  }
}
