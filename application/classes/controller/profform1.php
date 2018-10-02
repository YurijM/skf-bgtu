<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profform1 extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Форма №1 - ПК';
    $this->template->keywords = 'Форма №1 — ПК, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'Основные сведения об обучении в СКФ БГТУ им.В.Г.Шухова, осуществляющим образовательную деятельность по дополнительным профессиональным программам в 2016 году';

    $profform1 = View::factory('v_profform1');

    $profform1->mode = $this->mode;
    $profform1->page_title = $this->template->page_title;

    $profform1->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;

    $this->template->main = $profform1;
  }
}
