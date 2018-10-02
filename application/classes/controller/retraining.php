<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Retraining extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Профессиональная переподготовка';
    $this->template->keywords = 'профессиональная переподготовка, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'Дополнительное профессиональное образование,все подробности Вы узнаете прочитав данную статью';

    $retraining = View::factory('v_retraining');
    
    $retraining->mode = $this->mode;
    $retraining->page_title = $this->template->page_title;

    $retraining->dir_docs_retraining = ORM::factory('setting', array('key' => 'dir_docs_retraining'))->value;

    $retraining->retraining = ORM::factory('retraining')->order_by('course')->find_all();

    $retraining->entry_training = $this->widget_load($this->widgets_folder.'entrytraining');
    $retraining->application_training = $this->widget_load($this->widgets_folder.'applicationtraining');

    $this->template->main = $retraining;
  }
}
