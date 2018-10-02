<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/publications', 'К списку изданий')?>
  </div>

  <?=Form::open('admin/publications/save')?>
    <div class="col-md-3 col-sm-4 col-xs-12 text-center">
      <div id="upload">
        <button type="button" class="btn btn-info btn-xs"><?=($publication->img_file ? 'Изменить миниатюру' : 'Добавить миниатюру')?></button>
      </div>

      <div id="error" class="hidden">
      </div>

      <div id="photo">
        <?=HTML::image(($publication->img_file ? $dir_img_publications.$publication->img_file : $dir_img.'photo.jpg'), array('class' => 'img img-responsive center-block', 'alt' => $site_name))?>
      </div>
    </div>

    <div class="col-md-9 col-sm-8 col-xs-12">
      <div class="form-group col-xs-12">
        <?=Form::label('year', 'Год издания')?>
        <?=Form::input('year', $publication->year, array('class' => 'form-control', 'placeholder' => 'Поле year', 'autofocus'))?>
      </div>

      <div class="form-group col-xs-12">
        <?=Form::label('title', 'Название издания')?>
        <?=Form::textarea('title', $publication->title, array('class' => 'form-control', 'rows' => 2, 'placeholder' => 'Поле title'))?>
      </div>

      <div class="form-group col-xs-12">
        <?=Form::label('bibliography', 'Библиографическая карточка')?>
        <?=Form::textarea('bibliography', $publication->bibliography, array('class' => 'form-control', 'rows' => 3, 'placeholder' => 'Поле bibliography'))?>
      </div>

      <div class="form-group col-xs-12">
        <?=Form::label('for_company', 'Показывать предприятиям')?>
        <?=Form::select('for_company', [0 => 'нет', 1 => 'да'], $publication->for_company, array('class' => 'form-control', 'placeholder' => 'Поле for_company'))?>
      </div>
    </div>
  
    <div class="remark col-xs-12 bg-danger text-danger">
      <p>
        При вводе описания для форматирования используйте <strong>HTML-тэги</strong>.
      </p>
        <strong><span class="text-uppercase">Обязательно !!!</span></strong><br>
      Для того, чтобы перейти на новую строку текста используйте либо тэг <strong><?=HTML::chars('<br>')?></strong>, либо обрамите абзац тэгами <strong><?=HTML::chars('<p> </p>')?></strong>.
    </div>
  
    <div class="form-group col-xs-12">
      <?=Form::label('description', 'Описание')?>
      <?=Form::textarea('description', $publication->description, array('class' => 'form-control', 'rows' => 10, 'placeholder' => 'Поле description'))?>
    </div>

    <div class="input-group col-xs-12">
        <span id="upload-doc" class="input-group-btn">
          <button class="btn btn-info" type="button">Выберите файл с оглавлением издания</button>
        </span>
      <?=Form::input('doc_file', $publication->doc_file, array('class' => 'form-control', 'readonly'))?>
    </div><!-- /input-group -->

    <div class="remark col-xs-12 bg-danger text-danger text-left">
      Внимание !!! <b>Имя файла</b> и его <b>расширение</b> должно состоять из <b>строчных латинских</b> букв! Желательно, чтобы файл был в формате <b>pdf</b>.
    </div>

    <?=Form::hidden('src', ($publication->img_file ? $dir_img_publications.$publication->img_file : ''))?>
    <?=Form::hidden('id', $publication->id)?>
  
    <div class="col-xs-12">
      <div class="form-submit text-center">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($publication->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($publication->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
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
			action: '/admin/publications/upload/',
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
          $('#photo').removeClass('hidden');
					$('#photo .img').attr('src', '<?=$dir_img_publications?>temp/' + file.toLowerCase());
					$('input[name=src]').val(file.toLowerCase());
          uploadButton = 'Изменить миниатюру';
				}
        else
        {
					$('#photo').addClass('hidden');
					$('#error').removeClass('hidden');
          
          switch (response)
          {
            case 'file_is_existed':
              $('#error').text('Файл с именем ' + file + ' уже загружен на сервер. Измените имя загружаемого файла.');
              break;
            default:
              $('#error').text('Файл ' + file + ' не загружен. Возможно он имеет размер больше <?=ini_get("upload_max_filesize")?>');
              break;
          }
				}
        
        $('#upload button').text(uploadButton);
			}
		});

    var btnUploadDoc=$('#upload-doc');
    var uploadButtonDoc = $('#upload-doc button').text();

    new AjaxUpload(btnUploadDoc, {
      action: '/admin/publications/uploaddoc/',
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
