<?/* if ($noLessons != ''): */?><!--
	<h3 class="text-center"><?/*= $noLessons */?></h3>
--><?/* endif */?>

<? foreach ($lessons as $lesson): ?>
	<? if ($date != $lesson['date_lesson']): ?>
		<? if ($date != ''): ?>
			</table>
			<hr>
			</div>
		<? endif ?>

		<? $date = $lesson['date_lesson'] ?>

		<h6><?= Helper_Addfunction::date_from_mysql($lesson['date_lesson']) ?></h6>

		<div class="container table table-responsive" style="margin-bottom: 5px">
			<table class="table-responsive table-condensed table-bordered" width="100%" style="margin-bottom: 10px">
			<!--<table style="width: auto !important; margin: 0 auto" class="table table-bordered table-responsive table-condensed table-striped">-->
				<tr>
					<th width="20%">Предмет</th>
					<th width="48%">Тема занятия</th>
					<th width="15%">Тип занятия</th>
					<th width="12%">Преподаватель</th>
					<? if ($username == 'Акиева Е.А.'): ?>
						<th width="5%" colspan="3"></th>
					<? else: ?>
						<th width="5%"></th>
					<? endif ?>
				</tr>
	<? endif ?>
	<tr>
		<td style="vertical-align: middle"><?= $lesson['subject'] ?></td>
		<td style="vertical-align: middle"><?= $lesson['theme'] ?></td>
		<td class="text-center" style="vertical-align: middle"><?= $lesson['type'] ?></td>
		<td style="vertical-align: middle"><?= $lesson['person'] ?></td>
		<td class="text-center" style="vertical-align: middle">
			<?= HTML::anchor(
				$dirDoc . $lesson['id'] . '.pdf',
				'<i class="fa fa-2x fa-download text-success" aria-hidden="true"></i>',
				[
					'class' => 'btn btn-xs',
					'title' => 'Открыть',
					'target' => '_blank',
					'style' => 'outline: none'
				]
			)
			?>
		</td>
		<? if ($username == 'Акиева Е.А.'): ?>
			<td class="text-center" style="vertical-align: middle">
				<?= HTML::anchor(
					'cabinet/distance/addlesson/' . $lesson['id'],
					'<i class="fas fa-2x fa-edit text-info" aria-hidden="true"></i>',
					[
						'class' => 'btn btn-xs',
						'title' => 'Редактировать',
						'style' => 'outline: none'
					]
				) ?>
			</td>
			<td class="text-center" style="vertical-align: middle">
				<a
					href="javascript:void(0)"
					class="btn btn-xs"
					title="Удалить"
					style="outline: none"
					onclick="deleteLesson(
					<?= $lesson['id'] ?>,
					'<?= htmlspecialchars($group) ?>',
					'<?= htmlspecialchars($lesson['theme']) ?>'
				)">
					<i class="fa fa-2x fa-close text-danger" aria-hidden="true"></i>
				</a>
			</td>
			<!--<td>(<? /*= $book['person'] */ ?>)</td>-->
		<? endif ?>
	</tr>
<? endforeach ?>

