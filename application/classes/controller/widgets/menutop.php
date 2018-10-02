<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menutop extends Controller_Widget {
  public $template = 'widgets/w_menu_top';
  public function action_index()
  {
    $this->template->menu = array();
    
    $main_menu = ORM::factory('menu')->where('parent_id', '=', 0)->order_by('item_no')->find_all();
    foreach ($main_menu as $item):
      $sub_menu = ORM::factory('menu')->where('parent_id', '=', $item->id)->order_by('item_no')->find_all();
    
      $arr_sub_menu = array();
      if ($sub_menu->count() > 0):
        foreach ($sub_menu as $sub_item):
          array_push($arr_sub_menu, array(
            'item' => $sub_item->item,
            'link_to' => $sub_item->link_to
          ));
        endforeach;
      endif;
      
      array_push($this->template->menu, array(
        'item_no' => $item->item_no,
        'item' => $item->item,
        'link_to' => $item->link_to,
        'sub_menu' => $arr_sub_menu
      ));

    endforeach;
  }
}
