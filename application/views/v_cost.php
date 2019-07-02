<div class="cost row">
  <h2 class="text-center"><?=$page_title?></h2>

  <div class="col-xs-6">
    <div class="thumbnail text-center">
      <?=HTML::anchor($dir_docs.'preiskurant1.pdf', HTML::image($dir_img_docs.'preiskurant1.jpg', array('class' => 'img img-rounded', 'title' =>
				'Просмотреть документ', 'alt' => $page_title)), array('target' => '_blank'))?>
      <div class="caption" style="min-height:3em; max-height:3em">
        Стоимость обучения
      </div>
    </div>
  </div>

  <div class="col-xs-6">
    <div class="thumbnail text-center">
      <?=HTML::anchor($dir_docs.'kvitanciya_na_oplatu.pdf', HTML::image($dir_img_docs.'kvitanciya_na_oplatu.jpg', array('class' => 'img img-rounded', 'title' => 'Просмотреть документ', 'alt' => $page_title)), array('target' => '_blank'))?>
      <div class="caption" style="min-height:3em; max-height:3em">
        Квитанция на оплату
      </div>
    </div>
  </div>
</div>
