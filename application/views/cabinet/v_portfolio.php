<div class="table">
	<table class="table-responsive table-condensed table-bordered" style="margin: 10px auto">
		<tr>
			<th>№ п/п</th>
			<th>Студент</th>
			<th>Группа</th>
			<th>Кол-во</th>
		</tr>
		<? foreach ($students as $student): ?>
			<tr>
				<td class="text-center">
					<?= $no++ ?>
				</td>
				<td class="anchor">
					<?= HTML::anchor(
						'cabinet/portfolio/view/' . $student['id'],
						$student['person'],
						['title' => 'Просмотреть портфолио']
					) ?>
				</td>
				<td class="text-center">
					<?= $student['group'] ?>
				</td>
				<td class="text-center">
					<?= $student['count'] ?>
				</td>
			</tr>
		<? endforeach ?>
	</table>
</div>
