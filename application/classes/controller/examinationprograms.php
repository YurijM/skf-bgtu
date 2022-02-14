<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Examinationprograms  extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Программы вступительных испытаний';

    $programs = View::factory('v_examination_programs');
    
    $programs->mode = $this->mode;
    $programs->page_title = $this->template->page_title;

		$programs->dir_docs_programs = ORM::factory('setting', array('key' => 'dir_docs_programs'))->value;

		$this->template->main = $programs;
  }
}
