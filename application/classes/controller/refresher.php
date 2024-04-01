<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Refresher extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Курсы повышения квалификации';
    $this->template->keywords = 'повышение квалификации, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'Курсы повышения квалификации,все подробности Вы узнаете прочитав данную статью';

    $refresher = View::factory('v_refresher');
    
    $refresher->mode = $this->mode;
    $refresher->page_title = $this->template->page_title;

    $refresher->refresher = ORM::factory('refresher')->order_by('listeners_categories')->order_by('course')->find_all();

    $this->template->main = $refresher;
  }
}
