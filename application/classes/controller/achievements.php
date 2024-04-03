<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Achievements extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Научно-исследовательская деятельность филиала';

    $achievements = View::factory('v_achievements');
    
    $achievements->mode = $this->mode;
    $achievements->page_title = $this->template->page_title;
    $achievements->dir_css = ORM::factory('setting', array('key' => 'dir_css'))->value;
    $achievements->dir_js = ORM::factory('setting', array('key' => 'dir_js'))->value;

    $achievements->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $achievements->dir_img_achievements = ORM::factory('setting', array('key' => 'dir_img_achievements'))->value;
		$achievements->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;

    $achievements->achievements = ORM::factory('achievement')->order_by('date', 'DESC')->find_all();
		$achievements->achievements_text = ORM::factory('achievementtext')->find()->limit(1);

    $this->template->main = $achievements;
  }
}
