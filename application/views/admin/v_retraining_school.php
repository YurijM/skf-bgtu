<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/retrainingschool', 'К списку курсов подготовки по химии (ОГЭ/ЕГЭ)')?>
  </div>

  <?=Form::open('admin/retrainingschool/save')?>
    <div class="form-group">
      <?=Form::label('course', 'Курс подготовки')?>
      <?=Form::input('course', $retraining->course, array('class' => 'form-control', 'placeholder' => 'Поле course', 'autofocus'))?>
    </div>

    <div class="form-group">
      <?=Form::label('time', 'Срок обучения')?>
      <?=Form::input('time', $retraining->time, array('class' => 'form-control', 'placeholder' => 'Поле time'))?>
    </div>

    <div class="form-group">
      <?=Form::label('requirement', 'Примечания')?>
      <?=Form::textarea('remark', $retraining->remark, array('class' => 'form-control', 'rows' => 10, 'placeholder' => 'Поле remark'))?>
    </div>
  
    <div class="remark bg-danger text-danger">
      <p>
        При вводе требований для форматирования используйте <strong>HTML-тэги</strong>.
      </p>
        <strong><span class="text-uppercase">Обязательно !!!</span></strong><br>
      Для того, чтобы перейти на новую строку текста используйте либо тэг <strong><?=HTML::chars('<br>')?></strong>, либо обрамите абзац тэгами <strong><?=HTML::chars('<p> </p>')?></strong>.
    </div>
  
    <div class="form-group">
      <?=Form::label('cost', 'Стоимость')?>
      <?=Form::input('cost', $retraining->cost, array('class' => 'form-control', 'placeholder' => 'Поле cost'))?>
    </div>

    <div class="input-group col-xs-12">
      <span id="upload-doc" class="input-group-btn">
        <button class="btn btn-info" type="button">Выберите файл с программой</button>
      </span>
      <?=Form::input('file_program', $retraining->file_program, array('class' => 'form-control', 'readonly'))?>
    </div><!-- /input-group -->

    <div class="remark col-xs-12 bg-danger text-danger text-left">
      Внимание !!! Не используйте файлы с именами, содержащими <strong>русские</strong> буквы! Желательно, чтобы файл был в формате <strong>pdf</strong>.
    </div>

    <?=Form::hidden('id', $retraining->id)?>
  
    <div class="col-xs-12">
      <div class="form-submit text-center">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($retraining->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($retraining->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
      </div>
    </div>
  
  <? Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    var btnUploadDoc=$('#upload-doc');
    var uploadButtonDoc = $('#upload-doc button').text();

    new AjaxUpload(btnUploadDoc, {
			action: '/admin/retrainingschool/uploaddoc/',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(pdf|doc|docx|xls|xlsx)$/.test(ext))){ 
                    // extension is not allowed 
					$('#error-doc').removeClass('hidden');
          $('#error-doc').text('Файл ' + file + ' не загружен. Поддерживаются только форматы PDF, DOC, DOCX, XLS, XLSX');
          //status.text('Поддерживаемые форматы JPG, PNG или GIF');
					return false;
				}
				//status.text('Загрузка...');
        $('#upload-doc button').text('Загрузка...');
			},
			onComplete: function(file, response){
        ext = ((/[.]/.exec(file)) ? /[^.]+$/.exec(file.toLowerCase()) : '');
				//On completion clear the status
				//status.text('');
        //alert(response);
				//Add uploaded file to list
				if(response === "success")
        {
					//$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
					$('#error-doc').addClass('hidden');
          //$('#photo').removeClass('hidden');
					$('input[name=file_program]').val(file.toLowerCase());
          uploadButtonDoc = 'Изменить файл';
				}
        else
        {
					$('#error-doc').removeClass('hidden');
          $('#error-doc').text('Файл ' + file + ' не загружен. Возможно он имеет размер больше <?=ini_get("upload_max_filesize")?>');
          $('input[name=file_program]').val('');
				}
        
        $('#upload-doc button').text(uploadButtonDoc);
			}
		});
  });
</script>
