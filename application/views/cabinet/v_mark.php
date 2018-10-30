<div class="marks col-xs-12">
	<? if ($isFulltimeEducation): ?>
			Сроки аттестации:
			<ul>
				<li>
					первая - с <b><?= Helper_Addfunction::date_from_mysql($dates->begin_first) ?></b>
					по <b><?= Helper_Addfunction::date_from_mysql($dates->end_first) ?></b>
				</li>
				<li>
					вторая - с <b><?= Helper_Addfunction::date_from_mysql($dates->begin_second) ?></b>
					по <b><?= Helper_Addfunction::date_from_mysql($dates->end_second) ?></b>
				</li>
			</ul>
	<? endif ?>

	<!--<div class="table">-->
	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
			<? if ($isFulltimeEducation): ?>
				<tr>
					<th rowspan="2">Год</th>
					<th rowspan="2">Семестр</th>
					<th rowspan="2">Предмет</th>
					<th colspan="2">Аттестация</th>
					<th rowspan="2">Тип проверки</th>
					<th rowspan="2">Преподаватель</th>
					<th rowspan="2">Дата</th>
					<th rowspan="2">Оценка</th>
				</tr>
				<tr>
					<th>первая</th>
					<th>вторая</th>
				</tr>
			<? else: ?>
				<tr>
					<th>Год</th>
					<th>Семестр</th>
					<th>Предмет</th>
					<th>Тип проверки</th>
					<th>Преподаватель</th>
					<th>Дата</th>
					<th>Оценка</th>
				</tr>
			<? endif ?>
			<? foreach ($marks as $mark): ?>
				<tr>
					<td class="text-center"><?= $mark->year ?></td>
					<td class="text-center"><?= $mark->semester ?></td>
					<td><?= $mark->subject ?></td>
					<? if ($isFulltimeEducation): ?>
						<td><?= $mark->att1 ?></td>
						<td><?= $mark->att2 ?></td>
					<? endif ?>
					<td><?= $mark->type ?></td>
					<td><?= $mark->teacher ?></td>
					<td class="text-center"><?= $mark->date ?></td>
					<td class="text-center <?= $mark->mark == 5
						? 'text-danger'
						: ($mark->mark == 4
							? 'text-success'
							: ($mark->mark == 3 ? 'text-primary' : '')
						) ?>">
						<b><?= $mark->mark ?></b>
					</td>
				</tr>
			<? endforeach ?>
		</table>
	</div>
</div>
