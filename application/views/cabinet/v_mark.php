<div class="marks col-xs-12 animated bounceInLeft">
	<? if ($isFulltimeEducation): ?>
		<div class="col-xs-7">
			Сроки аттестации:
			<ul style="margin-bottom: 0">
				<li>
					первая - с <b><?= Helper_Addfunction::date_from_mysql($dates->begin_first) ?></b>
					по <b><?= Helper_Addfunction::date_from_mysql($dates->end_first) ?></b>
				</li>
				<li>
					вторая - с <b><?= Helper_Addfunction::date_from_mysql($dates->begin_second) ?></b>
					по <b><?= Helper_Addfunction::date_from_mysql($dates->end_second) ?></b>
				</li>
			</ul>
		</div>
	<? endif ?>

	<div
		class="<?= $isFulltimeEducation ? 'col-xs-5' : 'col-xs-12' ?> text-right"
		<?= !$isFulltimeEducation ? 'style="margin-bottom: 10px"' : '' ?>
	>
		<?= HTML::anchor('cabinet/competition', 'Результаты освоения основной образовательной программы', [
			'style' => 'color: navy; text-decoration: underline'
		]) ?>
	</div>

	<!--<div class="table">-->
	<div class="col-xs-12">
		<div class="text-center text-muted" style="margin-bottom: .5em">
			(данные на <?= $date ?>)
		</div>

		<div class="table table-responsive">
			<table class="table-responsive table-condensed table-bordered">
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
							<td class="text-center"><?= $mark->att1 ?></td>
							<td class="text-center"><?= $mark->att2 ?></td>
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
</div>
