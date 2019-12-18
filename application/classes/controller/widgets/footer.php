<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Footer extends Controller_Widget {
  public $template = 'widgets/w_footer';
  public function action_index()
  {
    $this->template->site_name  = ORM::factory('setting', array('key' => 'site_name'))->value;
    $this->template->address    = ORM::factory('setting', array('key' => 'address'))->value;
    $this->template->phone      = ORM::factory('setting', array('key' => 'phone'))->value;
    $this->template->email      = ORM::factory('setting', array('key' => 'email'))->value;
		$this->template->instagram	= ORM::factory('setting', array('key' => 'instagram'))->value;

    $beginning_year = ORM::factory('setting', array('key' => 'beginning_year'))->value;
    $current_year = date('Y');
    
    if ($beginning_year < $current_year)
    {
      $this->template->year = $beginning_year.' – '.$current_year;
    }
    else
    {
      $this->template->year = date('Y');
    }
  }
}
