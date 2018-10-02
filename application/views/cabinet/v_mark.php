<div class="marks col-xs-12">
	<!--<div class="table">-->
	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
			<tr>
				<th>Год</th>
				<th>Семестр</th>
				<th>Предмет</th>
				<th>Тип проверки</th>
				<th>Преподаватель</th>
				<th>Дата</th>
				<th>Оценка</th>
			</tr>
			<? foreach ($marks as $mark): ?>
				<tr>
					<td class="text-center"><?= $mark->year ?></td>
					<td class="text-center"><?= $mark->semester ?></td>
					<td><?= $mark->subject ?></td>
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
