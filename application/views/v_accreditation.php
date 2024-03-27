<div class="row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed">
			<tr>
				<th>Код специальности, направления подготовки</th>
				<th>Наименование профессии, специальности, направления подготовки</th>
				<th>Учебный план</th>
				<th>Описание образовательной программы</th>
				<th>Рабочие программы дисциплин, ГИА, практик</th>
				<th>Фонд оценочных средств</th>
				<th>Календарный учебный график</th>
			</tr>
			<tr>
				<td class="text-center" style="vertical-align: middle">46.01.03</td>
				<td style="vertical-align: middle">Делопроизводитель</td>
				<td class="text-center" style="vertical-align: middle">
					<?= Html::anchor(
						$dir_docs_education . 'up_46.01.03.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 02.02.2023 11:27
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center" style="vertical-align: middle">
					<?= Html::anchor(
						$dir_docs_education . 'hop_46.01.03.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.02.2023 11:27
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center" style="vertical-align: middle">
					<?= Html::anchor(
						$dir_docs_education . 'practica_46.01.03.7z',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 02.02.2023 11:27
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) . '<i class="far fa-file-pdf"></i> 7z',
						[
							'class' => 'btn btn-sm btn-success',
							'style' => 'margin-bottom: .25em',
							'target' => '_blank'
						]
					) ?>
					<br>
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
						[
							'class' => 'btn btn-sm btn-success',
							'style' => 'margin-bottom: .25em',
							'target' => '_blank'
						]
					) ?>
					<br>
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
						[
							'style' => 'margin-bottom: .25em',
							'class' => 'btn btn-sm btn-info',
							'target' => '_blank'
						]
					) ?>
				</td>
				<td class="text-center" style="vertical-align: middle">
					<?= Html::anchor(
						$dir_docs_education . 'fos_46.01.03.7z',
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
						['class' => 'btn btn-sm btn-success']
					) ?>
				</td>
				<td class="text-center" style="vertical-align: middle">
					<?= Html::anchor(
						$dir_docs_education . 'graf_46.01.03.pdf',
						HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1.5em; margin-right: .5em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 02.02.2023 11:27
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
</div>
