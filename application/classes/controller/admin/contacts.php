<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Contacts extends Controller_Admin {
  private $page_title = 'Контакты';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('contact')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $contacts = View::factory('admin/v_contacts_list');
    $contacts->contacts = ORM::factory('contact')->order_by('order_no')->find_all();
    $contacts->page_title = $this->page_title;
    $contacts->table = $this->table;
    
    $this->template->main = $contacts;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $contact = View::factory('admin/v_contact');
    $contact->page_title = $this->page_title;
    $contact->table = $this->table;

    if ($id)
    {
      $contact->contact = ORM::factory('contact', $id);
      $contact->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$contact->contact->contact);
    }
    else
    {
      $contact->contact = ORM::factory('contact');
    }

    $this->template->main = $contact;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $contact = ORM::factory('contact', $id);
      if (isset($_POST['delete']))
      {
        $contact->delete();
        $this->request->redirect('admin/contacts');
      }
    }
    else
    {
      $contact = ORM::factory('contact');
    }
    
    $contact->contact = trim(str_replace('.', '', Arr::get($_POST, 'contact')));
    $contact->phone = trim(str_replace('.', '', Arr::get($_POST, 'phone')));
    $contact->email = trim(Arr::get($_POST, 'email'));
    $contact->order_no = Arr::get($_POST, 'order_no');

    $contact->save();
    
    $this->request->redirect('admin/contacts');
  }
}
