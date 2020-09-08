<hr>
<h4 class="text-center"><?= $faculty . ' - ' . $subject ?></h4>

<table style="width: auto !important; margin: 0 auto" class="table table-responsive table-condensed table-striped">
	<? foreach ($books as $book): ?>
		<tr>
			<td class="text-right" style="vertical-align: middle"><?= $no++ ?>.</td>
			<td style="vertical-align: middle"><?= $book['title'] ?></td>
			<td style="vertical-align: middle">
				<?= HTML::anchor(
					$dirDoc . $book['id'] . '.pdf',
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
			<? if ($kind == 1 && $username == 'Шумилова Е.Ю.'): ?>
				<td style="vertical-align: middle">
					<?= HTML::anchor(
						'cabinet/literature/adddoc/' . $book['id'],
						'<i class="fas fa-2x fa-edit text-info" aria-hidden="true"></i>',
						[
							'class' => 'btn btn-xs',
							'title' => 'Редактировать',
							'style' => 'outline: none'
						]
					)?>
				</td>
				<td style="vertical-align: middle">
					<a
						href="javascript:void(0)"
						class="btn btn-xs"
						title="Удалить"
						style = "outline: none"
						onclick="deleteDoc(
							<?= $book['id'] ?>,
							<?= $book['faculty_id'] ?>,
							<?= $book['subject_id'] ?>,
							'<?= htmlspecialchars($book['title']) ?>'
						)">
						<i class="fa fa-2x fa-close text-danger" aria-hidden="true"></i>
					</a>
				</td>
				<!--<td>(<?/*= $book['person'] */?>)</td>-->
			<? endif ?>
		</tr>
	<? endforeach ?>
</table>
