<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Newslast extends Controller_Widget {
  public $template = 'widgets/w_news_last';
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->dir_img_news = ORM::factory('setting', array('key' => 'dir_img_news'))->value;
    
    $this->template->news = ORM::factory('news')->order_by('date', 'DESC')->limit(3)->find_all();
  }
}
