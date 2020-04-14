<div class="groups col-xs-12">
	<? if ($kind == 0): ?>
		<h3 class="text-center">Группа <span class="group"><?= $group ?></span></h3>
	<? else: ?>
		<div class="form-group col-xs-5 col-sm-3 col-lg-2">
			<?= Form::label('group', 'Группа') ?>
			<select name="group" class="form-control" onchange="changeGroup()">
				<option value="" selected>Выберите группу</option>

				<? foreach ($groups as $item): ?>
					<?/* if (mb_substr($item->group, 0, 1) != 'З'): */?>
						<option value="<?= $item->group ?>"><?= $item->group ?></option>
					<?/* endif */?>
				<? endforeach ?>
			</select>
		</div>
	<? endif ?>
</div>

<script>
	$(document).ready(function () {
		let group = $('select[name="group"]').val();
		if (!group) {
			group = $('.group').html()
		}

		if (group != '') {
			loadLessonsByGroup(group);
		}
	});

	function changeGroup() {
		const group = $('select[name="group"]').val();

		if (group != '') {
			loadLessonsByGroup(group);
		} else {
			alert('Выберите группу')
		}
	}
</script>