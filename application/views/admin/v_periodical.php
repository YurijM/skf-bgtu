<!-- Стиль и скрипт для datepicker -->
<?=HTML::style($dir_css.'jquery-ui.min.css')?>
<?=HTML::script($dir_js.'jquery-ui.min.js')?>

<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/periodicals', 'К списку периодических изданий')?>
  </div>

  <?=Form::open('admin/periodicals/save')?>
    <div class="col-md-3 col-xs-4 text-center">
      <div id="upload">
        <button type="button" class="btn btn-info btn-xs"><?=($periodical->img_file ? 'Изменить миниатюру' : 'Добавить миниатюру')?></button>
      </div>

      <div id="error" class="hidden">
      </div>

      <div id="photo">
        <?=HTML::image(($periodical->img_file ? $dir_img_periodicals.$periodical->img_file : $dir_img.'photo.jpg'), array('class' => 'img img-responsive center-block', 'alt' => $site_name))?>
      </div>
    </div>

    <div class="col-md-9 col-xs-8">
      <div class="remark bg-danger text-danger">
        Внимание !!! Не используйте файлы миниатюр с именами, содержащими <strong>русские</strong> буквы!<br>
        Поддерживаемые форматы <strong>JPG</strong> и <strong>PNG</strong>
      </div>

      <div class="form-group">
        <?=Form::label('periodical', 'Периодическое издание')?>
        <?=Form::input('periodical', $periodical->periodical, array('class' => 'form-control', 'placeholder' => 'Поле periodical', 'autofocus'))?>
      </div>

      <div class="form-group col-md-4 col-sm-3 col-xs-12">
        <?=Form::label('year', 'Год')?>
        <?=Form::input('year', $periodical->year, array('class' => 'form-control', 'placeholder' => 'Поле year'))?>
      </div>

      <div class="form-group col-md-4 col-sm-3 col-xs-12">
        <?=Form::label('number', 'Номер')?>
        <?=Form::input('number', ($periodical->number ? $periodical->number : ''), array('class' => 'form-control', 'placeholder' => 'Поле number'))?>
      </div>

      <div class="form-group col-md-4 col-sm-6 col-xs-12">
        <?=Form::label('db', 'Реферативная  БД')?>
        <?=Form::select('db', $db, $periodical->db, array('class' => 'form-control', 'placeholder' => 'Поле db'))?>
      </div>

      <div class="form-group col-md-6 col-xs-12">
        <?=Form::label('date', 'Дата издания')?>
        <?=Form::input('date', Helper_Addfunction::date_from_mysql($periodical->date), array('class' => 'form-control', 'placeholder' => 'Поле date'))?>
      </div>
      
      <div class="remark bg-info text-primary col-md-6 col-xs-12">
        Дата издания используется только для сортировки при отображении публикаций
      </div>
      
      <?=Form::hidden('src', ($periodical->img_file ? $dir_img_periodicals.$periodical->img_file : ''))?>
      <?=Form::hidden('id', $periodical->id)?>

      <div class="form-submit text-center col-xs-12">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($periodical->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($periodical->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
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
			action: '/admin/periodicals/upload/',
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
					$('#photo .img').attr('src', '<?=$dir_img_periodicals?>temp/' + file.toLowerCase());
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
  });
</script>
