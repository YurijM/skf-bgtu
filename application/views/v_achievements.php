<!-- Скрипты и стили для загрузки галерее-->
<?=HTML::style($dir_css.'colorbox.css')?>

<?=HTML::script($dir_js.'jquery.colorbox-min.js')?>
<?=HTML::script($dir_js.'jquery.colorbox-ru.js')?>

<div class="achievements-list row">
  <h2 class="text-center"><?=$page_title?></h2>

	<div class="col-xs-12 text-justify">
		<?= Kodoc_Markdown::markdown($achievements_text->content) ?>
	</div>

  <div class="galery col-xs-12">
    <? foreach ($achievements as $achievement): ?>
      <a class="cboxElement" href="<?=$dir_img_achievements.$achievement->img_file?>">
        <img src="<?=$dir_img_achievements.substr_replace($achievement->img_file, '_mini', strripos($achievement->img_file, '.'), 0)?>" title="<?=Helper_Addfunction::date_from_mysql($achievement->date)?> - запустить слайдшоу" alt="<?=$site_name?>">
      </a>
    <? endforeach ?>
  </div>
</div>
  
<script>
  $(document).ready(function() {
    $(".cboxElement").colorbox({
      rel: true,
      slideshow: true,
      transition: 'elastic',
      slideshowSpeed: 5000 //5сек
    });
  });
</script>