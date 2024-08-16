<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Structure extends Controller_Admin {
  private $page_title = 'Структура (органы управления)';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('structure')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $structure = View::factory('admin/v_structure_list');
    $structure->structure = ORM::factory('structure')->order_by('order_no')->find_all();
    $structure->page_title = $this->page_title;
    $structure->table = $this->table;
    
    $this->template->main = $structure;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $structure = View::factory('admin/v_structure');
    $structure->page_title = $this->page_title;
    $structure->table = $this->table;
    $structure->dir_js = $this->dir_js;

    if ($id)
    {
      $structure->structure = ORM::factory('structure', $id);
      $structure->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'
        .str_replace([',', '.'], ' ', $structure->structure->structure));
    }
    else
    {
      $structure->structure = ORM::factory('structure');
    }

    $this->template->main = $structure;
  }
  
  //==========================================================================//
  public function action_uploaddoc()
  {
    // Путь к каталогу (без первого символа '/').
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_structure'))->value, 1);

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
      $structure = ORM::factory('structure', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_doc($structure->file_doc);
				$structure_personnel = ORM::factory('structurepersonnel')
					->where('structure_id', '=', $id)
					->find();
        $structure_personnel->delete();
        $structure->delete();

        $this->request->redirect('admin/structure');
      }
    }
    else
    {
      $structure = ORM::factory('structure');
    }
    
    $structure->structure = trim(Arr::get($_POST, 'structure'));
    $structure->order_no = Arr::get($_POST, 'order_no');
    $structure->doc = trim(Arr::get($_POST, 'doc'));
    $structure->file_doc = trim(Arr::get($_POST, 'file_doc'));

    $structure->save();
    
    $this->request->redirect('admin/structure');
  }
  
  //==========================================================================//
  private function delete_doc($doc)
  {
    if ($doc == '')
      return;
    
    // У пути убираем первый символ слэш '/'
    $dir = substr(ORM::factory('setting', array('key' => 'dir_docs_structure'))->value, 1);
    unlink($dir.$doc); 
  }
}
