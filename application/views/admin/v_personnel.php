<!-- Скрипт для ajax-загрузки -->
<?=HTML::script($dir_js.'ajaxupload.3.5.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> personnel</h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/personnel', 'К списку сотрудников')?>
  </div>

  <?=Form::open('admin/personnel/save')?>
    <div class="form-group col-sm-4 col-xs-12">
      <?=Form::label('family', 'Фамилия')?>
      <?=Form::input('family', $personnel->family, array('class' => 'form-control', 'placeholder' => 'Поле family', 'autofocus'))?>
    </div>

    <div class="form-group col-sm-4 col-xs-12">
      <?=Form::label('name', 'Имя')?>
      <?=Form::input('name', $personnel->name, array('class' => 'form-control', 'placeholder' => 'Поле name'))?>
    </div>

    <div class="form-group col-sm-4 col-xs-12">
      <?=Form::label('patronymic', 'Отчество')?>
      <?=Form::input('patronymic', $personnel->patronymic, array('class' => 'form-control', 'placeholder' => 'Поле patronymic'))?>
    </div>

    <div class="col-sm-9 col-xs-12">
      <div class="form-group">
        <?=Form::label('department', 'Кафедра')?>
        <select name="department" class="form-control">
          <option value="0" <?=($personnel->department_id ? '' : 'selected')?>>Поле department_id</option>

          <? foreach ($departments as $department): ?>
            <option <?=($personnel->department_id == $department->id ? 'selected' : '')?> value="<?=$department->id?>"><?=$department->department?></option>
          <? endforeach ?>
        </select>
      </div>

      <div class="form-group">
        <?=Form::label('post', 'Должность')?>
        <select name="post" class="form-control">
          <option value="0" <?=($personnel->post_id ? '' : 'selected')?>>Поле post_id</option>

          <? foreach ($posts as $post): ?>
            <option <?=($personnel->post_id == $post->id ? 'selected' : '')?> value="<?=$post->id?>"><?=$post->post?></option>
          <? endforeach ?>
        </select>
      </div>
      
      <div class="form-group">
        <?=Form::label('acadimic_title', 'Учёное звание')?>
        <select name="academic_title" class="form-control">
          <option value="0" <?=($personnel->academic_title_id ? '' : 'selected')?>>Поле academic_title_id</option>

          <? foreach ($academic_titles as $academic_title): ?>
            <option <?=($personnel->academic_title_id == $academic_title->id ? 'selected' : '')?> value="<?=$academic_title->id?>"><?=$academic_title->academic_title?></option>
          <? endforeach ?>
        </select>
      </div>

      <div class="form-group">
        <?=Form::label('degree', 'Учёные степени')?>
        <? $personnel_degrees = $personnel->degrees->find_all() ?>
        <table class="degree">
          <? foreach ($personnel_degrees as $degree): ?>
            <tr>
              <td><?=$degree->degree?></td>
              <td>
                <a href="/admin/personnel/deletedegree/<?=$personnel->id?>/<?=$degree->id?>" title="Удалить учёную степень">
                  <i class="fa fa-minus-circle text-danger"></i>
                </a>
              </td>
            </tr>
          <? endforeach ?>
        </table>

        <select name="degree" class="form-control">
          <option value="0" selected>Добавить учёную степень (поле degree_id)</option>

          <? foreach ($degrees as $degree): ?>
            <option value="<?=$degree->id?>"><?=$degree->degree?></option>
          <? endforeach ?>
        </select>
      </div>

      <div class="form-group">
        <?=Form::label('employment_type', 'Тип занятости')?>
        <select name="employment_type" class="form-control">
          <option value="0" <?=($personnel->employment_type_id ? '' : 'selected')?>>Поле employment_type_id</option>

          <? foreach ($employment_types as $employment_type): ?>
            <option <?=($personnel->employment_type_id == $employment_type->id ? 'selected' : '')?> value="<?=$employment_type->id?>"><?=$employment_type->employment_type?></option>
          <? endforeach ?>
        </select>
      </div>
  
      <div class="form-group">
        <?=Form::label('fired', 'Уволен(а)')?>&nbsp;
        <?=Form::checkbox('fired', $personnel->fired, ($personnel->fired == 1))?>
      </div>
    </div>
  
    <div class="col-sm-3 col-xs-12 text-center">
      <div id="upload">
        <button type="button" class="btn btn-info btn-xs"><?=($personnel->photo ? 'Изменить фото' : 'Выбрать фото')?></button>
      </div>

      <div id="error" class="hidden">
      </div>
      
      <div id="photo">
        <?=HTML::image(($personnel->photo ? $dir_img_personnel.$personnel->photo : $dir_img_personnel.'photo.jpg'), array('class' => 'img img-responsive center-block', 'alt' => $site_name))?>
      </div>
  
      <div class="remark bg-danger text-danger text-left">
        Внимание!!!<br>Выбранная фотография должна иметь соотношение сторон <strong>3х4</strong>.
      </div>
    </div>

    <div class="form-group col-xs-12">
      <?=Form::label('add_info', 'Дополнительные сведения')?>
      <?=Form::textarea('add_info', $personnel->add_info, ['class' => 'form-control', 'rows'=> 15, 'placeholder' =>
        'Поле add_info'])?>
    </div>

  <div class="remark col-xs-12 bg-danger text-danger">
    <p>
      При вводе дополнительных сведений для форматирования используйте язык разметки текста <strong>Markdown</strong>.
    </p>
    Описание синтаксиса языка разметки <strong>Markdown</strong> можно почитать на сайтах <a href="http://rukeba.com/by-the-way/markdown-sintaksis-po-russki/" target="_blank">http://rukeba.com/by-the-way/markdown-sintaksis-po-russki</a> или <a href="http://paulradzkov.com/2014/markdown_cheatsheet/" target="_blank">http://paulradzkov.com/2014/markdown_cheatsheet/</a>
  </div>

  <?=Form::hidden('src', ($personnel->photo ? $dir_img_personnel.$personnel->photo : ''))?>
    <?=Form::hidden('id', $personnel->id)?>
  
    <div class="col-xs-12">
      <div class="form-submit text-center">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($personnel->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($personnel->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
      </div>
    </div>
  
  <? Form::close() ?>

  <div class="col-xs-12 text-right">
    <?=HTML::anchor('admin/personnel', 'К списку сотрудников')?>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('input[type=checkbox]').on('click', function () {
      if($(this).val() == '0')
      {
        $(this).val('1');
        $(this).attr('checked', true);
      }
      else
      {
        $(this).val('0');
        $(this).attr('checked', false);
      }
    });
    
    $('select').change(function () {
      if($(this).val() == '0')
        $(this).addClass('select-placeholder');
      else
        $(this).removeClass('select-placeholder');
    });
    
    $('select').change();
    
    var btnUpload=$('#upload');
		var status=$('#status');
    var uploadButton = $('#upload button').text();

    new AjaxUpload(btnUpload, {
			action: '/admin/personnel/upload/',
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
					$('#photo img').attr('src', '<?=$dir_img_personnel?>temp/' + file.toLowerCase());
					$('input[name=src]').val(file.toLowerCase());
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
