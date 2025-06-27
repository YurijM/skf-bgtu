<div class="news-list">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <!--<h4 class="text-right">
    <?/*=HTML::anchor('/news/video', 'Видеогалерея')*/?>
  </h4>-->

  <?=$pagination?>

  <hr>

  <? foreach ($news as $item): ?>
    <div class="news row">
      <? if ($mode == 'normal'): ?>
        <div class="col-sm-5 col-xs-12 thumbnail">
          <a href="/news/<?=$page?>/<?=$item->id?>">
            <img src="<?=$dir_img_news.substr_replace($item->photo->photo, '_midi', strripos($item->photo->photo, '.'), 0)?>" title="<?=$item->title?>" alt="<?=$item->title.' '.$site_name?>">
          </a>
        </div>
        <div class="news-right col-sm-7 col-xs-12">
      <? else: ?>
        <div class="news-right col-xs-12">
      <? endif ?>
        <em>
          <p class="text-primary"><strong><?=Helper_Addfunction::date_from_mysql($item->date)?></strong></p>
        </em>

        <p class="text-info">
          <a href="/news/<?=$page?>/<?=$item->id?>">
            <strong><?=$item->title?></strong>
          </a>
        </p>

        <? if (count(explode(" ", $item->news)) > 125): ?>
          <p>
          <?=Text::limit_words($item->news, 125)?>
            <a class="btn <?=($mode == 'normal' ? 'btn-info btn-xs' : 'btn-default btn-lg')?>" href="/news/<?=$page?>/<?=$item->id?>" role="button">далее</a>
          </p>
        <? else: ?>
          <?=$item->news?>
        <? endif ?>
      </div>
    </div>

    <hr>
  <? endforeach ?>

  <?=$pagination?>
</div>
