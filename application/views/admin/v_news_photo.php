<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<div class="new-photo">
  <div class="back col-sm-4 col-xs-12">
    <a href="/admin/news/edit/<?=$news->id.'/'.$page?>">Вернуться к новости</a>
  </div>
  
  <div id="upload" class="col-sm-8 col-xs-12">
    <button type="button" class="btn btn-info btn-xs"><?=($photo ? 'Изменить фото' : 'Выбрать фотографию')?></button>
  </div>
  
  <div id="error" class="hidden">
  </div>
  
  <div id="photo" class="col-xs-12 text-center <?=($photo ? '' : 'hidden')?>">
    <?=HTML::image(($photo ? $dir_img_news.$photo->photo : ''), array('class' => 'img img-responsive', 'alt' => $site_name))?>
    
    <?=Form::open('/admin/news/savephoto/'.$news->id.'/'.$page.($photo ? '/'.$photo->id : ''))?>
      <?=Form::hidden('src', ($photo ? $dir_img_news.$photo->photo : ''))?>
      
      <div class="form-group">
        <?=Form::input('description', ($photo ? $photo->description : ''), array('class'  => 'form-control', 'placeholder' => 'Описание фотографии'))?>
      </div>
      
      <div class="form-group">
        <input type="checkbox" name ="is_main" <?=($photo ? ($photo->id == $news->news_galery_id ? 'checked="checked"' : '') : '')?> value="<?=($news->news_galery_id ? 1 : 0)?>">&nbsp;Главная фотография
      </div>
    
      <div class="form-submit form-group">
        <!-- В режиме редактирования кнопка имеет имя 'edit', а при добавлении нового фото - 'add' -->
        <?=Form::submit(($photo ? 'edit' : 'add'), 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($photo ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($photo ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
      </div>
    <?=Form::close()?>
  </div>
</div>

<script>
	$(document).ready(function(){
    $('input[name=is_main]').on('click', function() {
      if ($(this).prop("checked"))
      {
        $(this).val(1);
      }
      else
      {
        $(this).val(0);
      }
    });
    
    var btnUpload=$('#upload');
		var status=$('#status');
    var uploadButton = $('#upload button').text();

    new AjaxUpload(btnUpload, {
			action: '/admin/news/upload/',
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
					$('#photo img').attr('src', '<?=$dir_img_news?>temp/' + file.toLowerCase());
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
