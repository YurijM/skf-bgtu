<div class="digests row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <?=HTML::anchor('/digests/articles', 'Публикации в периодических изданиях', array('class' => 'col-xs-12'))?>
  <?=HTML::anchor('/digests/conferences', 'Научно-практические конференции СКФ БГТУ', array('class' => 'col-xs-12'))?>
  
  <div class="remark col-xs-12 bg-info text-primary">
    <div class="col-xs-12 text-center">
      <strong>Требования по содержанию и оформлению статей</strong>
    </div>
  
    <div class="col-xs-6">
      <?=HTML::anchor($dir_docs.'treb_zarubej.pdf', '- для зарубежных сборников', array('target' => '_blank'))?>
    </div>
    <div class="col-xs-6 text-right">
      <?=HTML::anchor($dir_docs.'treb_skfbgtu.pdf', '- для сборников СКФ БГТУ', array('target' => '_blank'))?>
    </div>
  </div>
</div>
