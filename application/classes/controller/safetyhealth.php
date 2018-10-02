<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Safetyhealth extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Курсы по ОТ и ТБ';
    $this->template->keywords = 'охрана труда и техника безопасности, Курсы по ОТ и ТБ, Охрана труда в учреждениях здравоохранения, Охрана труда руководителей и специалистов';
    $this->template->description = 'Записаться на обучение можно по телефонам 8 (87922) 5-63-87, 8-928-359-39-55 или по электронной почте bgtu_kpk@mail.ru';

    $courses = View::factory('v_safety_health');
    
    $courses->mode = $this->mode;
    $courses->page_title = $this->template->page_title;

    $courses->courses = ORM::factory('safetyhealth')->order_by('course')->find_all();

    $courses->entry_training = $this->widget_load($this->widgets_folder.'entrytraining');
    $courses->application_training = $this->widget_load($this->widgets_folder.'applicationtraining');
    $courses->certificate_type = $this->widget_load($this->widgets_folder.'certificatetype');

    $this->template->main = $courses;
  }
}
