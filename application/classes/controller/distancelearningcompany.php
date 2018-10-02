<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Distancelearningcompany extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Дистанционное обучение';
    $this->template->keywords = 'дистанционное обучение';
    $this->template->description = 'Записаться на обучение можно по телефонам 8 (87922) 5-63-87, 8-928-359-39-55 или по электронной почте bgtu_kpk@mail.ru';

    $distance = View::factory('v_distance_learning_company');
    
    $distance->mode = $this->mode;
    $distance->page_title = $this->template->page_title;
    
    $distance->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;


    $this->template->main = $distance;
  }
}
