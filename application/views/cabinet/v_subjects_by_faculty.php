<option value="0" selected>Выберите предмет</option>
<? foreach ($subjects as $subject): ?>
	<option <?= $subject->id == $subjectId ? 'selected' : '' ?> value="<?= $subject->id ?>"><?= $subject->subject ?></option>
<? endforeach ?>
