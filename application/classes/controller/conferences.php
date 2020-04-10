<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Conferences extends Controller_Base {
  //==========================================================================//
  public function action_index()
  {
    $this->template->page_title = 'Научно-практические конференции СКФ БГТУ';

    $conferences = View::factory('v_digests_conferences');
    
    $conferences->mode = $this->mode;
    $conferences->page_title = $this->template->page_title;

    $conferences->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
		$conferences->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;
    $conferences->dir_docs_conferences = ORM::factory('setting', array('key' => 'dir_docs_conferences'))->value;
    $conferences->dir_img_conferences = ORM::factory('setting', array('key' => 'dir_img_conferences'))->value;

    $conferences->conferences = ORM::factory('conference')->order_by('date', 'DESC')->find_all();

    $this->template->main = $conferences;
  }
}
