<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Training extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Подготовительные курсы';
    $this->template->keywords = 'подготовительные курсы, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'подготовительные курсы,все подробности Вы узнаете прочитав данную статью';

    $training = View::factory('v_training');
    
    $training->mode = $this->mode;
    $training->page_title = $this->template->page_title;

    $training->training = ORM::factory('training')->order_by('course')->find_all();

    $this->template->main = $training;
  }
}
