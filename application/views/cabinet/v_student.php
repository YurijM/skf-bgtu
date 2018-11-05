<div class="<?= $classPersonnel ?>">
	<?= $personnel ?>

	<hr class="hidden-md hidden-lg">

	<?= (($isContract and $isAchievements) ? $achievement : '') ?>

	<hr class="hidden-md hidden-lg">
</div>

<div class="<?= $classPayment ?>">
	<?= $payment ?>
</div>

<div class="<?= $classAchievement ?>">
	<?= (!$isContract ? $achievement : '') ?>
</div>

<div class="col-xs-12 text-center">
	<hr>
	<?= HTML::anchor('http://e.lanbook.com', HTML::image($dirImg . 'lan.jpg'), ['target' => '_blank']) ?>
	<?= HTML::anchor('http://www.iprbookshop.ru', HTML::image($dirImg . 'iprbooks.jpg'), ['target' => '_blank']) ?>
	<?= HTML::anchor('https://biblio-online.ru', HTML::image($dirImg . 'yuwrite.jpg'), ['target' => '_blank']) ?>
	<?= HTML::anchor('https://elib.bstu.ru', HTML::image($dirImg . 'readingroom.jpg'), ['target' => '_blank']) ?>
	<?= HTML::anchor('http://biblioclub.ru/index.php?page=main_ub_red', HTML::image($dirImg . 'online.jpg'), ['target' => '_blank']) ?>
</div>
