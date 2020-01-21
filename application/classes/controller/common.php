<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Основные сведения';

    $svedencommon = View::factory('v_common');
    
    $svedencommon->mode = $this->mode;
    $svedencommon->page_title = $this->template->page_title;
   
    $this->template->main = $svedencommon;
  }
}
