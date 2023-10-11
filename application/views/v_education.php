<style>
	.td-top > tbody > tr > td {
		vertical-align: top;
	}
</style>

<div class="education row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<h5 class="text-center">
		Копии лицензий на осуществление образовательной деятельности (с приложениями)
	</h5>

	<p>
		<?= HTML::anchor($dir_docs . 'license.pdf',
			'Лицензия на право ведения образовательной деятельности;',
			[
				'style' => 'text-decoration: underline; color: #333 !important',
				'target' => '_blank'
			]
		) ?>
	</p>

	<h5 class="text-center">
		Информация о сроке действия государственной аккредитации образовательной программы, о языках, на которых
		осуществляется образование (обучение)
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="eduAccred">
			<tr>
				<th rowspan="2" style="width: 7%">Код специальности, направления подготовки</th>
				<th rowspan="2" style="width: 25%">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2" style="width: 18%">Уровень образования</th>
				<th colspan="3" style="width: 30%">Нормативный срок обучения</th>
				<th rowspan="2" style="width: 10%">
					Срок действия государственной аккредитации образовательной программы (при наличии государственной
					аккредитации на 20.02.2020г.)
				</th>
				<th rowspan="2" style="width: 10%">Язык, на котором осуществляется обучение</th>
			</tr>
			<tr>
				<th>Очная форма обучения</th>
				<th>Очно-заочная форма обучения</th>
				<th>Заочная форма обучения</th>
			</tr>
			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">5 лет</td>
				<td class="text-center" rowspan="8">
					до 25.02.2025г.
					<br>
					<?= Html::anchor(
						$dir_docs . 'accr+pril.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						[
							'class' => 'btn btn-sm btn-info',
							'style' => 'margin-top: .5em',
							'target' => '_blank'
						]
					) ?>
				</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">38.03.02</td>
				<td>Менеджмент</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">08.01.27</td>
				<td>Мастер общестроительных работ</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 11 классов 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">08.02.14</td>
				<td>Эксплуатация и обслуживание многоквартирного дома</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 2 года 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td rowspan="2" class="text-center">10.02.05</td>
				<td rowspan="2">Обеспечение информационной безопасности автоматизированных систем</td>
				<td rowspan="2" class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 3 года 10 месяцев</td>
				<td rowspan="2" class="text-center">-</td>
				<td rowspan="2" class="text-center">-</td>
				<td rowspan="2" class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">На базе 11 классов 2 года 10 месяцев</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center" itemprop="eduOp">
		Информация по образовательным программам
	</h4>

	<h5 class="text-primary text-center" itemprop="eduOp">
		Высшее образование - бакалавриат
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="opMain">
			<tr>
				<th style="width: 7%">Код специальности, направления подготовки</th>
				<th style="width: 30%">Наименование профессии, специальности, направления подготовки</th>
				<th style="width: 8%" itemprop="educationPlan">Учебный план</th>
				<th style="width: 10%">Описание образовательной программы</th>
				<th style="width: 10%" itemprop="educationAnnotation">Аннотация к образовательной программе /
					рабочие программы</th>
				<th style="width: 10%" itemprop="educationShedule">Календарный учебный график</th>
				<th style="width: 18%" itemprop="methodology">Учебные материалы, разработанные для обеспечения образовательного процесса</th>
				<th style="width: 7">Рабочие программы практик</th>
			</tr>
			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство (2016-2018)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_sz.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="6" class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_2022_2023.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 's_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство (2019-2021)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_s_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_t_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_s_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_s_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 's_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника (2016-2018)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_iz.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'i_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника (2019-2021)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_i_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_iz_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>

				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_i_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_i_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_i_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'i_practica_2019.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_ez.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_bz.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'e_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">38.03.02</td>
				<td>Менеджмент</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
		</table>
	</div>

	<h5 class="text-primary text-center" itemprop="eduOp">
		Среднее профессиональное образование
	</h5>

	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="opMain">
			<tr>
				<th style="width: 7%">Код специальности, направления подготовки</th>
				<th style="width: 23%">Наименование профессии, специальности, направления подготовки</th>
				<th style="width: 10%" itemprop="educationPlan">Учебный план</th>
				<th style="width: 10%">Описание образовательной программы</th>
				<th style="width: 10%" itemprop="educationAnnotation">Аннотация к образовательной программе /
					рабочие программы</th>
				<th style="width: 10%" itemprop="educationShedule">Календарный учебный график</th>
				<th style="width: 10%" itemprop="methodology">Учебные материалы, разработанные для обеспечения образовательного процесса</th>
				<th style="width: 10%">Рабочие программы практик</th>
				<th style="width: 10%">Рабочие программы ГИА</th>
			</tr>

			<tr>
				<td class="text-center">10.02.05</td>
				<td>Обеспечение информационной безопасности автоматизированных систем</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_10.02.05.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_10.02.05.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_10.02.05.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_10.02.05.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_10.02.05.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_10.02.05.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center"></td>
			</tr>
			<tr>
				<td class="text-center">08.01.27</td>
				<td>Мастер общестроительных работ</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.01.27.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_08.01.27.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'op_08.01.27.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_08.01.27.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_08.01.27.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_08.01.27.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center"></td>
			</tr>
			<tr>
				<td class="text-center">08.02.14</td>
				<td>Эксплуатация и обслуживание многоквартирного дома</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.02.14.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_08.02.14.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'op_08.02.14.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_08.02.14.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_08.02.14.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>

				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_08.02.14.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center"></td>
			</tr>
			<tr>
				<td class="text-center">38.02.01</td>
				<td>Экономика и бухгалтерский учет (по отраслям)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_38.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 11:27
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_38.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 11:27
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_38.02.01.pdf.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						[
							'class' => 'btn btn-sm btn-info',
							'style' => 'margin-bottom: .25em',
							'target' => '_blank'
						]
					) ?>
					<br>
					<?= Html::anchor(
						$dir_docs_education . 'op_38.02.01.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_38.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 11:27
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center"></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_38.02.01.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 11:27
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'gia_38.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">07.02.01</td>
				<td>Архитектура</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_07.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'

							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_07.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_07.02.01.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						[
							'class' => 'btn btn-sm btn-info',
							'style' => 'margin-bottom: .25em',
							'target' => '_blank'
						]
					) ?>
					<br>
					<?= Html::anchor(
						$dir_docs_education . 'op_07.02.01.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_07.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_07.02.01.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_07.02.01.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'gia_07.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">46.01.03</td>
				<td>Делопроизводитель</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_46.01.03.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_46.01.03.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_46.01.03.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_46.01.03.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_46.01.03.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_46.01.03.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center"></td>
			</tr>
			<tr>
				<td class="text-center">08.02.01</td>
				<td>Строительство и эксплуатация зданий и сооружений</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 13:01
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_08.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 10:59
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_08.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 10:59
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center"></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_08.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 08:59
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center"></td>
			</tr>
		</table>
	</div>

	<h5 class="text-center">
		Информация по адаптированным образовательным программам
	</h5>

	<p style="margin-bottom: 1.5em">
		Адаптированные образовательные программы на данный момент не реализуются.
	</p>


	<h5 class="text-center" itemprop="internationalDog">
		Заключенные и планируемые к заключению договоры с иностранными и (или) международными организациями по
		вопросам образования и науки
	</h5>
	<p style="margin-bottom: 1.5em">
		На данный момент не заключались договоры с иностранными и (или) международными организациями по вопросам
		образования и науки.
	</p>

	<h5 class="text-center" style="margin-bottom: 1em">
		<?= HTML::image(
			$dir_img . 'signature.png',
			[
				'style' => 'max-width: 1em',
				'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 10:48
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
			]
		) ?>
		<?= HTML::anchor($dir_docs . 'priem.pdf',
			'Информация о результатах приема по каждой профессии, специальности среднего профессионального образования
		(при наличии вступительных испытаний), каждому направлению подготовки или специальности высшего образования
		с различными условиями приема (на места, финансируемые за счет бюджетных ассигнований федерального бюджета,
		бюджетов субъектов Российской Федерации, местных бюджетов, по договорам об образовании за счет средств
		физических и (или) юридических лиц)',
			[
				'style' => 'text-decoration: underline !important; color: #333 !important',
				'target' => '_blank'
			]
		) ?>
	</h5>

	<h5 class="text-center" style="margin-bottom: 1em">
		<?= HTML::image(
			$dir_img . 'signature.png',
			[
				'style' => 'max-width: 1em',
				'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:31
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
			]
		) ?>
		<?= HTML::anchor($dir_docs . 'chisl.pdf',
			'Информация о численности обучающихся за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов
		Российской Федерации, местных бюджетов, по договорам об образовании за счет средств физических и (или)
		юридических лиц',
			[
				'style' => 'text-decoration: underline !important; color: #333 !important',
				'target' => '_blank'
			]
		) ?>
	</h5>

	<h5 class="text-center" style="margin-bottom: 1em">
		<?= HTML::image(
			$dir_img . 'signature.png',
			[
				'style' => 'max-width: 1em',
				'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 10:47
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
			]
		) ?>
		<?= HTML::anchor($dir_docs . 'perevod_vost_otch.pdf',
			'Информация о результатах перевода, восстановления и отчисления',
			[
				'style' => 'text-decoration: underline !important; color: #333 !important',
				'target' => '_blank'
			]
		) ?>
	</h5>

	<h5 class="text-center">
		Информация по образовательным программам (направления и результаты научной (научно-исследовательской)
		деятельности)
	</h5>
	<div class="table table-responsive">
		<table class="td-top table-responsive table-condensed table-bordered">
			<tr>
				<th>№ п\п</th>
				<th>Код специальности, направления подготовки</th>
				<th>Наименование профессии, специальности, направления подготовки</th>
				<th>
					Перечень научных направлений, в рамках которых ведется научная (научно-исследовательская) деятельность
				</th>
				<th>
					Сведения о научно-исследовательской базе для осуществления научной (научно-исследовательской) деятельности
				</th>
				<th>
					Результаты научной (научно-исследовательской) деятельности
				</th>
			</tr>
			<tr>
				<td>1</td>
				<td class="text-center">08.03.01</td>
				<td class="text-center">Строительство</td>
				<td>
					Исследование и разработка объемно-планировочных и конструктивных решений зданий различного
					назначения трансформируемых в период строительства и эксплуатации.<br>
					Ресуросбережение и энергоэффективность в строительстве и жилищно-коммунальном хозяйстве.
				</td>
				<td>
					Библиотечно-информационный центр (библиотека).<br>
					Испытательная лаборатория строительных материалов.<br>
					Специализированная установка для лабораторных работ по гидравлике.<br>
					Аудитории коллективного пользования информационного и коммуникационного оборудования (компьютерные
					классы).<br>
					Аудитории с видеопроекторами/мультимедийным оборудованием.<br>
					Лекционный интерактивный зал, приспособленный для проведения международных научных конференций,
					семинаров, заседаний.
				</td>
				<td rowspan="3">
					Количество НПР, принимающих участие в научной (научно-исследовательской) деятельности: 20 чел.<br>
					Количество изданных монографий научно-педагогического персонала образовательного учреждения по всем
					научным направлениям за последний год: 1 шт.<br>
					Количество изданных и принятых к публикации статей в изданиях, рекомендованных ВАК для публикации
					научных работ за последний год: 6 шт.<br>
					Количество изданных и принятых к публикации статей в изданиях, индексируемых в базах Web of Science и
					Scopus за последний год: 2 шт.<br>
					Количество изданных и принятых к публикации статей в изданиях, включенных в Российский индекс научного
					цитирования (РИНЦ) за последний год: 69 шт.
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td class="text-center">09.03.01</td>
				<td class="text-center">Информатика и вычислительная техника</td>
				<td>
					Разработка программного обеспечения интеллектуальных систем в технике, технологиях и информационной
					безопасности
				</td>
				<td>
					Библиотечно-информационный центр (библиотека).<br>
					Аудитории коллективного пользования информационного и коммуникационного оборудования (компьютерные
					классы).<br>
					Аудитории с видеопроекторами/мультимедийным оборудованием.<br>
					Лекционный интерактивный зал, приспособленный для проведения международных научных конференций,
					семинаров, заседаний.
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td class="text-center">38.03.01</td>
				<td class="text-center">Экономика</td>
				<td>
					Развитие учетно-контрольной и аналитической подсистем предприятий реального сектора экономики РФ в
					целях обеспечения их устойчивого функционирования.<br>
					Проблемы развития региона.<br>
					Актуальные проблемы и направления развития российской экономики и финансов.
				</td>
				<td>
					Библиотечно-информационный центр (библиотека).<br>
					Аудитории коллективного пользования информационного и коммуникационного оборудования (компьютерные
					классы).<br>
					Аудитории с видеопроекторами/мультимедийным оборудованием.<br>
					Лекционный интерактивный зал, приспособленный для проведения международных научных конференций,
					семинаров, заседаний.

				</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center">
		Сведения о наличии специальных технических средств обучения коллективного и индивидуального пользования для
		инвалидов и лиц с ограниченными возможностями здоровья.
	</h5>

	<div style="margin-bottom: 5px">
		Специальные технические средства обучения коллективного и индивидуального пользования для инвалидов и лиц с
		ограниченными возможностями здоровья на данный момент не имеются.
	</div>

	<h5 class="text-center">Локальные нормативные акты общего характера:</h5>

	<ul style="list-style-type: disc">
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2022 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs . 'pol_per_otch.pdf',
				'Положение о порядке обучения, перевода, отчисления и предоставления академических отпусков обучающимся в БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2022 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs . 'pol_perevod_vus.pdf',
				'Положение о порядке перевода обучающихся в другую организацию, осуществляющую образовательную деятельность по образовательным программам высшего образования',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_predstav_akadem.pdf',
				'Положение о порядке и основаниях предоставления академического отпуска и иных отпусков обучающимся в аспирантуре',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_inv.pdf',
				'Положение об обучении студентов с ограниченными возможностями здоровья и студентов-инвалидов',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_kachestva_obr.pdf',
				'Положение об организации и проведении внутренней оценки качества образования',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_plat_uslug.pdf',
				'Положение об оказании платных образовательных услуг в Белгородском государственном технологическом университете им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_st.pdf',
				'Положение о стипендиальном обеспечении и других формах материальной поддержки студентов, аспирантов, слушателей подготовительного факультета, обучающихся по очной форме обучения за счет бюджетных ассигнований федерального бюджета',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'matpom.pdf',
				'Положение об оказании материальной поддержки обучающимся по программам высшего образования - программам бакалавриата, программам специалитета, программам магистратуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'st_kom.pdf',
				'Положение о стипендиальных комиссиях университета',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'att_komiss.pdf',
				'Положение об аттестационных комиссиях',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_zach_kn.pdf',
				'Положение о порядке выдачи и ведения зачетной книжки, студенческого билета обучающегося',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_metod_sovet.pdf',
				'Положение о научно-методическом совете Белгородского государственного технологического университета им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_metod_komiss.pdf',
				'Положение об учебно-методической комиссии института',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pov_kvalif.pdf',
				'Положение о повышении квалификации профессорско-преподавательского состава Белгородского государственного технологического университета им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'zam_dolg.pdf',
				'О порядке замещения должностей педагогических работников, относящихся к профессорско-преподавательскому составу',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_eos.pdf',
				'Положение о реализации процесса "Об электронно-образовательной среде СКФ БГТУ им.В.Г.Шухова"',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 07.06.2021 14:35
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs . 'pol_org_spo.pdf',
				'Положение об организации и осуществлении образовательной деятельности по образовательным программам среднего профессионального образования',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 07.06.2021 14:34
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs . 'pol_rp_spo.pdf',
				'Положение по разработке рабочих программ учебных дисциплин по СПО',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 07.06.2021 14:41
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs . 'pol_spo_ovz.pdf',
				'Положение «Об организации образовательного процесса при реализации образовательной программы среднего профессионального образования для инвалидов и лиц с ограниченными возможностями здоровья в СКФ БГТУ им.В.Г.Шухова»',
				['target' => '_blank']
			) ?>;
		</li>
	</ul>

	<h5 class="text-center">
		Локальные нормативные акты по организации и осуществлению образовательной деятельности высшего образования
	</h5>

	<ul style="list-style-type: disc">
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2022 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs . 'pol_od.pdf',
				'Положение организации и осуществлении образовательной деятельности по образовательным программам высшего образования – программам бакалавриата, программам специалитета, программам магистратуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_obraz_prog.pdf',
				'Положение о порядке разработки и утверждения образовательных программ (программ бакалавриата, специалитета и магистратуры)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_foc.pdf',
				'Положение о порядке формирования фонда оценочных средств для проведения текущей, промежуточной аттестации по дисциплинам, практикам и государственной итоговой аттестации обучающихся',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_elect_disc.pdf',
				'Положение о порядке организации освоения элективных, факультативных и специализированных адаптационных дисциплин',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'raz_form_obuch.pdf',
				'Положение об организации образовательной деятельности по образовательным программам при сочетании различных форм обучения, при использовании сетевой формы их реализации',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2022 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs . 'pol_tek_kont.pdf',
				'Положение о порядке организации и проведения текущего контроля успеваемости и промежуточной аттестации',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_sam_rab.pdf',
				'Положение об организации самостоятельной работы студентов',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_kurs_rab.pdf',
				'Положение о выполнении и защите курсовых работ (проектов)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_recenz_vkr.pdf',
				'Положение о порядке рецензирования выпускных квалификационных работ',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_vkr.pdf',
				'Положение о выпускной квалификационной работе',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'proverka_rabot.pdf',
				'Положение о проведении проверки электронных версий выпускных квалификационных работ на заимствование',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'proved_gos_ekz.pdf',
				'Положение о порядке проведения государственного экзамена и защиты выпускной квалификационной работы с применением электронного обучения, дистанционных образовательных технологий',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_ind_graf.pdf',
				'Положение об индивидуальном графике и индивидуальном учебном плане обучения студентов',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'practica.pdf',
				'Положение о практике обучающихся, осваивающих основные профессиональные образовательные программы высшего образования',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'prov_praktiki.pdf',
				'Положение о проведении научно-исследовательской практики',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_min_obiuem.pdf',
				'Положение об установлении минимального объема контактной работы обучающихся с преподавателем, а также максимального объема занятий лекционного и семинарского типов при организации образовательного процесса',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'por_elekt_obuch.pdf',
				'Положение о порядке применения электронного обучения, дистанционных образовательных технологий при реализации образовательных программ',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_fk.pdf',
				'Положение о порядке реализации дисциплин по физической культуре и спорту для отдельных категорий обучающихся',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_gos_it_att.pdf',
				'Положение о порядке проведения государственной итоговой аттестации по образовательным программам высшего образования – программам бакалавриата, программам специалитета и программам магистратуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_it_att.pdf',
				'Положение о порядке проведения итоговой аттестации по образовательным программам высшего образования – программам бакалавриата, программам специалитета и программам магистратуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_samoobsled.pdf',
				'Положение о самообследовании основных образовательных программ',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'por_ind_uch.pdf',
				'Положение о порядке индивидуального учета результатов освоения обучающимися образовательных программ, хранения в архивах информации об этих результатах на бумажных и (или) электронных носителях',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_extern.pdf',
				'Положение о порядке зачисления, прохождения промежуточной и государственной итоговой аттестации лиц в качестве экстернов',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'ball_reiting.pdf',
				'Положение о балльно-рейтинговой системе контроля и оценки результатов учебной деятельности студентов',
				['target' => '_blank']
			) ?>;
		</li>
	</ul>

	<h5 class="text-center">
		Локальные нормативные акты по организации и осуществлению образовательной деятельности среднего
		профессионального образования
	</h5>

	<ul style="list-style-type: disc">
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_ip_spo.pdf',
				'Положение об индивидуальном учебном плане обучающихся',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_uchet_spo.pdf',
				'Положение о порядке осуществления индивидуального учета результатов освоения обучающимися образовательных программ и хранения в архивах информации об этих результатах на бумажных и (или) электронных носителях',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_op_spo.pdf',
				'Положение о формировании основной профессиональной образовательной программы среднего профессионального образования (подготовка специалистов среднего звена)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_eos_spo.pdf',
				'Положение о электронной информационно-образовательной среде СКФ БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_plan_spo.pdf',
				'Положение о планировании и учете учебной нагрузки педагогических работников, реализующих образовательные программы среднего профессионального образования',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_iatt_spo.pdf',
				'Положение о проведении итоговой аттестации по образовательным программам СПО, не имеющим государственной аккредитации',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_srab_spo.pdf',
				'Положение об организации и планировании самостоятельной работы обучающихся',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_kurrab_spo.pdf',
				'Положение о порядке организации выполнения курсовой работы и требованиям к её содержанию и оформлению',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_vr_spo.pdf',
				'Положение о концепции воспитательной работы',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.01.2023 14:31
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs_education . 'pol_spo_att.pdf',
				'Положение о конкурсе аттестатов при поступлении на отделение СПО по специальности 10.02.05 «Обеспечение информационной безопасности автоматизированных систем»',
				['target' => '_blank']
			) ?>;
		</li>
	</ul>
</div>

<script>
	$(document).ready(function () {
		/*$('table:even').addClass('bg-success').addClass('text-success');
		$('table:odd').addClass('bg-info').addClass('text-info');*/
		$('table').addClass('bg-info').addClass('text-info');
	});
</script>