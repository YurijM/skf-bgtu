<h4 class="text-center text-muted">
	Достижения
</h4>
<div class="table">
	<table class="table-responsive table-bordered">
		<? $no =10 ?>
		<? foreach ($achievements as $achievement): ?>
			<tr>
				<td class="text-center"><?= $no++ ?></td>
				<td><?= $achievement->description ?></td>
			</tr>
		<? endforeach ?>
	</table>
</div>
