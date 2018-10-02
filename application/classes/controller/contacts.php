<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contacts extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Контакты';

    $contacts = View::factory('v_contacts');
    
    $contacts->mode = $this->mode;
    $contacts->page_title = $this->template->page_title;

    $contacts->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;
    $contacts->address = ORM::factory('setting', array('key' => 'address'))->value;

    $contacts->contacts = ORM::factory('contact')->order_by('order_no')->find_all();

    $this->template->main = $contacts;
  }
}
