<div class="table">
	<table>
		<? if ($user->contract != '0'): ?>
			<tr>
				<th>Договор №</th>
				<td><?= $user->contract ?></td>
			</tr>
		<? endif ?>
		<tr>
			<th width="35%">Зачётная книжка №</th>
			<td><?= $user->num_test_book ?></td>
		</tr>
		<tr>
			<th>Группа</th>
			<td><?= $user->group ?></td>
		</tr>
		<tr>
			<th>Форма обучения</th>
			<td><?= $user->learning ?></td>
		</tr>
		<tr>
			<th>Направление</th>
			<td><?= $user->faculty ?></td>
		</tr>
		<tr>
			<th>Профиль</th>
			<td><?= $user->speciality ?></td>
		</tr>
		<tr>
			<th></th>
			<td>
				<?= HTML::anchor('/educationalprocess', 'Расписание', ['class' => 'btn btn-sm btn-primary', 'target' => '_blank']) ?>
			</td>
		</tr>
	</table>
</div>
