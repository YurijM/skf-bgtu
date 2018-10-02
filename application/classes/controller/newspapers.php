<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Newspapers extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Студенческая газета';

    $newspapers = View::factory('v_newspapers');
    
    $newspapers->mode = $this->mode;
    $newspapers->page_title = $this->template->page_title;
    
    $newspapers->months = array(1 => 'январь', 2 => 'февраль', 3 => 'март', 4 => 'апрель', 5 => 'май', 6 => 'июнь',
                                7 => 'июль', 8 => 'август', 9 => 'сентябрь', 10 => 'октябрь', 11 => 'ноябрь', 12 => 'декабрь');

    $newspapers->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $newspapers->dir_docs_newspapers = ORM::factory('setting', array('key' => 'dir_docs_newspapers'))->value;
    $newspapers->dir_img_newspapers = ORM::factory('setting', array('key' => 'dir_img_newspapers'))->value;

    $newspapers->newspapers = ORM::factory('newspaper')->order_by('year', 'DESC')->order_by('month', 'DESC')->order_by('issue', 'DESC')->find_all();

    $this->template->main = $newspapers;
  }
}
