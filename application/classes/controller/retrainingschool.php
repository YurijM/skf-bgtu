<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Retrainingschool extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Подготовительные курсы по химии (ОГЭ/ЕГЭ)';
    $this->template->keywords = 'школы, курсы, химия Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'Подготовительные курсы по химии (ОГЭ/ЕГЭ),все подробности Вы узнаете прочитав данную статью';

    $retraining = View::factory('v_retraining_school');
    
    $retraining->mode = $this->mode;
    $retraining->page_title = $this->template->page_title;

    $retraining->dir_docs_retraining = ORM::factory('setting', array('key' => 'dir_docs_retraining_school'))->value;

    $retraining->retraining = ORM::factory('retrainingschool')->order_by('course')->find_all();

    $this->template->main = $retraining;
  }
}
