<!-- Стиль и скрипт для datepicker -->
<?=HTML::style($dir_css.'jquery-ui.min.css')?>
<?=HTML::script($dir_js.'jquery-ui.min.js')?>

<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/patents', 'К списку патентов и полезных моделей')?>
  </div>

  <?=Form::open('admin/patents/save')?>
    <div class="col-lg-7 col-sm-8 col-xs-12">
      <div class="col-lg-5 col-sm-6 col-xs-12 text-center">
        <div id="upload">
          <button type="button" class="btn btn-info btn-xs"><?=($patent->img_file ? 'Изменить миниатюру' : 'Добавить миниатюру')?></button>
        </div>

        <div id="error" class="hidden">
        </div>

        <div id="photo">
          <?=HTML::image(($patent->img_file ? $dir_img_patents.$patent->img_file : $dir_img.'photo.jpg'), array('class' => 'img img-responsive center-block', 'alt' => $site_name))?>
        </div>
      </div>

      <div class="col-lg-7 col-sm-6 col-xs-12">
        <div class="form-group">
          <?=Form::label('is_patent', 'Патент')?>
          <?=Form::radio('is_patent', 1, ($patent->is_patent == 1 ? true : false))?>
          <?=Form::label('is_patent', 'Полезная модель')?>
          <?=Form::radio('is_patent', 0, ($patent->is_patent == 0 ? true : false))?>
        </div>

        <div class="form-group">
          <?=Form::label('number', 'Номер патента (полезной модели)')?>
          <?=Form::input('number', $patent->number, array('class' => 'form-control', 'placeholder' => 'Поле number', 'autofocus'))?>
        </div>

        <div class="form-group">
          <?=Form::label('date', 'Дата')?>
          <?=Form::input('date', Helper_Addfunction::date_from_mysql($patent->date), array('class' => 'form-control', 'placeholder' => 'Поле date'))?>
        </div>

        <div class="form-group">
          <?=Form::label('application_area', 'Область применения')?>
          <?=Form::input('application_area', $patent->application_area, array('class' => 'form-control', 'placeholder' => 'Поле application_area'))?>
        </div>
      </div>
    </div>
  
    <div class="form-group col-lg-5 col-sm-4 col-xs-12">
      <?=Form::label('patent', 'Описание патента или полезной модели')?>
      <?=Form::textarea('patent', $patent->patent, array('class' => 'form-control', 'rows' => 9, 'placeholder' => 'Поле patent'))?>
    </div>

    <div class="input-group col-xs-12">
      <span id="upload-doc" class="input-group-btn">
        <button class="btn btn-info" type="button">Выберите файл с документом</button>
      </span>
      <?=Form::input('doc_file', $patent->doc_file, array('class' => 'form-control', 'readonly'))?>
    </div><!-- /input-group -->

    <div class="remark col-xs-12 bg-danger text-danger text-left">
      Внимание !!! Не используйте файлы с именами, содержащими <strong>русские</strong> буквы! Желательно, чтобы файл был в формате <strong>pdf</strong>.
    </div>

    <?=Form::hidden('src', ($patent->img_file ? $dir_img_patents.$patent->img_file : ''))?>
    <?=Form::hidden('id', $patent->id)?>
  
    <div class="col-xs-12">
      <div class="form-submit text-center">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($patent->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($patent->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
      </div>
    </div>
  
  <? Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    $('[name=date]').datepicker({
		});

    var btnUpload=$('#upload');
		var status=$('#status');
    var uploadButton = $('#upload button').text();

    new AjaxUpload(btnUpload, {
			action: '/admin/patents/upload/',
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
					$('#photo .img').attr('src', '<?=$dir_img_patents?>temp/' + file.toLowerCase());
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
			action: '/admin/patents/uploaddoc/',
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
