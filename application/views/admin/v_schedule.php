<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/schedule', 'К списку расписаний')?>
  </div>

  <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
    <?=Form::open('admin/schedule/save', array('class' => 'form-horizontal'))?>
      <div class="form-group">
        <?=Form::label('education', 'Отделение', array('class' => 'control-label col-sm-4 col-xs-5'))?>
        <div class="col-sm-4 col-xs-5">
          <?=Form::select('education', $education, $schedule->education, array('class' => 'form-control', 'placeholder' => 'Поле education'))?>
        </div>
      </div>

      <div class="form-group">
        <?=Form::label('schedule', 'Расписание', array('class' => 'control-label col-sm-4 col-xs-5'))?>
        <div class="col-sm-4 col-xs-5">
          <?=Form::select('schedule', $schedule_list, $schedule->schedule, array('class' => 'form-control'))?>
        </div>
      </div>

      <div class="input-group col-xs-12">
        <span id="upload" class="input-group-btn">
          <button class="btn btn-info" type="button">Выберите файл</button>
        </span>
        <?=Form::input('doc_file', $schedule->doc_file, array('class' => 'form-control', 'readonly'))?>
      </div><!-- /input-group -->

      <div id="error" class="col-xs-12 hidden">
      </div>

      <div class="remark col-xs-12 bg-danger text-danger text-left">
        <em><strong>Внимание !!!</strong></em> Не используйте файлы с именами, содержащими <em><strong>русские</strong></em> буквы!
      </div>

      <?=Form::hidden('id', $schedule->id)?>

      <div class="form-submit text-center">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($schedule->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($schedule->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
      </div>
    <?=Form::close() ?>
  </div>
</div>

<script>
  $(document).ready(function() {
    var btnUpload=$('#upload');
		var status=$('#status');
    var uploadButton = $('#upload button').text();

    new AjaxUpload(btnUpload, {
			action: '/admin/schedule/upload/',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(pdf|doc|docx|xls|xlsx)$/.test(ext))){ 
                    // extension is not allowed 
					$('#error').removeClass('hidden');
          $('#error').text('Файл ' + file + ' не загружен. Поддерживаются только форматы PDF, DOC, DOCX, XLS, XLSX');
          //status.text('Поддерживаемые форматы JPG, PNG или GIF');
					return false;
				}
				//status.text('Загрузка...');
        $('#upload button').text('Загрузка...');
			},
			onComplete: function(file, response){
        ext = ((/[.]/.exec(file)) ? /[^.]+$/.exec(file.toLowerCase()) : '');
				//On completion clear the status
				status.text('');
        //alert(response);
				//Add uploaded file to list
				if(response === "success")
        {
					//$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
					$('#error').addClass('hidden');
          //$('#photo').removeClass('hidden');
					$('input[name=doc_file]').val(file.toLowerCase());
          //uploadButton = 'Изменить файл';
				}
        else
        {
					$('#error').removeClass('hidden');
          $('#error').text('Файл ' + file + ' не загружен. Возможно он имеет размер больше <?=ini_get("upload_max_filesize")?>');
          $('input[name=doc_file]').val('');
				}
        
        $('#upload button').text(uploadButton);
			}
		});
  });
</script>
