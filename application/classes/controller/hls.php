<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Hls extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Здоровый образ жизни';

    $hls = View::factory('v_hls');
    
    $hls->mode = $this->mode;
    $hls->page_title = $this->template->page_title;
   
    $hls->dir_img_hls = ORM::factory('setting', array('key' => 'dir_img_hls'))->value;

    $hls->news = $this->widget_load($this->widgets_folder.'newsbycategory/index/3');

    $this->template->main = $hls;
  }
}
