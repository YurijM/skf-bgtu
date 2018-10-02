<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Kpkspecialists extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'КПК для специалистов';
    $this->template->keywords = 'КПК для специалистов, 1С: Бухгалтерия 8.0, Бухгалтер со знанием ПК, Работа в системе программного проектирования AUTOCAD, ARHICAD';
    $this->template->description = 'Записаться на обучение можно по телефонам 8 (87922) 5-63-87, 8-928-359-39-55 или по электронной почте bgtu_kpk@mail.ru';

    $courses = View::factory('v_kpk_specialists');
    
    $courses->mode = $this->mode;
    $courses->page_title = $this->template->page_title;

    $courses->courses = ORM::factory('kpkspecialist')->order_by('course')->find_all();

    $courses->entry_training = $this->widget_load($this->widgets_folder.'entrytraining');
    $courses->application_training = $this->widget_load($this->widgets_folder.'applicationtraining');
    $courses->certificate_type = $this->widget_load($this->widgets_folder.'certificatetype');

    $this->template->main = $courses;
  }
}
