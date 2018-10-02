<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admissiondocs extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Приём документов';

    $documents = View::factory('v_admission_docs');
    
    $documents->mode = $this->mode;
    $documents->page_title = $this->template->page_title;
    
    $documents->dir_docs_admission = ORM::factory('setting', array('key' => 'dir_docs_admission'))->value;

    $this->template->main = $documents;
  }
}
