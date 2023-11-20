<div class="eios row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<p>
		ЭИОС представляет собой совокупность информационных технологий, телекоммуникационных технологий,
		соответствующих технологических средств, электронных информационных и образовательных ресурсов,
		необходимых и достаточных для организации опосредованного (на расстоянии) взаимодействия обучающихся с
		профессорско–преподавательским составом.
	</p>

	<p>
		Электронная информационно-образовательная среда СКФ БГТУ им. В.Г. Шухова функционирует на основе
		<?= Html::anchor(
			$dir_docs_education . 'pol_eos.pdf',
			'Положения о реализации процесса "Об электронно-образовательной среде СКФ БГТУ им.В.Г.Шухова"',
			['target' => '_blank']
		) ?>;
	</p>

	<p>
		Доступ к ЭИОС получают все участники образовательного процесса СКФ БГТУ им. В.Г. Шухова. Доступ
		обучающимся осуществляется через
		<?= Html::anchor(
			'/cabinet',
			' «Личный кабинет» ',
			['target' => '_blank']
		) ?>
		как точки единого доступа ко всем образовательным ресурсам корпоративной компьютерной сети филиала.
	</p>

	<h5 class="text-center">
		Электронная информационно-образовательная среда СКФ БГТУ им.В.Г.Шухова
	</h5>

	<ul style="list-style-type: disc">
		<li>
			Наличие доступа к сети «Интернет»
			<?= Html::anchor(
				$dir_docs . 'dog_it.pdf',
				'(договор № 263 от 17.12.2022 на предоставление телематических услуг связи с ООО «Кавказ Интернет Сервис»)',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			Сайт СКФ БГТУ им.В.Г.Шухова
			<?= Html::anchor(
				'/',
				'(http://skf-bgtu.ru)',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= Html::anchor(
				'/cabinet',
				'Доступ к электронной библиотечной системе и к электронным образовательным ресурсам и/ или
			профессиональным базам данных',
				['target' => '_blank']
			) ?>
			(подборкам информационных ресурсов по тематикам) в соответствии с содержанием реализуемой
			образовательной программы высшего образования и среднего профессионально образования

			<h5 class="text-center">
				Электронные образовательные ресурсы, к которым обеспечен доступ обучающихся СКФ БГТУ им.В.Г.Шухова
			</h5>

			<div class="row">
				<div class="table-responsive col-md-offset-2 col-md-8">
					<table class="table table-bordered table-condensed bg-success">
						<tr>
							<th>Наименование ресурса</th>
							<th>Адрес сайта</th>
						</tr>
						<tr>
							<td>
								Электронный читальный зал научно-технической библиотеки БГТУ им.В.Г.Шухова
							</td>
							<td class="text-center" style="vertical-align: middle">
								<?= HTML::anchor(
									'https://elib.bstu.ru/',
									'elib.bstu.ru',
									['target' => '_blank']) ?>
							</td>
						</tr>
						<tr>
							<td>Электронно-библиотечная система издательства "Лань"</td>
							<td class="text-center" style="vertical-align: middle">
								<?= HTML::anchor(
									'http://e.lanbook.com',
									'e.lanbook.com',
									['target' => '_blank']) ?>
							</td>
						</tr>
						<tr>
							<td>Электронно-библиотечная система "IPRsmart"</td>
							<td class="text-center" style="vertical-align: middle">
								<?= HTML::anchor(
									'http://www.iprbookshop.ru',
									'www.iprbookshop.ru',
									['target' => '_blank']) ?></td>
						</tr>
						<tr>
							<td>Электронно-библиотечная система "Юрайт"</td>
							<td class="text-center" style="vertical-align: middle">
								<?= HTML::anchor(
									'https://biblio-online.ru',
									'biblio-online.ru',
									['target' => '_blank']) ?>
							</td>
						</tr>
						<tr>
							<td>"Университетская библиотека ONLINE"</td>
							<td class="text-center" style="vertical-align: middle">
								<?= HTML::anchor(
									'http://biblioclub.ru/index.php?page=main_ub_red',
									'biblioclub.ru',
									['target' => '_blank']) ?>
							</td>
						</tr>
						<tr>
							<td>Электронно-библиотечная система ZNANIUM</td>
							<td class="text-center" style="vertical-align: middle">
								<?= HTML::anchor(
									'http://znanium.com',
									'znanium.com',
									['target' => '_blank']
								) ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</li>
		<li>
			Взаимодействие педагогических работников с обучающимися (личные кабинеты обучающихся и преподавателей) в
			<?= Html::anchor(
				'/cabinet',
				'электронной информационно-образовательной среде',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			Доступ к
			<?= Html::anchor(
				'/educationalprocess',
				'электронному расписанию',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= Html::anchor(
				'/cabinet',
				'Электронное портфолио обучающихся,',
				['target' => '_blank']
			) ?>
			в том числе сохранения его работ и оценок за эти работы
		</li>
		<li>
			Доступ к
			<?= Html::anchor(
				'/sveden/education',
				'учебным планам, рабочим программам дисциплин (модулей), программам практик,',
				['target' => '_blank']
			) ?>
			указанным в рабочих программах дисциплин (модулей), программах практик по образовательной программе
		</li>
		<li>
			Доступ к
			<?= Html::anchor(
				'/cabinet',
				'электронным учебным изданиям и электронным образовательным ресурсам',
				['target' => '_blank']
			) ?>
		</li>
	</ul>
</div>
