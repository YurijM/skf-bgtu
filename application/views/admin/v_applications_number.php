<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/applicationsnumber', 'К списку поданных заявлений')?>
  </div>

  <?=Form::open('admin/applicationsnumber/save')?>
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
      <?=Form::label('budget', 'Количество бюджетных мест')?>
      <?=Form::input('budget', $applications->budget, array('class' => 'form-control', 'placeholder' => 'Поле budget'))?>
    </div>

    <div class="form-group">
      <?=Form::label('by_contract', 'Количество мест по договору')?>
      <?=Form::input('by_contract', $applications->by_contract, array('class' => 'form-control', 'placeholder' => 'Поле by_contract'))?>
    </div>

<!--    <div class="form-group">
      <?/*=Form::label('current_count', 'Количество поданных заявлений')*/?>
      <?/*=Form::input('current_count', $applications->current_count, array('class' => 'form-control', 'placeholder' => 'Поле current_count'))*/?>
    </div>
-->
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