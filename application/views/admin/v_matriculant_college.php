<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/matriculants/'.$page, 'К списку абитуриентов')?>
  </div>

  <div class="remark bg-danger text-danger">
    Перед вводом данных по абитуриенту сначала убедитесь, что <strong>профили</strong> заведены, и
    <strong>предметы</strong>, по которым подсчитываются баллы за ЕГЭ, добавлены в соответствующее направление.
  </div>

	<div class="remark bg-success text-success">
		Для того, чтобы на сайте в разделе <b>Абитуриенту - Поданные заявления</b> отобразились актуальные данные о поданных заявлениях, необходимо ввести данные по
		направлениям в разделе админки <b>Количество мест для поступления</b>
	</div>

	<?=Form::open('admin/matriculants/save/'.$matriculant->id.'/'.$page)?>
    <div class="form-group">
      <?=Form::label('year', 'Год поступления')?>
      <?=Form::input('year', $matriculant->year ? $matriculant->year : $current_year, array('class' => 'form-control', 'placeholder' => 'Поле year', 'autofocus'))?>
    </div>
      
    <div class="form-group">
      <?=Form::label('family', 'Фамилия')?>
      <?=Form::input('family', $matriculant->family, array('class' => 'form-control', 'placeholder' => 'Поле family'))?>
    </div>
      
    <div class="form-group">
      <?=Form::label('name', 'Имя')?>
      <?=Form::input('name', $matriculant->name, array('class' => 'form-control', 'placeholder' => 'Поле name'))?>
    </div>
      
    <div class="form-group">
      <?=Form::label('patronymic', 'Отчество')?>
      <?=Form::input('patronymic', $matriculant->patronymic, array('class' => 'form-control', 'placeholder' => 'Поле patronymic'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('section', 'Профиль')?>
      <select name="section" class="form-control placeholder">
        <option value="0" <?=($matriculant->section_id ? '' : 'selected')?>>Поле section_id</option>

        <? foreach ($sections as $section): ?>
          <option <?=($matriculant->section_id == $section->id ? 'selected' : '')?> value="<?=$section->id?>"><?=$education_types[$section->direction->education].' - '.($section->short ? : $section->section)?></option>
        <? endforeach ?>
      </select>
    </div>

    <?=Form::hidden('id', $matriculant->id)?>

    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($matriculant->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($matriculant->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    $("select.placeholder").change(function () {
      if($(this).val() == "0")
        $(this).addClass("select-placeholder");
      else
        $(this).removeClass("select-placeholder");
    });

    $("select").change();
    
    $("[name=section]").change();

    $("[name=year]").focus();
  });
</script>