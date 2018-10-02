<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/equipment', 'К списку оборудования')?>
  </div>

  <?=Form::open('admin/equipment/save')?>
    <div class="col-sm-4 col-xs-12 text-center center-block">
      <div id="upload">
        <button type="button" class="btn btn-info btn-xs"><?=($equipment->img_file ? 'Изменить оборудование' : 'Добавить оборудование')?></button>
      </div>

      <div id="error" class="hidden">
      </div>

      <div id="photo">
        <?=HTML::image(($equipment->img_file ? $dir_img_equipment.$equipment->img_file : $dir_img.'photo.jpg'), array('class' => 'img img-responsive center-block', 'alt' => $site_name))?>
      </div>
    </div>

    <div class="form-group col-sm-8 col-xs-12">
      <?=Form::label('description', 'Описание оборудования')?>
      <?=Form::textarea('description', $equipment->description, array('class' => 'form-control', 'rows' => 5, 'placeholder' => 'Поле description'))?>
    </div>

    <?=Form::hidden('src', ($equipment->img_file ? $dir_img_equipment.$equipment->img_file : ''))?>
    <?=Form::hidden('id', $equipment->id)?>

    <div class="form-submit col-xs-12 text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($equipment->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($equipment->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  
  <? Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    var btnUpload=$('#upload');
		var status=$('#status');
    var uploadButton = $('#upload button').text();

    new AjaxUpload(btnUpload, {
			action: '/admin/equipment/upload/',
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
				if (response === "success")
        {
					//$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
					$('#error').addClass('hidden');
          $('#photo').removeClass('hidden');
					$('#photo .img').attr('src', '<?=$dir_img_equipment?>temp/' + file.toLowerCase());
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
  });
</script>
