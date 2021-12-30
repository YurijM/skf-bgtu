<div class="paid-services row" itemprop="paidEdu">
	<h2 class="text-center"><?= $page_title ?></h2>

	<ul style="list-style-type: disc">
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>

			<?= Html::anchor(
				$dir_docs . 'plat_usl_2016.pdf',
				'Положение о платных образовательных услугах СКФ БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>

		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 14:15
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
				]
			) ?>

			<?= Html::anchor(
				$dir_docs . 'poryadok_platn_uslug_01032019.pdf',
				'Положение о порядке оказания платных образовательных услуг',
				['target' => '_blank']
			) ?>;
		</li>

		<li>
			<?= Html::anchor(
				$dir_docs . 'dogovor_vo.pdf',
				'Образец договора об оказании платных образовательных услуг для высшего образования',
				['target' => '_blank']
			) ?>;
		</li>

		<li>
			<?= Html::anchor(
				$dir_docs . 'dogovor_spo.pdf',
				'Образец договора об оказании платных образовательных услуг для среднего профессионального образования',
				['target' => '_blank']
			) ?>
		</li>
	</ul>

	<p>
		<strong>
			Приказы об утверждении стоимости обучения по каждой образовательной программе для высшего образования:
		</strong>
	</p>

	<ul style="list-style-type: disc">
		<? foreach ($orders as $doc): ?>
			<? if ($doc['link'] != ''): ?>
				<li>
					<? if (isset($doc['sign'])): ?>
						<?= HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1em',
								'title' => $doc['sign']
							]
						) ?>
					<? endif ?>
					<?= HTML::anchor($dir_docs . $doc['link'], $doc['title'],
						[
							'target' => '_blank',
							'itemprop' => $doc['itemprop'],
						]
					) ?>
				</li>
			<? endif ?>
		<? endforeach ?>
	</ul>

	<p>
		<strong>
			Приказы об утверждении стоимости обучения по каждой образовательной программе для среднего
			профессионального образования:
		</strong>
	</p>

	<ul>
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 03.07.2021 10:30
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>
			<?= HTML::anchor($dir_docs . 'pr50.pdf',
				'Приказ 3/50-ХД от 03.07.2021г. «Об установлении стоимости платных образовательных услуг на 2021/2022 учебный год для 1 курса»',
				[
					'target' => '_blank',
					'itemprop' => $doc['itemprop'],
				]
			) ?>
		</li>
	</ul>

	<p>
		<strong>
			В образовательной организации не реализуются образовательные программы дошкольного, начального
			общего, основного общего и среднего общего образования.
		</strong>
	</p>

	<p>
		<b>Документ об установлении размера платы, взимаемой с родителей (законных представителей) за присмотр и
			уход за детьми, осваивающими
			образовательные программы дошкольного образования в организациях, осуществляющих образовательную
			деятельность, за содержание детей в
			образовательной организации, реализующей образовательные программы начального общего, основного общего
			или среднего общего образования,если в
			такой образовательной организации созданы условия для проживания обучающихся в интернате, либо за
			осуществление присмотра и ухода за детьми в
			группах продленного дня в образовательной организации, реализующей образовательные программы начального
			общего, основного общего или среднего
			общего образования:</b> отсутствует
	</p>

	<h5 class="text-center">
		Прейскурант
	</h5>

	<div class="row text-center">
		<h5 class="col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6 col-md-8 col-sm-10 col-xs-12">
			стоимости платных образовательных услуг на 2021/2022 учебный год для высшего образования по программе
			подготовки бакалавров
		</h5>
	</div>

	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered">
			<tr>
				<th rowspan="3" style="width: 10%">Код</th>
				<th rowspan="3" style="width: 15%">Направление</th>
				<th rowspan="3" style="width: 5%">Курс</th>
				<th colspan="6">Форма обучения</th>
			</tr>
			<tr>
				<th colspan="2">очная</th>
				<th colspan="2">очно-заочная</th>
				<th colspan="2">заочная</th>
			</tr>
			<tr>
				<th>Нормативная стоимость</th>
				<th>Оплата студентов</th>
				<th>Нормативная стоимость</th>
				<th>Оплата студентов</th>
				<th>Нормативная стоимость</th>
				<th>Оплата студентов</th>
			</tr>

			<tr class="bg-success text-success">
				<td class="text-center" rowspan="5">38.03.01</td>
				<td class="text-center" rowspan="5">Экономика</td>
				<td class="text-center">1</td>
				<td class="text-center">98600.00</td>
				<td class="text-center">72700.00</td>
				<td class="text-center">47000.00</td>
				<td class="text-center">47000.00</td>
				<td class="text-center">36200.00</td>
				<td class="text-center">36200.00</td>
			</tr>
			<tr class="bg-success text-success">
				<td class="text-center">2</td>
				<td class="text-center">98600.00</td>
				<td class="text-center">72700.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">36200.00</td>
				<td class="text-center">36200.00</td>
			</tr>
			<tr class="bg-success text-success">
				<td class="text-center">3</td>
				<td class="text-center">98600.00</td>
				<td class="text-center">72700.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">36200.00</td>
				<td class="text-center">36200.00</td>
			</tr>
			<tr class="bg-success text-success">
				<td class="text-center">4</td>
				<td class="text-center">84000.00</td>
				<td class="text-center">72700.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">36200.00</td>
				<td class="text-center">36200.00</td>
			</tr>
			<tr class="bg-success text-success">
				<td class="text-center">5</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">36200.00</td>
				<td class="text-center">36200.00</td>
			</tr>

			<tr class="bg-info text-info">
				<td class="text-center" rowspan="4">38.03.02</td>
				<td class="text-center" rowspan="4">Менеджмент</td>
				<td class="text-center">1</td>
				<td class="text-center">98600.00</td>
				<td class="text-center">72700.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">2</td>
				<td class="text-center">98600.00</td>
				<td class="text-center">72700.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">3</td>
				<td class="text-center">98600.00</td>
				<td class="text-center">72700.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">4</td>
				<td class="text-center">84000.00</td>
				<td class="text-center">72700.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
			</tr>

			<tr class="bg-success text-success">
				<td class="text-center" rowspan="5">08.03.01</td>
				<td class="text-center" rowspan="5">Строительство</td>
				<td class="text-center">1</td>
				<td class="text-center">115200.00</td>
				<td class="text-center">83500.00</td>
				<td class="text-center">54900.00</td>
				<td class="text-center">54900.00</td>
				<td class="text-center">39400.00</td>
				<td class="text-center">39400.00</td>
			</tr>
			<tr class="bg-success text-success">
				<td class="text-center">2</td>
				<td class="text-center">107920.00</td>
				<td class="text-center">83500.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">39400.00</td>
				<td class="text-center">39400.00</td>
			</tr>
			<tr class="bg-success text-success">
				<td class="text-center">3</td>
				<td class="text-center">107920.00</td>
				<td class="text-center">83500.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">39400.00</td>
				<td class="text-center">39400.00</td>
			</tr>
			<tr class="bg-success text-success">
				<td class="text-center">4</td>
				<td class="text-center">95400.00</td>
				<td class="text-center">83500.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">39400.00</td>
				<td class="text-center">39400.00</td>
			</tr>
			<tr class="bg-success text-success">
				<td class="text-center">5</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">39400.00</td>
				<td class="text-center">39400.00</td>
			</tr>

			<tr class="bg-info text-info">
				<td class="text-center" rowspan="5">09.03.01</td>
				<td class="text-center" rowspan="5">Информатика и вычислительная техника</td>
				<td class="text-center">1</td>
				<td class="text-center">115200.00</td>
				<td class="text-center">83500.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">41400.00</td>
				<td class="text-center">41400.00</td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">2</td>
				<td class="text-center">107920.00</td>
				<td class="text-center">83500.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">39400.00</td>
				<td class="text-center">39400.00</td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">3</td>
				<td class="text-center">107920.00</td>
				<td class="text-center">83500.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">39400.00</td>
				<td class="text-center">39400.00</td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">4</td>
				<td class="text-center">95400.00</td>
				<td class="text-center">83500.00</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">39400.00</td>
				<td class="text-center">39400.00</td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">5</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center">41400.00</td>
				<td class="text-center">41400.00</td>
			</tr>
		</table>
	</div>


	<h5 class="text-center">
		Прейскурант
	</h5>

	<div class="row text-center">
		<h5 class="col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6 col-md-8 col-sm-10 col-xs-12">
			стоимости платных образовательных услуг на 2021/2022 учебный год студентов среднего профессионального
			образования
		</h5>
	</div>

	<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
		<div class="table table-responsive">
			<table class="table-responsive table-condensed table-bordered">
				<tr>
					<th rowspan="3">Код</th>
					<th rowspan="3">Направление</th>
					<th rowspan="3">Курс</th>
					<th colspan="2">Форма обучения</th>
				</tr>
				<tr>
					<th colspan="2">очная</th>
				</tr>
				<tr>
					<th>Нормативная стоимость</th>
					<th>Оплата студентов</th>
				</tr>

				<tr class="bg-success text-success">
					<td class="text-center">08.01.07</td>
					<td>Мастер общестроительных работ</td>
					<td class="text-center">1</td>
					<td class="text-center">70730.00</td>
					<td class="text-center">47500.00</td>
				</tr>

				<tr class="bg-info text-info">
					<td class="text-center">08.02.11</td>
					<td>Управление, эксплуатация и обслуживание многоквартирного дома</td>
					<td class="text-center">1</td>
					<td class="text-center">72825.00</td>
					<td class="text-center">46000.00</td>
				</tr>

				<tr class="bg-success text-success">
					<td class="text-center">08.03.01</td>
					<td>Обеспечение информационной безопасности автоматизированных систем</td>
					<td class="text-center">1</td>
					<td class="text-center">72825.00</td>
					<td class="text-center">48000.00</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row"></div>

	<p>
		<strong>Дополнительные образовательные услуги:</strong>
	</p>

	<ul style="list-style-type: disc">
		<li>
			<?= Html::anchor('/retraining', 'Профессиональная переподготовка') ?>;
		</li>
		<li>
			<?= Html::anchor('/kpksro', 'КПК для СРО, службы надзора') ?>;
		</li>
		<li>
			<?= Html::anchor('/kpkutilities', 'КПК для руководителей ЖКХ') ?>;
		</li>
		<li>
			<?= Html::anchor('/kpkspecialists', 'КПК для специалистов') ?>;
		</li>
		<li>
			<?= Html::anchor('/safetyhealth', 'Охрана труда и техника безопасности') ?>;
		</li>
		<li>
			<?= Html::anchor('/validation', 'Аттестация руководителей и специалистов') ?>;
		</li>
	</ul>
</div>
