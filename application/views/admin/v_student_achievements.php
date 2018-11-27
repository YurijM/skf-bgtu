<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<?= HTML::script($dir_js . 'fileinput.min.js') ?>
<?= HTML::style($dir_css . 'fileinput.min.css') ?>
<?= HTML::script($dir_js . 'vue.js') ?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/studentachievements', 'К списку достижений')?>
  </div>

  <?=Form::open(
  	'admin/studentachievements/save',
		[
			'method' => 'POST',
			'enctype' => 'multipart/form-data'
		]
	)?>


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

		<div class="form-group">
			<?=Form::label('person', 'Студент')?>
			<span id="errorStudent" class="text-danger small" style="font-weight: bold">
			</span>
			<select name="student_id" class="form-control" :class="studentId == 0 ? 'select-placeholder' : ''" v-model="studentId">
				<option v-for="student in students" :value="student.id" :disabled="student.id == 0">
					{{ student.person + ' ' + student.group }}
				</option>
			</select>
		</div>

		<!--<div class="form-group">
      <?/*=Form::label('person', 'Студент')*/?>
			<span id="errorStudent" class="text-danger small" style="font-weight: bold">
			</span>
      <select name="student_id" class="form-control">
        <option value="0" <?/*=($achievement->student_id ? '' : 'selected')*/?>>Поле student_id</option>

        <?/* foreach ($students as $student): */?>
          <option <?/*=($achievement->student_id == $student->id ? 'selected' : '')*/?>
						value="<?/*=$student->id*/?>"><?/*=$student->person.' ('.$student->group.')'*/?></option>
        <?/* endforeach */?>
      </select>
    </div>-->

		<!--<div class="form-group">
			<?/*= Form::label('description', 'Описание достижения') */?>
			<span id="errorDescription" class="text-danger small" style="font-weight: bold">
			</span>
			<?/*= Form::textarea(
				'description',
				$achievement->description,
				['class' => 'form-control', 'placeholder' => 'Поле description', 'rows' => 2]
			) */?>
		</div>-->

		<div class="form-group">
			<span id="errorDescription" class="text-danger small" style="font-weight: bold">
			</span>
			<textarea v-model="description" class="form-control" placeholder="Поле description" rows=2></textarea>
		</div>

		<?/* if (!$achievement->id): */?>
		<template v-if="!isEdit">
			<div class="form-group">
				<?= Form::label('file', 'Файл с документом') ?>
				<span id="errorFile" class="text-danger small" style="font-weight: bold">
				</span>
				<?= Form::input('file', $file, ['type' => 'file', 'accept' => 'application/pdf']) ?>
				<!--<input name="file" type="file" accept="application/pdf" v-model="file">-->
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
				</div>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
					<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
				</div>
			</div>

		</template>
		<?/* else: */?>
		<template v-else>
			<div class="text-danger" style="font-style: italic; font-weight: bold; margin-bottom: 10px">
				Файл с самим документом заменить нельзя!<br>
				Если Вы хотите заменить файл, то надо сначала удалить это достижение, а затем добавить его заново.
			</div>
		</template>
		<?/* endif */?>

		<?=Form::hidden('id', $achievement->id)?>

    <div class="form-submit text-center col-xs-12">
			<button class="btn btn-success btn-sm" type="submit" :disabled="!isReady">Сохранить</button>
      <?/*=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))*/?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($achievement->id
				? Form::submit(
					'delete',
					'Удалить',
					['id' => 'delete', 'class' => 'hidden'])
				: ''
			)?>
      <?=($achievement->id
				? Form::button(
					'delete_button',
					'Удалить',
					[
						'type' => 'button',
						'class' => 'btn btn-danger btn-sm',
						'data-toggle' => 'modal',
						'data-target' => '#delete_modal'
					]
				)
				: ''
			)?>
    </div>
  <?=Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    /*$("select").change(function () {
      if($(this).val() == "0") {
        $(this).addClass("select-placeholder");
        $('#errorStudent').text(' студент должен быть выбран');
      } else {
        $(this).removeClass("select-placeholder");
        $('#errorStudent').text('');
      }
    });
    
    $("select").change();*/

    $('input[name="file"]').fileinput({
      browseLabel: 'Выберите файл',
      showPreview: false,
      showRemove: false,
      showUpload: false,
      msgPlaceholder: 'Поддерживается загрузка только файлов pdf',
    });

    $('textarea[name="description"]').change(function() {
      if ($(this).val() === '') {
        $('#errorDescription').text(' описание должно быть заполнено');
			} else {
        $('#errorDescription').text('');
			}
		});

    $('input[name="file"]').change(function() {
      if ($(this).val() === '') {
        $('#errorFile').text(' файл должен быть выбран');
      } else {
        $('#errorFile').text('');
      }
    });

    $('input[name="save"]').click(function() {
      var student = $("select").val();
      var description = $('textarea[name="description"]').val();
      var file = $('input[name="file"]').val();
      var isError = false;

      if (student == 0) {
        $('#errorStudent').text(' студент должен быть выбран');
        isError = true;
			} else {
        $('#errorStudent').text('');
			}

      if (description === '') {
        $('#errorDescription').text(' описание должно быть заполнено');
        isError = true;
      } else {
        $('#errorDescription').text('');
      }

      if (file === '') {
        $('#errorFile').text(' файл должен быть выбран');
        isError = true;
      } else {
        $('#errorFile').text('');
      }

      return !isError;
		})
  });
</script>

<script>
  new Vue({
    el: '.admin-list',
    data: {
      isEdit: false,
      save: false,
      studentId: 0,
			description: '',
			file: '',
      students: {}
    },
    created() {
      this.studentId = <?= $achievement->student_id ? $achievement->student_id : 0 ?>;
      this.description = '<?= $achievement->description ?>';
      this.file = '<?= $file ?>';
      this.isEdit = this.studentId ? true : false;

      var i = 0;

      this.$set(this.students, i++, {
        'id': 0,
        'person': 'Поле student_id',
				'group': ''
      });

			<? foreach ($students as $student): ?>
				this.$set(this.students, i++, {
					'id': <?= $student->id ?>,
					'person': '<?= $student->person ?>',
          'group': '(<?= $student->group ?>)'
				});
			<? endforeach ?>
    },
		computed: {
      isReady() {
        return (this.studentId && this.description);
			}
		},
    methods: {
    }
  })
</script>
