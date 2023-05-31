<style>
	.td-top > tbody > tr > td {
		vertical-align: top;
	}
</style>

<div class="education row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered">
			<tr>
				<th>Код специальности, направления подготовки</th>
				<th>Наименование профессии, специальности, направления подготовки</th>
				<th>Описание образовательной программы</th>
				<th>Учебный план</th>
				<th>Календарный учебный график</th>
				<th>Рабочие программы дисциплин и ФОС</th>
				<th>Программы практик и ФОС</th>
				<th>ГИА РП и ФОС</th>
				<th>Договор о практической подготовке</th>
				<th>Рабочая программа воспитания</th>
				<th>Календарный план воспитательной работы</th>
			</tr>
			<tr class="text-center bg-info text-info">
				<td colspan="11"><b>Среднее профессиональное образование</b></td>
			</tr>
			<tr>
				<td class="text-center">46.01.03</td>
				<td>Делопроизводитель</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '1. ОПОП 46.01.03.rar',
						'<i class="far fa-file-pdf"></i> rar',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '2. Учебный план 46.01.03.rar',
						'<i class="far fa-file-pdf"></i> rar',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '3. Календарный учебный график 46.01.03.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
					<!--<a href="<?/*= $dir_docs_education . '3. Календарный учебный график 46.01.03.sig' */?>" download>Load</a>-->
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '4. Рабочие программы дисциплин и ФОС 46.01.03.rar',
						'<i class="far fa-file-pdf"></i> rar',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '5. Программы практик и ФОС 46.01.03.rar',
						'<i class="far fa-file-pdf"></i> rar',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '6. ГИА РП и ФОС 46.01.03.rar',
						'<i class="far fa-file-pdf"></i> rar',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '7. Договор о практической подготовке 46.01.03.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '8. Рабочая программа воспитания 46.01.03.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '9. Календарный план воспитательной работы 46.01.03.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">08.02.01</td>
				<td>Строительство и эксплуатация зданий и сооружений</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '1. ОПОП 08.02.01.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '2. Учебный план 08.02.01.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '3. Календарный учебный график 08.02.01.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '4. Рабочие программы дисциплин и ФОС 08.02.01.rar',
						'<i class="far fa-file-pdf"></i> rar',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '5. Программы практик и ФОС 08.02.01.rar',
						'<i class="far fa-file-pdf"></i> rar',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '6. ГИА РП и ФОС 08.02.01.rar',
						'<i class="far fa-file-pdf"></i> rar',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '7. Договор о практической подготовке 08.02.01.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '8. Рабочая программа воспитания 08.02.01.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . '9. Календарный план воспитательной работы 08.02.01.sig',
						'<i class="far fa-file-pdf"></i> sig',
						['class' => 'btn btn-sm btn-success', 'target' => '_blank', 'download' => '']
					) ?>
				</td>
			</tr>
		</table>
	</div>
</div>

<script>
	$(document).ready(function () {
		$('table:even').addClass('bg-success').addClass('text-success');
		$('table:odd').addClass('bg-info').addClass('text-info');
	});
</script>