<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Diploms extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Образцы дипломов';

    $diploms = View::factory('v_diploms');
    
    $diploms->mode = $this->mode;
    $diploms->page_title = $this->template->page_title;
    $diploms->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;
    $diploms->dir_img_docs = ORM::factory('setting', array('key' => 'dir_img_docs'))->value;
    
    $diploms->programmer = '230100 Информатика и вычислительная техника';
    $diploms->economic = '080100 Экономика';
    $diploms->building = '270800 Строительство';

    $this->template->main = $diploms;
  }
}
