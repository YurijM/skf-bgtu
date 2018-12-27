<div class="separator col-xs-12">&nbsp;</div>

<div class="add-info col-xs-12">
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

	<div class="separator col-xs-12">&nbsp;</div>

	<p class="text-center">
		<? $btnSize = $mode == 'normal' ? 'btn-sm' : 'btn-lg' ?>
		<?= HTML::anchor('/feedback', 'Задать вопрос', [
			'class' => 'btn ' . $btnSize . ' btn-primary'
		]) ?>
	</p>
</div>

<div class="separator col-xs-12">&nbsp;</div>

<!-- Для нормального режима -->
<? if ($mode == 'normal'): ?>
	<!-- Картинки-ссылки -->
	<!--<div class="row" style="padding-left: 10px">-->
	<div class="col-xs-12" style="margin-bottom: 5px">
		<a href="<?= $dir_docs ?>accreditation.pdf" class="col-xs-4 text-center" target="_blank">
			<img src="<?= $dir_img_docs . 'accreditation_mini.png' ?>" alt="<?= 'Аккредитация ' . $site_name ?>"
					 title="<?= 'Аккредитация' ?>">
		</a>
		<a href="<?= $dir_docs ?>license.pdf" class="col-xs-4 text-center" target="_blank">
			<img src="<?= $dir_img_docs . 'license_mini.png' ?>" alt="<?= 'Лицензия ' . $site_name ?>"
					 title="<?= 'Лицензия' ?>">
		</a>
		<a href="/diploms" class="col-xs-4 text-center">
			<img src="<?= $dir_img_docs . 'diploms.png' ?>" alt="<?= 'Образцы дипломов ' . $site_name ?>"
					 title="<?= 'Образцы дипломов' ?>">
		</a>
	</div>

	<!-- Для слабовидящих -->
<? else: ?>
	<!-- Ссылки на документы -->
	<div class="list-group col-xs-12">
		<a href="<?= $dir_docs ?>accreditation.pdf" class="list-group-item" target="_blank">Аккредитация</a>
		<a href="<?= $dir_docs ?>license.pdf" class="list-group-item" target="_blank">Лицензия</a>
		<a href="/diploms" class="list-group-item">Образцы дипломов</a>
	</div>
<? endif ?>

<div class="separator col-xs-12">&nbsp;</div>

<!-- Кнопка переключения режима -->
<?= $switch_mode ?>

<div class="cabinet col-xs-12 text-center">
	<a class="btn btn-success" style="white-space: normal !important; outline: none" href="/cabinet" target="_blank">
		<i class="fas fa-info"></i>
		&nbsp;Информационно-образовательная среда
	</a>
</div>
