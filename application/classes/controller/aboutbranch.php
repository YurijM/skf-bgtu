<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Aboutbranch extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'О филиале';

    $about = View::factory('v_about_branch');
    
    $about->mode = $this->mode;
    $about->page_title = $this->template->page_title;
   
    $about->dir_img_about_branch = ORM::factory('setting', array('key' => 'dir_img_about_branch'))->value;
    $about->dir_css = ORM::factory('setting', array('key' => 'dir_css'))->value;
    $about->dir_js = ORM::factory('setting', array('key' => 'dir_js'))->value;
    
    $about->photos = ORM::factory('aboutbranch')->order_by('order_no')->find_all();

    $this->template->main = $about;
  }
}
