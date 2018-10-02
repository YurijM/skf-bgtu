<div class="diploms row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <div class="col-sm-4 col-xs-12 text-center">
    <div class="thumbnail text-center">
      <?=HTML::anchor($dir_docs.'programmer_diplom.pdf', HTML::image($dir_img_docs.'programmer_mini.png', array('class' => 'img img-rounded', 'alt' => $programmer)), array('title'  => 'Образец диплома', 'target' => '_blank'))?>
      <div class="caption">
        <?=$programmer?>
      </div>
    </div>
  </div>
  
  <div class="col-sm-4 col-xs-12 text-center">
    <div class="thumbnail text-center">
      <?=HTML::anchor($dir_docs.'economic_diplom.pdf', HTML::image($dir_img_docs.'economic_mini.png', array('class' => 'img img-rounded', 'alt' => $economic)), array('title'  => 'Образец диплома', 'target' => '_blank'))?>
      <div class="caption">
        <?=$economic?>
      </div>
    </div>
  </div>
  
  <div class="col-sm-4 col-xs-12 text-center">
    <div class="thumbnail text-center">
      <?=HTML::anchor($dir_docs.'building_diplom.pdf', HTML::image($dir_img_docs.'building_mini.png', array('class' => 'img img-rounded', 'alt' => $building)), array('title'  => 'Образец диплома', 'target' => '_blank'))?>
      <div class="caption">
        <?=$building?>
      </div>
    </div>
  </div>
</div>
