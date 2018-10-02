<div class="newspapers row">
  <h2 class="text-center"><?=$page_title?></h2>

  <? foreach ($newspapers as $newspaper): ?>
    <div class="<?=($mode == 'normal' ? 'col-md-2' : '')?> col-sm-3 col-xs-6">
      <div class="thumbnail text-center">
        <?=HTML::anchor($dir_docs_newspapers.$newspaper->doc_file, HTML::image($dir_img_newspapers.$newspaper->img_file, array('class' => 'img img-rounded img-responsive', 'alt' => $site_name)), array('title'  => 'Просмотреть газету', 'target' => '_blank'))?>
        <div class="caption <?=($mode == 'normal' ? 'small' : '')?>">
          <?='№'.$newspaper->issue.' '.$months[$newspaper->month].' '.$newspaper->year?>
        </div>
      </div>
    </div>
  <? endforeach ?>
</div>
  
<script>
//  $(document).ready(function() {
  $(window).load(function() {
    setHeight();
  });
    
  function setHeight() {
    heights = [];

    $('.thumbnail .img').each(function() {
      heights.push($(this).height());
    });

    height = Math.max.apply(null, heights);

    $('.thumbnail .img').css('min-height', height + 15);
  };
</script>