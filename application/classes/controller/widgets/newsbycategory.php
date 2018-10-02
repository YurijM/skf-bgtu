<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Newsbycategory extends Controller_Widget {
  public $template = 'widgets/w_news_by_category';

  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->dir_img_news = ORM::factory('setting', array('key' => 'dir_img_news'))->value;

    $id = $this->request->param('id');

    $this->template->category = '';

    switch ($id)
    {
      case 1:
        $this->template->category = 'культура';
        break;
      case 2:
        $this->template->category = 'наука';
        break;
      case 3:
        $this->template->category = 'спорт';
        break;
    }

    $this->template->news = ORM::factory('news')
      ->where('category', '=', $this->template->category)
      ->order_by('date', 'DESC')
      ->limit(3)
      ->find_all();
  }
}
