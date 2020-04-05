<!-- Стиль и скрипт для datepicker -->
<?= HTML::style($dir_css . 'jquery-ui.min.css') ?>
<?= HTML::style($dir_css . 'fileinput.min.css') ?>
<?= HTML::script($dir_js . 'jquery-ui.min.js') ?>
<?= HTML::script($dir_js . 'fileinput.min.js') ?>

<div class="add-lesson col-xs-12">
	<div class="admin-list col-xs-12">
		<?= Form::open(
			'cabinet/distance/addlesson' . ($id ? '/' . $id : ''),
			[
				'method' => 'POST',
				'enctype' => 'multipart/form-data'
			]
		)
		?>
		<div class="row">
			<div class="form-group col-sm-2 col-xs-4">
				<?= Form::label('dateLesson', 'Дата занятия') ?>
				<?= Form::input(
					'dateLesson',
					$dateLesson,
					['class' => 'form-control', 'placeholder' => 'Поле begin_first']
				) ?>
			</div>
		</div>

		<div class="form-group">
			<?= Form::label('group', 'Группа') ?>
			<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorGroup ?></span>
			<select name="group" class="form-control">
				<option value="" selected>Выберите группу</option>

				<? foreach ($groups as $item): ?>
					<? if (mb_substr($item->group, 0, 1) != 'З'): ?>
						<option <?= $item->group == $group ? 'selected' : '' ?> value="<?= $item->group ?>"><?= $item->group ?></option>
					<? endif ?>
				<? endforeach ?>
			</select>
		</div>

		<div class="form-group">
			<?= Form::label('teacher', 'Преподаватель') ?>
			<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorTeacher ?></span>
			<select name="teacher" class="form-control">
				<option value="0" selected>Выберите преподавателя</option>

				<? foreach ($teachers as $teacher): ?>
					<option <?= $teacher->id == $teacherId ? 'selected' : '' ?> value="<?= $teacher->id ?>"><?= $teacher->person ?></option>
				<? endforeach ?>
			</select>
			</select>
		</div>

		<div class="form-group">
			<?= Form::label('faculty', 'Направление') ?>
			<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorFaculty ?></span>
			<select name="faculty" class="form-control" onchange="loadSubjectsByFaculty()">
				<option value="0" selected>Выберите направление</option>

				<? foreach ($faculties as $faculty): ?>
					<option <?= $faculty->id == $facultyId ? 'selected' : '' ?> value="<?= $faculty->id ?>"><?= $faculty->faculty ?></option>
				<? endforeach ?>
			</select>
		</div>


		<div id="subjectId" class="hidden" data-subject-id="<?= $subjectId ?>"></div>

		<div class="form-group">
			<?= Form::label('subject', 'Дисциплина') ?>
			<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorSubject ?></span>
			<select name="subject" class="form-control">
				<option value="0" selected>Выберите дисциплину</option>
			</select>
			</select>
		</div>

		<div class="form-group">
			<?= Form::label('theme', 'Тема занятия') ?>
			<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorTheme ?></span>
			<?= Form::textarea(
				'theme',
				$theme,
				['class' => 'form-control', 'placeholder' => 'Тема занятия', 'rows' => 2]
			) ?>
		</div>

		<div class="form-group">
			<?= Form::label('type', 'Тип занятия') ?>
			<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorType ?></span>
			<select name="type" class="form-control">
				<option value="0" selected>Выберите тип занятия</option>

				<? foreach ($types as $item): ?>
					<option <?= $item == $type ? 'selected' : '' ?> value="<?= $item ?>"><?= $item ?></option>
				<? endforeach ?>
			</select>
			</select>
		</div>

		<? if (!$id): ?>
			<div class="form-group">
				<?= Form::label('file', 'Файл с документом') ?>
				<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorFile ?></span>
				<?= Form::input('file', $file, ['type' => 'file', 'accept' => 'application/pdf']) ?>
			</div>
		<? else: ?>
			<div class="text-danger" style="font-style: italic; font-weight: bold; margin-bottom: 10px">
				Файл с самим документом заменить нельзя!<br>
				Если Вы хотите заменить файл, то надо сначала удалить этот документ из списка, а затем добавить его заново.
			</div>
		<? endif ?>

		<div class="form-submit text-center col-xs-12">
			<?= Form::submit(
				'load',
				($id ? 'Обновить' : 'Загрузить'),
				[
					'class' => 'btn btn-success',
				]
			)
			?>
			<?= HTML::anchor(
				'/cabinet/distance',
				'Отмена',
				['class' => 'btn btn-default']
			) ?>
		</div>
		<? Form::close() ?>
	</div>
</div>

<script>
	$(document).ready(function () {
		$('[name="dateLesson"]').datepicker({});

		const facultyId = $('.literature select[name="faculty"]').val();
		if (facultyId > 0) {
			loadSubjectsByFaculty();
		}

		$('input[name="file"]').fileinput({
			browseLabel: 'Выберите файл',
			showPreview: false,
			showRemove: false,
			showUpload: false,
			msgPlaceholder: 'Поддерживается загрузка только файлов pdf'
		})
	});
</script>
