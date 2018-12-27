<h4 class="text-center text-muted">
	Портфолио
</h4>
<div class="table" style="max-height: 175px; overflow-y: auto; border: none; background-color: inherit">
	<table class="table table-responsive table-bordered table-striped">
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