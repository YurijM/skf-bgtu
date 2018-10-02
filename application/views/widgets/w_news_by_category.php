<div class="row">
  <h5 class="text-center">Новости</h5>

  <? foreach ($news as $item): ?>
    <div class="news-category col-md-offset-1 col-md-3 col-sm-4 col-xs-12">
      <div class="col-xs-4">
        <?=HTML::image(
          $dir_img_news.substr_replace($item->photo->photo, '_mini', strripos($item->photo->photo, '.'), 0),
          ['class' => 'img img-responsive center-block']
        )?>
      </div>
      <div class="col-xs-8">
        <div class="text-primary small"><?=Helper_Addfunction::date_from_mysql($item->date)?></div>
        <?=HTML::anchor('/news/1/'.$item->id, $item->title, ['class' => 'text-info small'])?>
      </div>
    </div>
  <? endforeach ?>
</div>
