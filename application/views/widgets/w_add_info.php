<div class="col-md-offset-1 text-left">
	<hr>
	<div class="add-info">
		<!-- Приёмная комиссия -->
		<h4 class="text-center">
			<a href="/admissiondocs">Приёмная комиссия</a>
		</h4>
		<p>Расположена в здании физкультурно-оздоровительного комплекса на территории университета, кабинет
			№12.</p>
		Режим работы:
		<ul>
			<li>понедельник - пятница с 8<sup>00</sup> до 15<sup>30</sup></li>
		</ul>
		<p>Тел: 8(87922) 5-62-70, 5-53-63, 5-53-97</p>
		<p>email: <?= $email ?></p>
		<hr>
		<p class="text-center">
			<? $btnSize = $mode == 'normal' ? 'btn-sm' : 'btn-lg' ?>
			<?= HTML::anchor('/feedback', 'Задать вопрос', [
				'class' => 'btn ' . $btnSize . ' btn-primary'
			]) ?>
		</p>
	</div>

	<hr>

	<!-- Для нормального режима -->
	<? if ($mode == 'normal'): ?>
		<!-- Картинки-ссылки -->
		<div class="row" style="padding-left: 10px">
			<a href="<?= $dir_docs ?>accreditation.pdf" class="col-xs-3 thumbnail" target="_blank">
				<img src="<?= $dir_img_docs . 'accreditation_mini.png' ?>" alt="<?= 'Аккредитация ' . $site_name ?>"
						 title="<?= 'Аккредитация' ?>">
			</a>
			<a href="<?= $dir_docs ?>license.pdf" class="col-xs-offset-1 col-xs-3 thumbnail" target="_blank">
				<img src="<?= $dir_img_docs . 'license_mini.png' ?>" alt="<?= 'Лицензия ' . $site_name ?>"
						 title="<?= 'Лицензия' ?>">
			</a>
			<a href="/diploms" class="col-xs-offset-1 col-xs-3 thumbnail">
				<img src="<?= $dir_img_docs . 'diploms.png' ?>" alt="<?= 'Образцы дипломов ' . $site_name ?>"
						 title="<?= 'Образцы дипломов' ?>">
			</a>
		</div>

		<hr>

		<!-- Для слабовидящих -->
	<? else: ?>
		<!-- Ссылки на документы -->
		<div class="list-group">
			<a href="<?= $dir_docs ?>accreditation.pdf" class="list-group-item" target="_blank">Аккредитация</a>
			<a href="<?= $dir_docs ?>license.pdf" class="list-group-item" target="_blank">Лицензия</a>
			<a href="/diploms" class="list-group-item">Образцы дипломов</a>
		</div>

		<hr>
	<? endif ?>

	<!-- Кнопка переключения режима -->
	<?= $switch_mode ?>

	<div class="cabinet text-center">
		<a class="btn btn-success" href="/cabinet" target="_blank">
			<i class="fas fa-user"></i>
			&nbsp;Личный кабинет
		</a>
	</div>

</div>
