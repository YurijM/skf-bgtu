<div class="education row">
	<h3 class="text-center"><?= $title ?></h3>

	<? if ($model): ?>
		<div class="table table-responsive" width="100%">
			<table class="table-responsive table-condensed table-bordered" style="width: 100%">
				<tr>
					<th></th>
					<th>Наименование дисциплины</th>
					<th>Рабочая программа</th>
				</tr>

				<? foreach ($model as $program): ?>
					<tr <?= $program['link'] ? '' : 'class="text-center" style="font-weight: bold"' ?>>
						<td class="text-center"><?= $program['number'] ?></td>
						<td><?= $program['title'] ?></td>

						<? if ($program['link']): ?>
							<td class="text-center">
								<?= Html::anchor(
									$dir_docs . $program['link'],
									'<i class="far fa-file-pdf"></i> pdf',
									[
										'class' => 'btn btn-sm btn-info',
										'target' => '_blank'
									]
								) ?>
							</td>
						<? else: ?>
							<td></td>
						<? endif ?>
					</tr>
				<? endforeach ?>
			</table>
		</div>
	<? endif ?>
</div>

