<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dissertationdefense extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Защита диссертаций';
    
    $dissertationdefense = View::factory('v_dissertation_defense');
    $dissertationdefense->mode = $this->mode;
    $dissertationdefense->page_title = $this->template->page_title;
    $dissertationdefense->dissertationdefense = ORM::factory('dissertationdefense')->order_by('year')->order_by('quarter')->find_all();

    $this->template->main = $dissertationdefense;
  }
}
