<style>
	.td-top > tbody > tr > td {
		vertical-align: top;
	}
</style>

<div class="education row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<h5 class="text-center">
		Информация о реализуемых образовательных программах с указанием уровня общего или профессионального образования, формы обучения, нормативного срока
		обучения, кода и наименования профессии, специальности, направления подготовки, учебных предметов, дисциплин (модулей), практики
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="eduAccred">
			<tr>
				<th rowspan="2" style="width: 7%">Код специальности, направления подготовки</th>
				<th rowspan="2" style="width: 25%">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2" style="width: 18%">Уровень образования</th>
				<th colspan="3" style="width: 30%">Нормативный срок обучения</th>
				<th rowspan="2" style="width: 10%">
					Учебные предметы, дисциплины (модули), практики, предусмотренные соответствующей образовательной программой
				</th>
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
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_08.03.01.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_09.03.01.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_38.03.01.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">38.03.02</td>
				<td>Менеджмент</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">5 лет</td>
				<td class="text-center"></td>
			</tr>
			<tr>
				<td class="text-center">08.01.27</td>
				<td>Мастер общестроительных работ</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 11 классов 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_08.01.27.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">08.02.11</td>
				<td>Управление, эксплуатация и обслуживание многоквартирного дома</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 11 классов 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center"></td>
			</tr>
			<tr>
				<td class="text-center">08.02.14</td>
				<td>Эксплуатация и обслуживание многоквартирного дома</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 2 года 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_08.02.14.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">10.02.05</td>
				<td>Обеспечение информационной безопасности автоматизированных систем</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 3 года 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_10.02.05.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">38.02.01</td>
				<td>Экономика и бухгалтерский учет (по отраслям)</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 2 года 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_38.02.01.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">07.02.01</td>
				<td>Архитектура</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 2 года 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_07.02.01.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">46.01.03</td>
				<td>Делопроизводитель</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 11 классов 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_46.01.03-1.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">54.02.01</td>
				<td>Дизайн (по отраслям)</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 3 года 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predm_54.02.01.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">09.02.07</td>
				<td>Информационные системы и программирование</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 3 года 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_09.02.07.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			<tr>
				<td class="text-center">08.02.08</td>
				<td>Монтаж и эксплуатация оборудования и систем газоснабжения</td>
				<td class="text-center">Среднее профессиональное образование</td>
				<td class="text-center">На базе 9 классов 3 года 10 месяцев</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'predmeti_08.02.08.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center" itemprop="eduOp">
		Описание образовательных программ с приложением образовательной программы, учебного плана, аннотации к рабочим программам дисциплин, практик,
		календарного учебного графика, методических и иных документах (в форме электронных документов)
	</h4>

	<h5 class="text-primary text-center" itemprop="eduOp">
		Высшее образование - бакалавриат
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="opMain">
			<tr>
				<th>Код специальности, направления подготовки</th>
				<th>Наименование профессии, специальности, направления подготовки</th>
				<th>Образовательная программа, направленность, профиль, шифр и наименование научной специальности</th>
				<th itemprop="educationPlan">Реализуемые формы обучения</th>
				<th itemprop="educationPlan">Учебный план</th>
				<th>Описание образовательной программы</th>
				<th>Рабочие программы</th>
				<th itemprop="educationShedule">Календарный учебный график</th>
				<th itemprop="methodology">
					Учебные материалы, разработанные для обеспечения образовательного процесса
				</th>
				<th>Рабочие программы практик</th>
			</tr>

			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td>Промышленное и гражданское строительство (2021-2024)</td>
				<td class="text-center">Очная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.03.01_o21-24.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 26.05.2021 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="3" class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_08.03.01_o21-23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td>
					<?= Html::anchor(
						$dir_docs_education . 'rp_08.03.01_o21-23.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan=10 class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_vo.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 07.10.2024 14:34
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
						$dir_docs_education . 'um_08.03.01_o21-23.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'prac_08.03.01_o21-23.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 10:11
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td>Промышленное и гражданское строительство (2020)</td>
				<td class="text-center">Заочная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.03.01_z20.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 26.05.2021 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="2">
					<?= Html::anchor(
						$dir_docs_education . 'rp_08.03.01_z19-20.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Должность: первый заместитель директора
ФИО: Курбатов Владимир Леонидович
Дата, время: 01.09.2023 15:05
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="2" class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_08.01.01_z19.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="2" class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'prac_08.03.01_z19-20.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 11:11
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td>Промышленное и гражданское строительство (2021-2024)</td>
				<td class="text-center">Заочная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.03.01_z21-24.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 26.05.2021 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td>Промышленное и гражданское строительство (2021-2024)</td>
				<td class="text-center">Очно-заочная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.03.01_oz21.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 26.05.2021 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_08.03.01_oz21-23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 15:05
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
						$dir_docs_education . 'rp_08.03.01_oz21-23.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'prac_08.03.01_oz21-23.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 11:11
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника</td>
				<td>Вычислительные машины, комплексы, системы и сети (2021-2024)</td>
				<td class="text-center">Очная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_09.03.01_o23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_09.03.01_o23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td>
					<?= Html::anchor(
						$dir_docs_education . 'rp_09.03.01_o23.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 15:05
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
						$dir_docs_education . 'um_09.03.01_o23.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_09.03.01_o23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
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
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника</td>
				<td>Вычислительные машины, комплексы, системы и сети (2020-2024)</td>
				<td class="text-center">Заочная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_09.03.01_z19-23.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_09.03.01_z19-23.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td>
					<?= Html::anchor(
						$dir_docs_education . 'rp_09.03.01_z19-23.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
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
						$dir_docs_education . 'um_09.03.01_z19-23.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_09.03.01_o19-23.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td>Экономика предприятий и организаций (2021-2024)</td>
				<td class="text-center">Очная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_38.03.01_o21-23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
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
						$dir_docs_education . 'hop_38.03.01_o21-23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td>
					<?= Html::anchor(
						$dir_docs_education . 'rp_38.03.01_o21-23.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2023 15:05
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
						$dir_docs_education . 'um_38.03.01_o21-23.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_38.03.01_o21-23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
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
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td>Экономика предприятий и организаций (2021-2024)</td>
				<td class="text-center">Заочная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_38.03.01_z21-23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2021 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_38.03.01_z21-23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="2">
					<?= Html::anchor(
						$dir_docs_education . 'rp_38.03.01_z21-23.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
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
						$dir_docs_education . 'um_38.03.01_z21-23.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="2" class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_38.03.01_z21-23.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 09.10.2023 14:34
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
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td>Экономика предприятий и организаций (2021-2024)</td>
				<td class="text-center">Очно-заочная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_38.03.01_oz21-24.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 26.05.2021 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_38.03.01_oz21-24.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 10.09.2021 14:34
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
						$dir_docs_education . 'um_38.03.01_oz21-24.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td>Финансовая разведка (2024)</td>
				<td class="text-center">Очная</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_38.03.01_fro.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2024 10:18
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_38.03.01_fro.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 07.10.2024 12:11
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
						$dir_docs_education . 'um_38.03.01_fro.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica_38.03.01_fro.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2024 15:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
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
				<th style="width: 10%" itemprop="educationAnnotation">
					Рабочие программы
				</th>
				<th style="width: 10%" itemprop="educationShedule">Календарный учебный график</th>
				<th style="width: 10%" itemprop="methodology">
					Учебные материалы, разработанные для обеспечения образовательного процесса
				</th>
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
				<td class="text-center"></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_10.02.05.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.05.2024 09:45
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
Дата, время: 30.05.2024 09:47
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
				<td class="text-center">08.02.11</td>
				<td>Управление, эксплуатация и обслуживание многоквартирного дома</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.02.11.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:25
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>        </td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_08.02.11.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 19.05.2023 10:29
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
						$dir_docs_education . 'graf_08.02.11.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.05.2024 09:50
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center"></td>
				<td class="text-center"></td>
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
Дата, время: 30.05.2024 09:39
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
						[
							'class' => 'btn btn-sm btn-info',
							'style' => 'margin-bottom: .25em',
							'target' => '_blank'
						]
					) ?>
					<br>
					<?= Html::anchor(
						$dir_docs_education . 'up_07.02.01_2024.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.05.2024 14:04
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
Дата, время: 30.05.2024 09:51
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
Дата, время: 30.05.2024 14:06
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
Дата, время: 01.03.2023 15:05
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
						$dir_docs_education . 'rp_46.01.03.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 02.02.2023 10:05
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>

				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_46.01.03.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.05.2024 16:43
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
						$dir_docs_education . 'practica_46.01.03.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 02.02.2023 15:05
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
						$dir_docs_education . 'gia_46.01.03.pdf',
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
Дата, время: 30.05.2024 14:05
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
Дата, время: 30.05.2024 16:59
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
			<tr>
				<td class="text-center">54.02.01</td>
				<td>Дизайн (по отраслям)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_54.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.09.2024 14:05
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
						$dir_docs_education . 'hop_54.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.09.2024 10:59
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
						$dir_docs_education . 'rp_54.02.01.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.09.2024 11:22
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
						$dir_docs_education . 'kug_54.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.09.2024 16:59
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
						$dir_docs_education . 'practica_54.02.01.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.09.2024 08:59
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
						$dir_docs_education . 'gia_54.02.01.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.09.2024 14:09
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
				<td class="text-center">09.02.07</td>
				<td>Информационные системы и программирование</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_09.02.07.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 04.04.2025 14:05
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
						$dir_docs_education . 'hop_09.02.07.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 04.04.2025 10:59
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
						$dir_docs_education . 'rp_09.02.07.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 04.04.2025 11:22
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
						$dir_docs_education . 'kug_09.02.07.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 04.04.2025 16:59
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
						$dir_docs_education . 'pp_09.02.07.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 04.04.2025 08:59
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
						$dir_docs_education . 'gia_09.02.07.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 04.04.2025 14:09
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
				<td class="text-center">08.02.08</td>
				<td>Монтаж и эксплуатация оборудования и систем газоснабжения</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_08.02.08.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 23.04.2025 14:05
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
						$dir_docs_education . 'hop_08.02.08.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 23.04.2025 10:59
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
						$dir_docs_education . 'rp_08.02.08.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 23.04.2025 11:22
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
						$dir_docs_education . 'kug_08.02.08.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 23.04.2025 16:59
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
						$dir_docs_education . 'pp_08.02.08.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 23.04.2025 08:59
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
						$dir_docs_education . 'gia_08.02.08.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 23.04.2025 14:09
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
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
Дата, время: 07.10.2024 12:29
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
			]
		) ?>
		<?= HTML::anchor($dir_docs . 'chisl.pdf',
			'Информация о численности обучающихся за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов Российской Федерации, местных бюджетов, по договорам об образовании за счет средств физических и (или) юридических лиц',
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
Дата, время: 30.05.2024 13:54
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
			]
		) ?>
		<?= HTML::anchor($dir_docs . 'inf_language.pdf',
			'Информация о языках образования',
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
Дата, время: 07.10.2024 12:30
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
			]
		) ?>
		<?= HTML::anchor($dir_docs . 'priem.pdf',
			'Информация о результатах приема по каждой профессии, специальности среднего профессионального образования (при наличии вступительных испытаний), каждому направлению подготовки или специальности высшего образования с различными условиями приема (на места, финансируемые за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов Российской Федерации, местных бюджетов, по договорам об образовании за счет средств физических и (или) юридических лиц)',
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
Дата, время: 07.10.2024 12:29
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
		Информация о направлениях и результатах научной (научно-исследовательской) деятельности и
		научно-исследовательской базе для ее осуществления
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
					Исследование и разработка объемно-планировочных и конструктивных решений зданий различного назначения трансформируемых в период строительства
					и эксплуатации.<br>
					Ресуросбережение и энергоэффективность в строительстве и жилищно-коммунальном хозяйстве.
				</td>
				<td>
					Библиотечно-информационный центр (библиотека).<br>
					Испытательная лаборатория строительных материалов.<br>
					Специализированная установка для лабораторных работ по гидравлике.<br>
					Аудитории коллективного пользования информационного и коммуникационного оборудования (компьютерные классы).<br>
					Аудитории с видеопроекторами/мультимедийным оборудованием.<br>
					Лекционный интерактивный зал, приспособленный для проведения международных научных конференций, семинаров, заседаний.
				</td>
				<td rowspan="3">
					Количество НПР, принимающих участие в научной (научно-исследовательской) деятельности: 20 чел.<br>
					Количество изданных монографий научно-педагогического персонала образовательного учреждения по всем научным направлениям за последний год: 1
					шт.<br>
					Количество изданных и принятых к публикации статей в изданиях, рекомендованных ВАК для публикации научных работ за последний год: 6 шт.<br>
					Количество изданных и принятых к публикации статей в изданиях, индексируемых в базах Web of Science и Scopus за последний год: 2 шт.<br>
					Количество изданных и принятых к публикации статей в изданиях, включенных в Российский индекс научного цитирования (РИНЦ) за последний год: 69
					шт.
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td class="text-center">09.03.01</td>
				<td class="text-center">Информатика и вычислительная техника</td>
				<td>
					Разработка программного обеспечения интеллектуальных систем в технике, технологиях и информационной безопасности
				</td>
				<td>
					Библиотечно-информационный центр (библиотека).<br>
					Аудитории коллективного пользования информационного и коммуникационного оборудования (компьютерные классы).<br>
					Аудитории с видеопроекторами/мультимедийным оборудованием.<br>
					Лекционный интерактивный зал, приспособленный для проведения международных научных конференций, семинаров, заседаний.
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td class="text-center">38.03.01</td>
				<td class="text-center">Экономика</td>
				<td>
					Развитие учетно-контрольной и аналитической подсистем предприятий реального сектора экономики РФ в целях обеспечения их устойчивого
					функционирования.<br>
					Проблемы развития региона.<br>
					Актуальные проблемы и направления развития российской экономики и финансов.
				</td>
				<td>
					Библиотечно-информационный центр (библиотека).<br>
					Аудитории коллективного пользования информационного и коммуникационного оборудования (компьютерные классы).<br>
					Аудитории с видеопроекторами/мультимедийным оборудованием.<br>
					Лекционный интерактивный зал, приспособленный для проведения международных научных конференций, семинаров, заседаний.
				</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center">
		Сведения о наличии специальных технических средств обучения коллективного и индивидуального пользования для инвалидов и лиц с ограниченными
		возможностями здоровья.
	</h5>

	<div style="margin-bottom: 1em">
		Специальные технические средства обучения коллективного и индивидуального пользования для инвалидов и лиц с ограниченными возможностями здоровья на
		данный момент не имеются.
	</div>

	<h5 class="text-center">
		Информация о трудоустройстве выпускников в виде численности трудоустроенных выпускников прошлого учебного года, освоивших основные профессиональные
		образовательные программы среднего профессионального и высшего образования
	</h5>

	<div class="table table-responsive">
		<table class="table-responsive table-bordered table-condensed" itemprop="graduateJob">
			<tr>
				<th>
					Код специальности/ направления подготовки
				</th>
				<th>
					Наименование профессии, специальности, направления подготовки, наименование группы научных специальностей
				</th>
				<th>
					Образовательная программа, направленность, профиль, шифр и наименование научной специальности
				</th>
				<th>
					Количество выпускников
				</th>
				<th>
					Количество трудоустроенных выпускников
				</th>
			</tr>
			<tr>
				<td class="text-center">08.01.07</td>
				<td class="text-center">Мастер общестроительных работ</td>
				<td class="text-center">Мастер общестроительных работ</td>
				<td class="text-center">8</td>
				<td class="text-center">6</td>
			</tr>
			<tr>
				<td class="text-center">08.03.01</td>
				<td class="text-center">Строительство</td>
				<td class="text-center">Промышленное и гражданское строительство</td>
				<td class="text-center">62</td>
				<td class="text-center">60</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01</td>
				<td class="text-center">Экономика</td>
				<td class="text-center">Экономика предприятий и организаций</td>
				<td class="text-center">9</td>
				<td class="text-center">9</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01</td>
				<td class="text-center">Экономика</td>
				<td class="text-center">Бухгалтерский учет, анализ и аудит</td>
				<td class="text-center">7</td>
				<td class="text-center">7</td>
			</tr>
			<tr>
				<td class="text-center">09.03.01</td>
				<td class="text-center">Информатика и вычислительная техника</td>
				<td class="text-center">Вычислительные машины, комплексы, системы и сети</td>
				<td class="text-center">12</td>
				<td class="text-center">12</td>
			</tr>
		</table>
	</div>

	<div class="col-xs-12" style="margin-bottom: 1em">
		<?= HTML::anchor(
			$dir_docs_education . 'sogl_cz_minv.pdf',
			"Соглашение о взаимодействии c Территориальным центром занятости населения первого уровня Александровского, Андроповского, Минераловодского и Новоселецкого муниципальных округов",
			[
				'target' => '_blank',
				'style' => 'color: #333; text-decoration: underline;'
			]
		) ?>
	</div>

	<div class="col-xs-12" style="margin-bottom: 1em">
		<?= HTML::anchor(
			$dir_docs_education . 'sogl_cz_stav.pdf',
			"Соглашение о взаимодействии с Государственным казенным учреждением службы занятости населения Ставропольского края 'Краевой кадровый центр' г.Ставрополь",
			[
				'target' => '_blank',
				'style' => 'color: #333; text-decoration: underline;'
			]
		) ?>
	</div>

	<div class="col-xs-12" style="margin-bottom: 1em">
		<?= HTML::anchor(
			$dir_docs_education . 'pol_ck.pdf',
			"Положение о центре карьеры",
			[
				'target' => '_blank',
				'style' => 'color: #333; text-decoration: underline;'
			]
		) ?>
	</div>
</div>

<script>
	$(document).ready(function () {
		/*$('table:even').addClass('bg-success').addClass('text-success');
		$('table:odd').addClass('bg-info').addClass('text-info');*/
		$('table').addClass('bg-info').addClass('text-info');
	});
</script>