<div class="table table-responsive">
	<table class="table-responsive table-bordered table-condensed" style="margin: 10px auto">
		<? $no = 1 ?>
		<? foreach ($achievements as $achievement): ?>
			<tr>
				<td width="5%" class="text-center"><?= $no++ ?></td>
				<td><?= HTML::anchor(
						$dirDoc . $achievement->student_id . '-' . $achievement->id . '.pdf',
						$achievement->description,
						['target' => '_blank']
					) ?>
				</td>
			</tr>
		<? endforeach ?>
	</table>
</div>