<div class="competitions col-xs-12 animated bounceInRight">
	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
			<tr>
				<th>№ п/п</th>
				<th>Код</th>
				<th>Компетенция</th>
				<th>Предмет</th>
				<th>Оценка</th>
			</tr>
			<? $no = 1 ?>
			<? foreach ($competitions as $competition): ?>
				<tr>
					<td class="text-center"><?= $no++ ?></td>
					<td class="text-center"><?= $competition['code'] ?></td>
					<td><?= $competition['competition'] ?></td>
					<td><?= $competition['subject'] ?></td>
					<td class="text-center <?= $competition['mark'] == 5
						? 'text-danger'
						: ($competition['mark'] == 4
							? 'text-success'
							: ($competition['mark'] == 3 ? 'text-primary' : '')
						) ?>">
						<b><?= $competition['mark'] ?></b>
					</td>
				</tr>
			<? endforeach ?>
		</table>
	</div>
</div>
