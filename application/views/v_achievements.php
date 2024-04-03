<!-- Скрипты и стили для загрузки галерее-->
<?= HTML::style($dir_css . 'colorbox.css') ?>

<?= HTML::script($dir_js . 'jquery.colorbox-min.js') ?>
<?= HTML::script($dir_js . 'jquery.colorbox-ru.js') ?>

<div class="achievements-list row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="col-xs-12 text-justify">
		<div class="col-xs-12">
			<div class="col-md-4 col-sm-5 hidden-xs <?= ($mode != 'normal' ? 'hidden' : '') ?>">
				<img src="<?= $dir_img_achievements ?>achievements.jpg" class="img img-responsive" alt="<?= $page_title ?>">
			</div>
			<?= Kodoc_Markdown::markdown($achievements_text->content) ?>
		</div>

		<!--<div class="galery col-xs-12">
    <? /* foreach ($achievements as $achievement): */ ?>
      <a class="cboxElement" href="<? /*=$dir_img_achievements.$achievement->img_file*/ ?>">
        <img src="<? /*=$dir_img_achievements.substr_replace($achievement->img_file, '_mini', strripos($achievement->img_file, '.'), 0)*/ ?>" title="<? /*=Helper_Addfunction::date_from_mysql($achievement->date)*/ ?> - запустить слайдшоу" alt="<? /*=$site_name*/ ?>">
      </a>
    <? /* endforeach */ ?>
  </div>-->
	</div>

	<p>
		<?= HTML::anchor(
			$dir_docs . 'itog_nauch.pdf',
			'Итоги научно-исследовательской деятельности филиала за 2023 год',
			[
				'style' => 'text-decoration: underline',
				'target' => '_blank'
			]
		)?>
	</p>

	<script>
		$(document).ready(function () {
			$(".cboxElement").colorbox({
				rel: true,
				slideshow: true,
				transition: 'elastic',
				slideshowSpeed: 5000 //5сек
			});
		});
	</script>