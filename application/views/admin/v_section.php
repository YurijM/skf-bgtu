<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/sections', 'К списку профилей')?>
  </div>

  <?=Form::open('admin/sections/save')?>
    <div class="form-group">
      <?=Form::label('direction', 'Направление')?>
      <select name="direction" class="form-control">
        <option value="0" <?=($section->direction_id ? '' : 'selected')?>>Поле direction_id</option>

        <? foreach ($directions as $direction): ?>
          <option <?=($section->direction_id == $direction->id ? 'selected' : '')?> value="<?=$direction->id?>"><?=$education_forms[$direction->education].' - '.$direction->direction.' ('.$direction->code.')'?></option>
        <? endforeach ?>
      </select>
    </div>
  
    <div class="form-group">
      <?=Form::label('section', 'Профиль')?>
      <?=Form::input('section', $section->section, array('class' => 'form-control', 'placeholder' => 'Поле section'))?>
    </div>

    <div class="form-group">
      <?=Form::label('short', 'Сокращённое название')?>
      <?=Form::input('short', $section->short, array('class' => 'form-control', 'placeholder' => 'Поле short'))?>
    </div>

    <?=Form::hidden('id', $section->id)?>

    <div class="form-submit col-xs-12 text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($section->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($section->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  
  <? Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    $('select').change(function () {
      if($(this).val() == '0')
        $(this).addClass('select-placeholder');
      else
        $(this).removeClass('select-placeholder');
    });
  });
</script>