<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<div class="about-branch">
  <div class="back col-sm-4 col-xs-12">
    <a href="/admin/aboutbranch">Вернуться к списку фотографий</a>
  </div>
  
  <div id="upload" class="col-sm-8 col-xs-12">
    <button type="button" class="btn btn-info btn-xs"><?=($photo->id ? 'Изменить фото' : 'Выбрать фотографию')?></button>
  
    <div class="text-danger small">
      Внимание! Имя загружаемого файла <b>не должно</b> содержать <b>русских</b> букв
    </div>
  </div>
  
  <div id="error" class="hidden">
  </div>
  
  <div id="photo" class="col-xs-12 text-center <?=($photo->id ? '' : 'hidden')?>">
    <?=HTML::image(($photo->id ? $dir_img_about_branch.$photo->photo : ''), ['class' => 'img img-responsive', 'alt' => $site_name])?>
    
    <?=Form::open('/admin/aboutbranch/save/'.$photo->id)?>
      <?=Form::hidden('src', ($photo->id ? $dir_img_about_branch.$photo->photo : ''))?>
      
      <div class="form-group col-md-1 col-sm-2 col-xs-3">
        <?=Form::label('order_no', '№п/п')?>
        <?=Form::input('order_no', $photo->order_no, ['class' => 'form-control'])?>
      </div>
    
      <div class="form-group col-md-11 col-sm-10 col-xs-9">
        <?=Form::label('description', 'Краткое описание')?>
        <?=Form::input('description', ($photo->id ? $photo->description : ''), ['class'  => 'form-control'])?>
      </div>
    
      <div class="form-submit form-group">
        <!-- В режиме редактирования кнопка имеет имя 'edit', а при добавлении нового фото - 'add' -->
        <?=Form::submit(($photo->id ? 'edit' : 'add'), 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($photo->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($photo->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
      </div>
    <?=Form::close()?>
  </div>
</div>

<script>
	$(document).ready(function(){
    var btnUpload=$('#upload');
		var status=$('#status');
    var uploadButton = $('#upload button').text();

    new AjaxUpload(btnUpload, {
			action: '/admin/aboutbranch/upload/',
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
					$('#photo img').attr('src', '<?=$dir_img_about_branch?>temp/' + file.toLowerCase());
					$('#photo input[name="src"]').val(file.toLowerCase());
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
