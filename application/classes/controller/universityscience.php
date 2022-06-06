<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Universityscience extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Журнал "Университетская Наука"';

    $magazine = View::factory('v_university_science');
    
    $magazine->mode = $this->mode;
    $magazine->page_title = $this->template->page_title;
    $magazine->dir_docs_university_science = ORM::factory('setting', ['key' => 'dir_docs_university_science'])->value;
    $magazine->dir_img_university_science = ORM::factory('setting', ['key' => 'dir_img_university_science'])->value;
    $magazine->dir_img = ORM::factory('setting', ['key' => 'dir_img'])->value;

    $magazine->magazine = ORM::factory('universityscience')->order_by('year', 'DESC')->order_by('number', 'DESC')->find_all();

    $this->template->main = $magazine;
  }
}
