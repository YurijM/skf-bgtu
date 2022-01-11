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
		<?= Form::label('date', 'Дата приказа') ?>
		<?= Form::input('date', Helper_Addfunction::date_from_mysql($order->date), array('class' => 'form-control', 'placeholder' => 'Поле date')) ?>
	</div>

	<div class="text-center center-block">
		<div id="upload-img">
			<button type="button" class="btn btn-info btn-xs"><?= ($order->img_file ? 'Изменить миниатюру' : 'Добавить миниатюру') ?></button>
		</div>

		<div id="error-img" class="hidden">
		</div>

		<div id="photo">
			<?= HTML::image(($order->img_file ? $dir_img_enrollment_orders . $order->img_file : $dir_img . 'photo.jpg'), array('class' => 'img img-responsive center-block', 'alt' => $site_name)) ?>
		</div>
	</div>

	<div class="input-group">
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

	<?= Form::hidden('src', ($order->img_file ? $dir_img_enrollment_orders . $order->img_file : '')) ?>
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

		var btnUploadImg = $('#upload-img');
		var uploadButtonImg = $('#upload-img button').text();

		new AjaxUpload(btnUploadImg, {
			action: '/admin/enrollmentorders/uploadimg/',
			name: 'uploadfile',
			onSubmit: function (file, ext) {
				if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
					// extension is not allowed
					$('#photo').addClass('hidden');
					$('#error-img').removeClass('hidden');
					$('#error-img').text('Файл ' + file + ' не загружен. Поддерживаются только форматы JPG, PNG или GIF.');
					//status.text('Поддерживаемые форматы JPG, PNG или GIF');
					return false;
				}
				//status.text('Загрузка...');
				$('#upload-img button').text('Загрузка...');
			},
			onComplete: function (file, response) {
				ext = ((/[.]/.exec(file)) ? /[^.]+$/.exec(file.toLowerCase()) : '');
				//On completion clear the status
				//status.text('');
				//alert(response);
				//Add uploaded file to list
				if (response === "success") {
					//$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
					$('#error-img').addClass('hidden');
					$('#photo').removeClass('hidden');
					$('#photo .img').attr('src', '<?=$dir_img_enrollment_orders?>temp/' + file.toLowerCase());
					$('input[name=src]').val(file.toLowerCase());
					uploadButtonImg = 'Изменить миниатюру';
				} else {
					$('#photo').addClass('hidden');
					$('#error-img').removeClass('hidden');

					switch (response) {
						case 'file_is_existed':
							$('#error-img').text('Файл с именем ' + file + ' уже загружен на сервер. Измените имя загружаемого файла.');
							break;
						default:
							$('#error-img').text('Файл ' + file + ' не загружен. Возможно он имеет размер больше <?=ini_get("upload_max_filesize")?>');
							break;
					}
				}

				$('#upload-img button').text(uploadButtonImg);
			}
		});

	});
</script>
