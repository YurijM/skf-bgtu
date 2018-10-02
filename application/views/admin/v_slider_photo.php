<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<div class="new-photo">
  <div class="back col-sm-4 col-xs-12">
    <a href="/admin/slider">Вернуться к списку</a>
  </div>
  
  <div id="upload" class="col-sm-8 col-xs-12">
    <button type="button" class="btn btn-info btn-xs">Выбрать фотографию</button>
  </div>
  
  <div class="remark col-xs-12 bg-danger text-danger">
    Для получения лучшего эффекта при работе слайдера на главной странице сайта, <strong>желательно</strong>, чтобы выбранная фотография имела соотношение сторон <strong>3х2</strong>.
  </div>
  
  <div id="error" class="hidden">
  </div>
  
  <div id="photo" class="col-xs-12 text-center hidden">
    <?=HTML::image('', array('class' => 'img img-responsive', 'alt' => $site_name))?>
    
    <?=Form::open('/admin/slider/savephoto/')?>
      <?=Form::hidden('src', '')?>
    
      <div class="form-submit form-group">
        <?=Form::submit('save', 'Добавить в слайдер', array('class' => 'btn btn-success btn-sm'))?>
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
			action: '/admin/slider/upload',
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
					$('#photo img').attr('src', '<?=$dir?>temp/' + file.toLowerCase());
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
