<!-- Скрипты и стили для загрузки галерее-->
<?=HTML::style($dir_css.'colorbox.css')?>

<?=HTML::script($dir_js.'jquery.colorbox-min.js')?>
<?=HTML::script($dir_js.'jquery.colorbox-ru.js')?>

<div class="news row">
  <p class="return text-right">
    <a href="/news/<?=$page?>"><К списку новостей></a>
  </p>

  <div class="news-text col-xs-12">
    <p class="title text-primary"><em><strong><?=Helper_Addfunction::date_from_mysql($news->date)?></strong></em></p>
    <p class="title text-info"><strong><?=$news->title?></strong></p>
    <p><?=$news->news?></p>
  </div>

  <hr>

  <? if ($mode == 'normal'): ?>
    <div class="galery text-center col-xs-12">
      <p class="text-center text-primary"><strong>Галерея</strong></p>
      <? foreach ($galery as $photo): ?>
        <a class="cboxElement" href="<?=$dir_img_news.$photo->photo?>" title="<?=$photo->description?>">
          <img src="<?=$dir_img_news.substr_replace($photo->photo, '_mini', strripos($photo->photo, '.'), 0)?>" title="<?=$photo->description?>" alt="<?=$photo->description.' '.$site_name?>">
        </a>
      <? endforeach ?>
    </div>
  <? endif ?>
  <p class="return text-right">
    <a href="/news/<?=$page?>"><К списку новостей></a>
  </p>
</div>

<script type="text/javascript">
	$(document).ready(function(){
    $(".cboxElement").colorbox({
      rel: true,
      slideshow: true,
      transition: 'elastic',
      slideshowSpeed: 5000 //5сек
    });
	});
</script>
