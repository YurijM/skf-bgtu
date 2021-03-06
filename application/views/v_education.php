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

	<ul type="disc">
		<li>
			<?= HTML::anchor($dir_docs . 'license.pdf',
				'Лицензия на право ведения образовательной деятельности;',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor('http://isga.obrnadzor.gov.ru/rlic/details/36F0871C8A452661FED9518F371207C4/ ',
				'Полная версия лицензии на официальном сайте Рособрнадзора г.Москва',
				['target' => '_blank']
			) ?>
		</li>
	</ul>

	<h5 class="text-center">
		Информация о сроке действия государственной аккредитации образовательной программы, о языках, на которых
		осуществляется образование (обучение)
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="eduAccred">
			<tr>
				<th rowspan="2" width="10%">Код специальности, направления подготовки</th>
				<th rowspan="2" width="30%">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2" width="20%">Уровень образования</th>
				<th colspan="2">Нормативный срок обучения</th>
				<th rowspan="2" width="20%">
					Срок действия государственной аккредитации образовательной программы (при наличии государственной
					аккредитации)
				</th>
				<th rowspan="2">Язык, на котором осуществляется обучение</th>
			</tr>
			<tr>
				<th width="10%">Очная форма обучения</th>
				<th width="10%">Заочная форма обучения</th>
			</tr>
			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">до 25.02.2025г.</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">до 25.02.2025г.</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">до 25.02.2025г.</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">38.03.02</td>
				<td>Менеджмент</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">до 25.02.2025г.</td>
				<td class="text-center">русский</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center" itemprop="eduOp">
		Информация по образовательным программам
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="opMain">
			<tr>
				<th width="7%">Код специальности, направления подготовки</th>
				<th width="30%">Наименование профессии, специальности, направления подготовки</th>
				<th width="8%" itemprop="educationPlan">Учебный план</th>
				<th width="10%">Характеристика образовательной программы</th>
				<th width="10%" itemprop="educationAnnotation">Аннотация к образовательной программе</th>
				<th width="10%" itemprop="educationShedule">Календарный учебный график</th>
				<th width="18%" itemprop="methodology">Учебные материалы, разработанные для обеспечения образовательного
					процесса
				</th>
				<th width="7">Практики</th>
			</tr>
			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство (2016-2018)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_s.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_sz.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_s.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_s.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="6" class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_2020_2021.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]) . 'календарный учебный график',
						['target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_s.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 's_practica.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство (2019)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_s_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_t_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_s_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_s_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_s.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 's_practica.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
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
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_iz.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_i.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_i.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_i.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'i_practica.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника (2019)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_i_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_i_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_i_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_i_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'i_practica_2019.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>

			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика (2015-2020)</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_e.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_ez.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_bz.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_e.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_e.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_e.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'e_practica.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
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
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_m.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_m.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">10.02.05</td>
				<td>Обеспечение информационной безопасности автоматизированных систем</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_oib.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_oib.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 16:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td class="text-center">08.01.07</td>
				<td>Мастер общестроительных работ</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_mor.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_mor.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 16:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td class="text-center">08.02.11</td>
				<td>Управление, эксплуатация и обслуживание многоквартирного дома</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_ueo.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_ueo.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:05
ФИО: Глаголев Сергей Николаевич
Должность: Ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'graf_ueo.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 16:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'prac_ueo.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 16.05.2021 15:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
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

	<h5 class="text-center">
		Информация о численности обучающихся за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов
		Российской Федерации, местных бюджетов, по договорам об образовании за счет средств физических и (или)
		юридических лиц
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered">
			<tr>
				<th rowspan="2">Код специальности, направления подготовки</th>
				<th rowspan="2">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2">Уровень образования</th>
				<th rowspan="2">Форма обучения</th>
				<th colspan="4">Численность обучающихся за счет (количество человек)</th>
				<th rowspan="2">Численность обучающихся, являющихся иностранными гражданами</th>
			</tr>
			<tr>
				<th>бюджетных ассигнований федерального бюджета</th>
				<th>бюджетов субъектов Российской Федерации</th>
				<th>местных бюджетов</th>
				<th>средств физических и (или) юридических лиц</th>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">08.03.01</td>
				<td rowspan="2">Строительство</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">Очная</td>
				<td class="text-center">19</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">116</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">Заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">109</td>
				<td class="text-center">1</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">38.03.01</td>
				<td rowspan="2">Экономика</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">Очная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">46</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">Заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">62</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">09.03.01</td>
				<td rowspan="2">Информатика и вычислительная техника</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">Очная</td>
				<td class="text-center">6</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">26</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">Заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">17</td>
				<td class="text-center">0</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center">
		Информация о результатах приема по каждой профессии, специальности среднего профессионального образования
		(при наличии вступительных испытаний), каждому направлению подготовки или специальности высшего образования
		с различными условиями приема (на места, финансируемые за счет бюджетных ассигнований федерального бюджета,
		бюджетов субъектов Российской Федерации, местных бюджетов, по договорам об образовании за счет средств
		физических и (или) юридических лиц)
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="eduChislen">
			<tr>
				<th rowspan="2">Код специальности, направления подготовки</th>
				<th rowspan="2">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2">Уровень образования</th>
				<th rowspan="2">Форма обучения</th>
				<th colspan="4">Результаты приема обучающихся за счет (количество человек)</th>
				<th rowspan="2">Средняя сумма набранных баллов по всем вступительным испытаниям</th>
			</tr>
			<tr>
				<th itemprop="numberBFpriem">бюджетных ассигнований федерального бюджета</th>
				<th itemprop="numberBRpriem">бюджетов субъектов Российской Федерации</th>
				<th itemprop="numberBMpriem">местных бюджетов</th>
				<th itemprop="numberPpriem">средств физических и (или) юридических лиц</th>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">08.03.01</td>
				<td rowspan="2">Строительство</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">9</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">3</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">37</td>
				<td class="text-center">193.5</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">38.03.01</td>
				<td rowspan="2">Экономика</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">17</td>
				<td class="text-center">185.2</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">09.03.01</td>
				<td rowspan="2">Информатика и вычислительная техника</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">2</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">7</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">7</td>
				<td class="text-center">189.7</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center">
		Информация о результатах перевода, восстановления и отчисления
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="eduPriem">
			<tr>
				<th rowspan="2">Код специальности, направления подготовки</th>
				<th rowspan="2">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2">Уровень образования</th>
				<th rowspan="2">Форма обучения</th>
				<th colspan="4">Численность обучающихся, чел</th>
			</tr>
			<tr>
				<th itemprop="numberOutPerevod">переведено в другие образовательные организации</th>
				<th>переведено из других образовательных организаций</th>
				<th itemprop="numberResPerevod">восстановлено</th>
				<th>отчислено</th>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">08.03.01</td>
				<td rowspan="2">Строительство</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">2</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">1</td>
				<td class="text-center">2</td>
				<td class="text-center">3</td>
				<td class="text-center">10</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">38.03.01</td>
				<td rowspan="2">Экономика</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">0</td>
				<td class="text-center">1</td>
				<td class="text-center">0</td>
				<td class="text-center">1</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">2</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">6</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">09.03.01</td>
				<td rowspan="2">Информатика и вычислительная техника</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">1</td>
				<td class="text-center">0</td>
				<td class="text-center">6</td>
			</tr>
		</table>
	</div>

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

	<ul type="disc">
		<li>
			<?= Html::anchor(
				$dir_docs . 'pol_per_otch.pdf',
				'Положение о порядке обучения, перевода, отчисления и предоставления академических отпусков обучающимся в БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
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
		Локальные нормативные акты по организации и осуществлению образовательной деятельности
	</h5>

	<ul type="disc">
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
			<?= Html::anchor(
				$dir_docs . 'pol_tek_kontr.pdf',
				'Положение о порядке организации и проведения текущего контроля успеваемости',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs . 'pol_pr_att.pdf',
				'Положение о порядке организации и проведения промежуточной аттестации обучающихся',
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

	<!--<h5 class="text-center">Методические и иные документы для обеспечения образовательного процесса:</h5>

	<ul type="disc">
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'avt_kurs.pdf',
				'Положение о порядке реализации авторских учебных курсов в Белгородском государственном технологическом университете им.В.Г.Шухова (Приложения)',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'razv_obuch.pdf',
				'Положение о применении технологий развивающего обучения на основе активных и интерактивных форм проведения занятий',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'el_resurs.pdf',
				'Положение об изучении дисциплин с применением электронных информационных ресурсов(Приложение)',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'pol_perevod_vus.pdf',
				'Положение о порядке перевода обучающихся в другую организацию, осуществляющую образовательную деятельность по образовательным программам высшего образования',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'pol_per_otch.pdf',
				'Положение о порядке обучения, перевода, отчисления и предоставления академических отпусков обучающимся в БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'pologenie_perevod_bespl.pdf',
				'О порядке перехода с платного обучения на бесплатное',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'perevod_com.pdf',
				'Положение о комиссии по вопросам перевода с платного обучения на бесплатное',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'from_rp.pdf',
				'Об утверждении формы рабочей программы дисциплины (Приложение)',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor(
				$dir_docs_education . 'disc_vibor.pdf',
				'Порядок формирования и реализации учебных дисциплин по выбору обучающихся',
				['target' => '_blank']
			) */ ?>;
		</li>
		<li>
			<? /*= Html::anchor('/scientificactivity', 'Итоги научной деятельности ППС') */ ?>;
		</li>
	</ul>-->
</div>

<script>
	$(document).ready(function () {
		$('table:even').addClass('bg-success').addClass('text-success');
		$('table:odd').addClass('bg-info').addClass('text-info');
	});
</script>