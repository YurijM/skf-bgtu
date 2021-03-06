<div class="header row bg-info">
	<!-- Картинка шапки сайта -->
	<!----------------------------------------------------------------------------------------------->
	<div class="col-xs-12">
		<a href="/" title="Переход на главную страницу">
			<img class="img-responsive" src="<?= $dir_img ?>header.png" alt="СКФ БГТУ">
		</a>
	</div>

	<div class="col-xs-12">
		<!-- Слайдер -->
		<!----------------------------------------------------------------------------------------------->
		<div id="carousel-example-generic"
				 class="col-md-8 col-sm-7 col-xs-12 carousel slide"
				 data-ride="carousel" data-interval="15000"
		>
			<?= $slider ?>
		</div>

		<!-- Панель дополнительной информации -->
		<!----------------------------------------------------------------------------------------------->
		<div class="col-md-4 col-sm-5 col-xs-12">
			<?= $add_info ?>
		</div>
	</div>

	<!-- Панель с адресом -->
	<!----------------------------------------------------------------------------------------------->
	<div class="address col-xs-12 text-center">
		<?= $address ?>, тел. <?= $phone ?>, email: <?= $email ?>, instagram: <?=$instagram?>
	</div>
</div>
