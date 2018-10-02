<h3 class="text-center">
	<?= HTML::anchor('news/1', 'Новости', ['title' => 'Все новости']) ?>
</h3>
<? foreach ($news as $item): ?>
	<div class="news row">
		<!-- Обычный режим просмотра -->
		<? if ($mode == 'normal'): ?>
		<div class="col-md-4 col-sm-5 col-xs-12 thumbnail">
			<a href="/news/1/<?= $item->id ?>">
				<img
					src="<?= $dir_img_news . substr_replace($item->photo->photo, '_mini', strripos($item->photo->photo, '.'), 0) ?>"
					title="<?= $item->title ?>" alt="<?= $item->title ?>">
			</a>
		</div>
		<div class="news-right col-md-8 col-sm-7 col-xs-12">
		<!-- Для слабовидящих -->
		<? else: ?>
		<div class="news-right col-xs-12">
		<? endif ?>
			<em>
				<p class="text-primary"><strong><?= Helper_Addfunction::date_from_mysql($item->date) ?></strong></p>
			</em>

			<a href="/news/1/<?= $item->id ?>" class="text-info"><strong><?= $item->title ?></strong></a>

			<p>
				<?= Text::limit_words($item->news, 25) ?>
				<a class="btn <?= ($mode == 'normal' ? 'btn-info btn-xs' : 'btn-default btn-lg') ?>"
					 href="/news/1/<?= $item->id ?>" role="button">далее</a>
			</p>
		</div>
	</div>
	<hr>
<? endforeach ?>
<div class="all-news text-center">
	<?= HTML::anchor('news/1', 'посмотреть все новости') ?>
</div>
