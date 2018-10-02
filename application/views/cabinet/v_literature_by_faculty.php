<hr>
<h4 class="text-center"><?= $faculty ?></h4>
<table style="margin: 0 auto" class="table-responsive table-condensed table-bordered">
	<? foreach ($subjects as $subject): ?>
		<tr>
			<td class="anchor" title="Список литературы" onclick="loadLiteratureBySubject(<?= $facultyId ?>, <?= $subject['subject_id'] ?>)">
				<?= $subject['subject'] ?>
			</td>
			<td class="text-right"><?= $subject['count'] ?></td>
		</tr>
	<? endforeach ?>
</table>
