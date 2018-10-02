<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Kpksro extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $sro = $this->request->param('sro');
    
    if ($sro)
    {
      $kpk = View::factory('v_sro_program');
      
      $kpk->sro = ORM::factory('kpksro', $sro);
      $kpk->programs = ORM::factory('sroprogram')->where('kpk_sro_id', '=', $sro)->order_by('order_no')->find_all();

      $this->template->page_title = $kpk->sro->course;
    }
    else
    {
      $this->template->page_title = 'КПК для СРО, службы надзора';
      $this->template->keywords = 'Курсы повышения квалификации, СРО Изыскателей, СРО Строителей, СРО Энергоаудиторов, СРО ЖКХ, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
      $this->template->description = 'Курсы повышения квалификации,все подробности Вы узнаете прочитав данную статью';

      $kpk = View::factory('v_kpk_sro');
      $kpk->sro = ORM::factory('kpksro')->where('parent_id', '=', 0)->order_by('course_no')->find_all();
    }

    $kpk->entry_training = $this->widget_load($this->widgets_folder.'entrytraining');
    $kpk->application_training = $this->widget_load($this->widgets_folder.'applicationtraining');
    $kpk->certificate_type = $this->widget_load($this->widgets_folder.'certificatetype');

    $kpk->mode = $this->mode;
    $kpk->page_title = $this->template->page_title;

    $this->template->main = $kpk;
  }
}
