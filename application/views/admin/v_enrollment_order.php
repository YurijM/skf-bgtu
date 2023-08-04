<!-- Стиль и скрипт для datepicker -->
<?= HTML::style($dir_css . 'jquery-ui.min.css') ?>
<?= HTML::script($dir_js . 'jquery-ui.min.js') ?>

<!-- Скрипт для ajax-загрузки -->
<?= HTML::script($dir_js . 'ajaxupload.3.5.js') ?>

<?= (isset($confirmation_delete) ? $confirmation_delete : '') ?>

<h4><?= $page_title ?> - <small>таблица</small> <?= $table ?></h4>

<div class="admin-list">
	<div class="text-right">
		<?= HTML::anchor('admin/enrollmentorders', 'К списку приказов') ?>
	</div>

	<?= Form::open('admin/enrollmentorders/save') ?>
	<div class="form-group col-xs-12">
		<div class="col-xs-12">
			<?= Form::label('consent', 'Вид образования') ?>
		</div>
		<div class="col-xs-2 col-sm-1">
			<?= Form::radio(
				'education',
				0,
				($order->education == 0)
			) ?> ВУЗ
		</div>
		<div class="col-xs-2 col-sm-1">
			<?= Form::radio(
				'education',
				1,
				($order->education == 1)
			) ?> СПО
		</div>
	</div>

	<div class="form-group">
		<?= Form::label('description', 'Описание приказа') ?>
		<?= Form::input('description', $order->description, ['class' => 'form-control', 'placeholder' => 'Поле description']) ?>
	</div>

	<div class="form-group">
		<?= Form::label('date', 'Дата приказа') ?>
		<?= Form::input('date', Helper_Addfunction::date_from_mysql($order->date), array('class' => 'form-control', 'placeholder' => 'Поле date')) ?>
	</div>

	<div class="input-group" style="margin-top: 1em; margin-bottom: 1em;">
      <span id="upload-doc" class="input-group-btn">
        <button class="btn btn-info" type="button">Выберите файл</button>
      </span>
		<?= Form::input('doc_file', $order->doc_file, array('class' => 'form-control', 'readonly')) ?>
	</div><!-- /input-group -->

	<div id="error-doc" class="hidden">
	</div>

	<div class="remark bg-danger text-danger text-left">
		<em><strong>Внимание !!!</strong></em> Не используйте файлы с именами, содержащими <em><strong>русские</strong></em> буквы!
	</div>

	<?= Form::hidden('id', $order->id) ?>

	<div class="form-submit text-center">
		<?= Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm')) ?>
		<!-- Не получилось корректно привязать модальное окно к кнопке submit.
		Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
		На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
		<?= ($order->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '') ?>
		<?= ($order->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '') ?>
	</div>
	<?= Form::close() ?>
</div>

<script>
	$(document).ready(function () {
		$('[name=date]').datepicker({});

		var btnUploadDoc = $('#upload-doc');
		var uploadButtonDoc = $('#upload-doc button').text();

		new AjaxUpload(btnUploadDoc, {
			action: '/admin/enrollmentorders/upload/',
			name: 'uploadfile',
			onSubmit: function (file, ext) {
				if (!(ext && /^(pdf|doc|docx|xls|xlsx)$/.test(ext))) {
					// extension is not allowed
					$('#error-doc').removeClass('hidden');
					$('#error-doc').text('Файл ' + file + ' не загружен. Поддерживаются только форматы PDF, DOC, DOCX, XLS, XLSX');
					//status.text('Поддерживаемые форматы JPG, PNG или GIF');
					return false;
				}
				//status.text('Загрузка...');
				$('#upload-doc button').text('Загрузка...');
			},
			onComplete: function (file, response) {
				ext = ((/[.]/.exec(file)) ? /[^.]+$/.exec(file.toLowerCase()) : '');
				//On completion clear the status
				//status.text('');
				//alert(response);
				//Add uploaded file to list
				if (response === "success") {
					//$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
					$('#error-doc').addClass('hidden');
					//$('#photo').removeClass('hidden');
					$('input[name=doc_file]').val(file.toLowerCase());
					uploadButtonDoc = 'Изменить файл';
				} else {
					$('#error-doc').removeClass('hidden');
					$('#error-doc').text('Файл ' + file + ' не загружен. Возможно он имеет размер больше <?=ini_get("upload_max_filesize")?>');
					$('input[name=doc_file]').val('');
				}

				$('#upload-doc button').text(uploadButtonDoc);
			}
		});
	});
</script>
