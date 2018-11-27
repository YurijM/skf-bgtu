<?= HTML::script($dir_js . 'fileinput.min.js') ?>
<?= HTML::script($dir_js . 'vue.js') ?>
<?= HTML::style($dir_css . 'fileinput.min.css') ?>

<div class="add-doc col-xs-12">
	<select name="faculty1" class="form-control" v-model="facultySelected" @change="changeFaculty()">
		<option v-for="faculty in faculties" :value="faculty.id">
			{{ faculty.faculty }}
		</option>
	</select>

	<!--<select name="faculty1" class="form-control" v-for="faculty in faculties">
		<option v-for="item in faculty" :value="item.id">
			{{ item.faculty }}
		</option>
	</select>-->

	<!--<ul v-for="faculty in faculties">
		<li v-for="item in faculty">
			{{ item['id'] + ' - ' + item['faculty'] }}
		</li>
	</ul>-->

	<div class="admin-list col-xs-12">
		<?= Form::open(
			'cabinet/literature/adddoc' . ($id ? '/' . $id : ''),
			[
				'method' => 'POST',
				'enctype' => 'multipart/form-data'
			]
		)
		?>
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
			<?= Form::label('subject', 'Предмет') ?>
			<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorSubject ?></span>
			<select name="subject" class="form-control">
				<option value="0" selected>Выберите предмет</option>
			</select>
		</div>

		<div class="form-group">
			<?= Form::label('title', 'Название документа') ?>
			<span class="text-danger small" style="font-weight: bold">&nbsp;<?= $errorTitle ?></span>
			<?= Form::textarea(
				'title',
				$title,
				['class' => 'form-control', 'placeholder' => 'Название документа', 'rows' => 2]
			) ?>
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
				'/cabinet/literature' . ($id ? '/index/' . $facultyId . '/' . $subjectId : ''),
				'Отмена',
				['class' => 'btn btn-default']
			) ?>
		</div>
		<? Form::close() ?>
	</div>
</div>

<script>
  $(function () {
    var facultyId = $('.literature select[name="faculty"]').val();
    if (facultyId > 0) {
      loadSubjectsByFaculty();
    }

    $('input[name="file"]').fileinput({
      browseLabel: 'Выберите файл',
      showPreview: false,
      showRemove: false,
      showUpload: false,
      msgPlaceholder: 'Поддерживается загрузка только файлов pdf',
      //initialPreview: ['<object data="/media/docs/literature/30.pdf" type="application/pdf"></object>' ],
      //initialCaption: '/media/docs/literature/30.pdf',
      //initialPreviewConfig: [{'caption': '/media/docs/literature/30.pdf'}],
      //uploadUrl: 'cabinet/literature/loaddoc',
      //allowedFileTypes: ['image'],
      //allowedFileExtensions: ['jpg'],
      //previewFileType: 'text',
      //initialPreviewFileType: 'jpg',
      //allowedPreviewTypes: ['jpg'],
      //allowedPreviewMimeTypes: ['application/pdf'],
      //allowedPreviewTypes: ['pdf']
    })
  });
</script>

<script>
  new Vue({
    el: '.add-doc',
    data: {
      facultySelected: 0,
      faculties: {}
    },
    created() {
      var i = 0;

      this.$set(this.faculties, i++, {
        'id': 0,
        'faculty': 'Выбирете направление'
      });

			<? foreach ($faculties as $faculty): ?>
				this.$set(this.faculties, i++, {
					'id': <?= $faculty->id ?>,
					'faculty': '<?= $faculty->faculty ?>'
				});
			<? endforeach ?>
    },
		methods: {
      changeFaculty() {
        console.log(this.facultySelected);
			}
		}
  })
</script>
