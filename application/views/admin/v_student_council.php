<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/studentcouncil', 'К составу студсовета')?>
  </div>

  <?=Form::open('admin/studentcouncil/save')?>
    <div class="col-lg-2 col-sm-3 col-xs-12 text-center">
      <div id="upload">
        <button type="button" class="btn btn-info btn-xs"><?=($student->photo ? 'Изменить фото' : 'Добавить фото')?></button>
      </div>

      <div id="error" class="hidden">
      </div>

      <div id="photo">
        <?=HTML::image(($student->photo ? $dir_img_student_council.$student->photo : $dir_img.'photo.jpg'), array('class' => 'img img-responsive center-block', 'alt' => $site_name))?>
      </div>
    </div>

    <div class="col-lg-10 col-sm-9 col-xs-12">
      <div class="form-group">
        <?=Form::label('post', 'Должность')?>
        <?=Form::input('post', $student->post, array('class' => 'form-control', 'placeholder' => 'Поле post', 'autofocus'))?>
      </div>

      <div class="form-group">
        <?=Form::label('student', 'Фамилия и имя студента')?>
        <?=Form::input('student', $student->student, array('class' => 'form-control', 'placeholder' => 'Поле student'))?>
      </div>

      <div class="form-group">
        <?=Form::label('order_no', 'Номер по порядку при отображении в списке')?>
        <?=Form::input('order_no', $student->order_no, array('class' => 'form-control', 'placeholder' => 'Поле order_no'))?>
      </div>
    </div>

    <?=Form::hidden('src', ($student->photo ? $dir_img_student_council.$student->photo : ''))?>
    <?=Form::hidden('id', $student->id)?>
  
    <div class="col-xs-12">
      <div class="form-submit text-center">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($student->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($student->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
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
			action: '/admin/studentcouncil/upload/',
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
					$('#photo .img').attr('src', '<?=$dir_img_student_council?>temp/' + file.toLowerCase());
					$('input[name=src]').val(file.toLowerCase());
          uploadButton = 'Изменить фото';
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
