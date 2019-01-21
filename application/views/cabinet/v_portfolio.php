<div class="col-md-offset-4 col-sm-offset-3 col-xs-offset-2 col-md-4 col-sm-6 col-xs-8">
	<?= Form::open('cabinet/portfolio/view') ?>
	<div class="form-group">
		<?= Form::label('student', 'Студент') ?>
		<?= Form::input('student', $student, ['class' => 'form-control', 'placeholder' => 'Фамилия и инициалы студента', 'autofocus']) ?>
	</div>

	<? if ($isAbsent): ?>
		<div class="alert alert-danger text-center">
			Студент <b><?= $student ?></b> отсутствует в списке
		</div>
	<? endif ?>

	<div class="form-submit text-center">
		<?= Form::submit('search', 'Выбрать', ['class' => 'btn btn-success btn-sm']) ?>
	</div>
	<?= Form::close() ?>
</div>


<!--<div class="table">
	<table class="table-responsive table-condensed table-bordered" style="margin: 10px auto">
		<tr>
			<th>№ п/п</th>
			<th>Студент</th>
			<th>Группа</th>
			<th>Кол-во</th>
		</tr>
		<? /* foreach ($students as $student): */ ?>
			<tr>
				<td class="text-center">
					<? /*= $no++ */ ?>
				</td>
				<td class="anchor">
					<? /*= HTML::anchor(
						'cabinet/portfolio/view/' . $student['id'],
						$student['person'],
						['title' => 'Просмотреть портфолио']
					) */ ?>
				</td>
				<td class="text-center">
					<? /*= $student['group'] */ ?>
				</td>
				<td class="text-center">
					<? /*= $student['count'] */ ?>
				</td>
			</tr>
		<? /* endforeach */ ?>
	</table>
</div>-->
