<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/applicationsnumbercollege', 'К списку поданных заявлений')?>
  </div>

  <?=Form::open('admin/applicationsnumbercollege/save')?>
    <div class="form-group">
      <?=Form::label('year', 'Год поступления')?>
      <?=Form::select('year', $years, ($applications->year ? $applications->year : $year), array('class' => 'form-control'))?>
    </div>

    <div class="form-group">
      <?=Form::label('direction', 'Направление')?>
      <select name="direction" class="form-control">
        <option value="0" <?=($applications->direction_id ? '' : 'selected')?>>Поле direction_id</option>

        <? foreach ($directions as $direction): ?>
          <option <?=($applications->direction_id == $direction->id ? 'selected' : '')?> value="<?=$direction->id?>"><?=$education_forms[$direction->education].' - '.$direction->direction.' ('.$direction->code.')'?></option>
        <? endforeach ?>
      </select>
    </div>
  
    <div class="form-group">
      <?=Form::label('count', 'Количество мест')?>
      <?=Form::input(
      	'count',
	      $applications->count,
	      array(
	      	'class' => 'form-control',
		      'placeholder' => 'Поле сщгте'))?>
    </div>

    <?=Form::hidden('id', $applications->id)?>

    <div class="form-submit col-xs-12 text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($applications->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($applications->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
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
    
    $('select').change();
  });
</script>