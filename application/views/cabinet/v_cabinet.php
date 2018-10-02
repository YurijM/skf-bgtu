<div class="main row">
	<h2 class="text-center text-info"><?= $pageTitle ?></h2>

	<? if ($kind == 2): ?>
		<h1 class="text-center text-danger">
			Извините, но Ваши данные отсутствуют в базе!
		</h1>
	<? else: ?>
		<?= $cabinet ?>
		<div id="check" class="hidden"></div>
	<? endif ?>
</div>
