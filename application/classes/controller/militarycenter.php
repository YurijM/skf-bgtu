<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Militarycenter extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Военный учебный центр имени Героя Советского Союза генерала армии Н.Ф.Ватутина при БГТУ им.В.Г.Шухова';

    $military = View::factory('v_military_center');
    
    $military->mode = $this->mode;
    $military->page_title = $this->template->page_title;
   
    $military->dir_img_military_center = ORM::factory('setting', array('key' => 'dir_img_military_center'))->value;
    $military->dir_docs_military_center = ORM::factory('setting', array('key' => 'dir_docs_military_center'))->value;

    $military->dir_css = ORM::factory('setting', array('key' => 'dir_css'))->value;
    $military->dir_js = ORM::factory('setting', array('key' => 'dir_js'))->value;
    
    //$military->photos = ORM::factory('aboutbranch')->order_by('order_no')->find_all();
		$military->news = $this->widget_load($this->widgets_folder.'newsbycategory/index/4');

    $this->template->main = $military;
  }
}
