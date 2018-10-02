<div class="news-list row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <h4 class="text-right">
    <?=HTML::anchor('/news', 'Новости')?>
  </h4>
  
  <? foreach ($videogallery as $video): ?>
    <div class="video col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail text-center">
        <iframe class="img img-responsive center-block" src="<?=$video->source?>" frameborder="0" allowfullscreen></iframe>
        <div class="caption <?=($mode == 'normal' ? 'small' : '')?>">
          <?=$video->title?>
        </div>
      </div>
    </div>
  <? endforeach ?>
</div>
