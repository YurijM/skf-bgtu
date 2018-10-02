<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Kpkutilities extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'КПК для руководителей ЖКХ';
    $this->template->keywords = 'КПК для руководителей ЖКХ, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'Записаться на обучение можно по телефонам 8 (87922) 5-63-87, 8-928-359-39-55 или по электронной почте bgtu_kpk@mail.ru';

    $kpk = View::factory('v_kpk_utilities');

    $kpk->mode = $this->mode;
    $kpk->page_title = $this->template->page_title;

    $kpk->dir_docs_refresher_course = ORM::factory('setting', array('key' => 'dir_docs_refresher_course'))->value;
    
    $kpk->entry_training = $this->widget_load($this->widgets_folder.'entrytraining');
    $kpk->application_training = $this->widget_load($this->widgets_folder.'applicationtraining');
    $kpk->certificate_type = $this->widget_load($this->widgets_folder.'certificatetype');

    $this->template->main = $kpk;
  }
}
