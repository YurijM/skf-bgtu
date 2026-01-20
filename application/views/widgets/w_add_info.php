<div class="separator col-xs-12">&nbsp;</div>

<div class="add-info col-xs-12">
	<!-- Приёмная комиссия -->
	<h4 class="text-center">
		<a href="/admissiondocs">Приёмная комиссия</a>
	</h4>
	<p>Расположена в здании учебного корпуса, кабинет №8.</p>
	График работы:
	<ul>
		<li>понедельник - пятница с 8<sup>00</sup> до 16<sup>30</sup></li>
		<li>суббота, воскресенье - выходной</li>
		<li>в летний период: суббота с 8<sup>00</sup> до 15<sup>00</sup></li>
	</ul>
	<p>Тел: 8(87922) 5-53-63, 5-53-97</p>
	<p>email: <?= $email ?></p>

	<div class="separator col-xs-12">&nbsp;</div>

	<!--<p class="text-center">
		<? /* $btnSize = $mode == 'normal' ? 'btn-sm' : 'btn-lg' */ ?>
		<? /*= HTML::anchor('/feedback', 'Задать вопрос', [
			'class' => 'btn ' . $btnSize . ' btn-primary'
		]) */ ?>
	</p>-->
	<? $btnSize = $mode == 'normal' ? 'btn-sm' : 'btn-lg' ?>

	<!-- Для нормального режима -->
	<? if ($mode == 'normal'): ?>
		<div class="row">
			<div class="col-xs-4 text-center">
				<?= HTML::anchor('/specialties', 'Приём ВУЗ 2026', [
					'class' => 'btn ' . $btnSize . ' btn-danger'
				]) ?>
			</div>
			<div class="col-xs-4 text-center">
				<?= HTML::anchor('/specialtiescollege', 'Приём СПО 2026', [
					'class' => 'btn ' . $btnSize . ' btn-success'
				]) ?>
			</div>
			<div class="col-xs-4 text-center">
				<?= HTML::anchor('/feedback', 'Задать вопрос', [
					'class' => 'btn ' . $btnSize . ' btn-primary'
				]) ?>
			</div>
		</div>
		<!-- Для слабовидящих -->
	<? else: ?>
		<div class="col-xs-12 text-center">
			<?= HTML::anchor('/specialties', 'Приём ВУЗ 2021', [
				'class' => 'btn ' . $btnSize . ' btn-danger',
				'style' => 'width: 100%; margin-bottom: .25em'
			]) ?>
		</div>
		<div class="col-xs-12 text-center">
			<?= HTML::anchor('/specialtiescollege', 'Приём СПО 2021', [
				'class' => 'btn ' . $btnSize . ' btn-success',
				'style' => 'width: 100%; margin-bottom: .25em'
			]) ?>
		</div>
		<div class="col-xs-12 text-center">
			<?= HTML::anchor('/feedback', 'Задать вопрос', [
				'class' => 'btn ' . $btnSize . ' btn-primary',
				'style' => 'width: 100%'
			]) ?>
		</div>
	<? endif ?>

</div>

<div class="separator col-xs-12">&nbsp;</div>

<!-- Для нормального режима -->
<? if ($mode == 'normal'): ?>
	<!-- Картинки-ссылки -->
	<!--<div class="row" style="padding-left: 10px">-->
	<div class="col-xs-12" style="margin-bottom: 5px">
		<div class="col-xs-12 text-center" style="margin-bottom: .25em;">
			<b>Лицензия и аккредитация</b>
		</div>
		<!--<a href="<?/*= $dir_docs */?>license.pdf" class="col-xs-3 text-center" target="_blank">
			<img src="<?/*= $dir_img_docs . 'license_mini.png' */?>" alt="<?/*= 'Лицензия ' . $site_name */?>"
					 title="<?/*= 'Лицензия' */?>">
		</a>-->
		<a href="<?= $dir_docs ?>reestr_lic.pdf" class="col-xs-6 text-center" target="_blank">
			<img src="<?= $dir_img_docs . 'reestr_lic.png' ?>" alt="<?= 'Лицензия ' . $site_name ?>"
					 title="<?= 'Реестр лицензий' ?>">
		</a>
		<!--<a href="<?/*= $dir_docs */?>accreditation.pdf" class="col-xs-3 text-center" target="_blank">
			<img src="<?/*= $dir_img_docs . 'accreditation_mini.png' */?>" alt="<?/*= 'Аккредитация ' . $site_name */?>"
					 title="<?/*= 'Аккредитация' */?>">
		</a>-->
		<a href="<?= $dir_docs ?>reestr_acc.pdf" class="col-xs-6 text-center" target="_blank">
			<img src="<?= $dir_img_docs . 'reestr_acc.png' ?>" alt="<?= 'Аккредитация ' . $site_name ?>"
					 title="<?= 'Реестр аккредитаций' ?>">
		</a>
	</div>

	<!-- Для слабовидящих -->
<? else: ?>
	<!-- Ссылки на документы -->
	<div class="col-xs-12 text-center" style="margin-bottom: .25em;">
		<b>Лицензия и аккредитация</b>
	</div>
	<div class="list-group col-xs-12">
		<a href="<?= $dir_docs ?>accreditation.pdf" class="list-group-item" target="_blank">Аккредитация</a>
		<a href="<?= $dir_docs ?>license.pdf" class="list-group-item" target="_blank">Лицензия</a>
		<a href="<?= $dir_docs ?>license_spo.pdf" class="list-group-item">Лицензия СПО</a>
	</div>
<? endif ?>

<div class="separator col-xs-12">&nbsp;</div>

<!-- Кнопка переключения режима -->
<?= $switch_mode ?>

<div class="cabinet col-xs-12 text-center">
	<a class="btn btn-success" style="white-space: normal !important; outline: none" href="/cabinet" target="_blank">
		Информационно-образовательная среда<br>
		<i class="fas fa-user"></i>
		Личный кабинет&nbsp;
	</a>
</div>

<div class="col-xs-12 text-center">
	<?= HTML::anchor(
		'https://vk.com/skf_bgtu',
		'<img src="/media/img/vk.png" alt="ВКонтакте" title="ВКонтакте" width="65">',
		[
			'class' => 'col-xs-3 text-center',
			'style' => 'white-space: normal !important, outline: none',
			'target' => '_blank'
		]
	) ?>
	<?= Html::anchor(
		'/questionnaire',
		HTML::image(
			'/media/img/QR.png',
			[
				'width' => '35',
				'style' => 'outline: none',
				'title' => 'Анкета - качество образования'
			]
		) . '&nbsp;&nbsp;&nbsp;Анкета - качество условий образования',
		[
			'style' => 'margin-top: .5em',
			'class' => 'col-xs-9 text-center btn btn-primary'
		]
	) ?>
</div>
