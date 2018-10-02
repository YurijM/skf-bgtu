<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/universityscience', 'К списку журналов')?>
  </div>

  <?=Form::open('admin/universityscience/save')?>
    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 text-center">
      <div id="upload">
        <button type="button" class="btn btn-info btn-xs"><?=($magazine->img_file ? 'Изменить миниатюру' : 'Добавить миниатюру')?></button>
      </div>

      <div id="error" class="hidden">
      </div>

      <div id="photo">
        <?=HTML::image(($magazine->img_file ? $dir_img_university_science.$magazine->img_file : $dir_img.'photo.jpg'), array('class' => 'img img-responsive center-block', 'alt' => $site_name))?>
      </div>
    </div>

    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
      <div class="form-group col-xs-12">
        <?=Form::label('year', 'Год')?>
        <?=Form::input('year', $magazine->year, array('class' => 'form-control', 'placeholder' => 'Поле year', 'autofocus'))?>
      </div>
  
      <div class="form-group col-sm-4 col-xs-12">
        <?=Form::label('number', 'Номер')?>
        <?=Form::input('number', $magazine->number, array('class' => 'form-control', 'placeholder' => 'Поле number'))?>
      </div>

      <div class="input-group col-xs-12">
        <span id="upload-doc" class="input-group-btn">
          <button class="btn btn-info" type="button">Выберите файл с журналом</button>
        </span>
        <?=Form::input('doc_file', $magazine->doc_file, array('class' => 'form-control', 'readonly'))?>
      </div><!-- /input-group -->

      <div class="remark col-xs-12 bg-danger text-danger text-left">
        Внимание !!! Не используйте файлы с именами, содержащими <strong>русские</strong> буквы!<br>
        Желательно, чтобы файл был в формате <strong>pdf</strong>.
      </div>

      <?=Form::hidden('src', ($magazine->img_file ? $dir_img_university_science.$magazine->img_file : ''))?>
      <?=Form::hidden('id', $magazine->id)?>

      <div class="form-submit col-xs-12 text-center">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($magazine->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($magazine->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
      </div>
    </div>
  
  <? Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    var btnUpload=$('#upload');
		var status=$('#status');
    var uploadButton = $('#upload button').text();

    new AjaxUpload(btnUpload, {
			action: '/admin/universityscience/upload/',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					$('#photo').addClass('hidden');
					$('#error').removeClass('hidden');
          $('#error').text('Файл ' + file + ' не загружен. Поддерживаются только форматы JPG, PNG или GIF.');
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
					$('#photo .img').attr('src', '<?=$dir_img_university_science?>temp/' + file.toLowerCase());
					$('input[name=src]').val(file.toLowerCase());
          uploadButton = 'Изменить миниатюру';
				}
        else
        {
					$('#photo').addClass('hidden');
					$('#error').removeClass('hidden');
          $('#error').text('Файл ' + file + ' не загружен. Возможно он имеет размер больше <?=ini_get("upload_max_filesize")?>');
				}
        
        $('#upload button').text(uploadButton);
			}
		});
    
    var btnUploadDoc=$('#upload-doc');
    var uploadButtonDoc = $('#upload-doc button').text();

    new AjaxUpload(btnUploadDoc, {
			action: '/admin/universityscience/uploaddoc/',
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
					$('input[name=doc_file]').val(file.toLowerCase());
          uploadButtonDoc = 'Изменить файл';
				}
        else
        {
					$('#error-doc').removeClass('hidden');
          $('#error-doc').text('Файл ' + file + ' не загружен. Возможно он имеет размер больше <?=ini_get("upload_max_filesize")?>');
          $('input[name=doc_file]').val('');
				}
        
        $('#upload-doc button').text(uploadButtonDoc);
			}
		});
  });
</script>
