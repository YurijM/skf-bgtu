<div class="patents-list row">
  <h2 class="text-center">
    <?=$page_title?>&nbsp;
    <?=HTML::anchor($link_url, $link_title)?>
  </h2>

  <?=$pagination?>

  <div class="patents-page col-xs-12">
    <? foreach ($patents as $patent): ?>
      <div class="patent col-sm-6 col-xs-12">
        <? if ($mode == 'normal'): ?>
          <div class="col-md-4 col-sm-6 hidden-xs text-center">
            <a href="<?=$dir_docs_patents.$patent->doc_file?>" target="_blank">
              <img class="img img-responsive" src="<?=$dir_img_patents.$patent->img_file?>" title="Просмотреть патент" alt="<?=$site_name?>">
            </a>
          </div>
        <? endif ?>

        <? if ($mode == 'normal'): ?>
          <div class="col-md-8 col-sm-6 col-xs-12">
        <? else: ?>
          <div class="col-xs-12">
        <? endif ?>
          <p class="text-primary">
            <a href="<?=$dir_docs_patents.$patent->doc_file?>" target="_blank">
              <em>
                <strong>№<?=$patent->number.' ('.Helper_Addfunction::date_from_mysql($patent->date).')'?></strong></em>
            </a>
          </p>

          <p class="text-info">
            <strong><?=$patent->application_area?></strong>
          </p>

          <p>
            <?=$patent->patent?>
          </p>
        </div>
      </div>
    <? endforeach ?>
  </div>
  
  <?=$pagination?>
</div>
  
<script>
//  $(document).ready(function() {
  $(window).load(function() {
    setHeight();
    
    function setHeight() {
      div_heights = [];
      img_heights = [];
    
      $('.patent').each(function() {
        div_heights.push($(this).height());
      });
    
      $('.patent .img').each(function() {
        img_heights.push($(this).height());
      });
      
      heights = [Math.max.apply(null, div_heights), Math.max.apply(null, img_heights)];
      height = Math.max.apply(null, heights) + 15;
      
      $('.patent').css('height', height);
    };
  });
</script>