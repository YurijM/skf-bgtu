<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questionnaire extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Уважаемые студенты!';

    $questionnaire = View::factory('v_questionnaire');
    
    $questionnaire->mode = $this->mode;
		$questionnaire->page_title = $this->template->page_title;
    
    $questionnaire->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;

    $this->template->main = $questionnaire;
  }
}
