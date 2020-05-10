<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Slider extends Controller_Widget {
  public $template = 'widgets/w_slider';
  
  //==========================================================================//
  public function action_index()
  {
    $this->template->mode = $this->mode;

    $this->template->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    //$this->template->dir = ORM::factory('setting', array('key' => 'dir_img_slider'))->value;
		$this->template->dir = ORM::factory('setting', array('key' => 'dir_img_news'))->value;

    // Просматриваем каталог с файлами для карусели
    $filter = '*_mini.*';
    //$filter = '*.*';
    // Каталог с файлами для карусели без первого символа слэш '/'
    $dir = substr($this->template->dir, 1);
    $lst = glob($dir.$filter);
    
    // Создаём массив случайнах чисел, которые используются в качестве индексов
    // при создании массива имён файлов, загружаемых в слайдер
    $keys = $this->get_random_keys($dir, $lst);
    
    $this->template->slides = array();
    
    // Создание массива имён файлов, загружаемых в слайдер
    foreach ($keys as $key)
    {
      array_push($this->template->slides, str_replace('_mini', '', basename($lst[$key])));
    }
  }
  
  //==========================================================================//
  private function get_random_keys($dir, $lst)
  {
    $count_photo_for_slider = ORM::factory('setting', array('key' => 'count_photo_for_slider'))->value;
		$count = count($lst);
    $arr = array();
    
    while (count($arr) < $count_photo_for_slider)
    {
      $key = rand(1, $count) - 1;
      if (array_search($key, $arr) === FALSE)
      {
				// Загружаем фотографию
				$image = Image::factory($dir.str_replace('_mini', '', basename($lst[$key])));
				$prop = $image->height / $image->width;

				// Проверяем пропорции
				if (($prop <= .7) and ($prop >= .65)) {
					array_push($arr, $key);
				}
      }
    }
    
    return $arr;
  }
}
