<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Letters extends Controller_Admin {
  private $page_title = 'Письма, отправленные с сайта';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('letter')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $letters = View::factory('admin/v_letters_list');
    $letters->letters = ORM::factory('letter')->order_by('date', 'DESC')->find_all();
    $letters->page_title = $this->page_title;
    $letters->table = $this->table;
    $letters->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/Письмо');
    
    $this->template->main = $letters;
  }

  
  //==========================================================================//
  public function action_delete()
  {
    $id = $_POST['id'];
    
    $letter = ORM::factory('letter', $id);
    $letter->delete();
    
    $this->request->redirect('/admin/letters');
  }
}
