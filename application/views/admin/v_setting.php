<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> settings</h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/settings', 'К списку настроек')?>
  </div>

  <?=Form::open('admin/settings/save', array('class' => 'col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12'))?>
    <div class="form-group">
      <?=Form::label('key', 'Параметр')?>
      <?=Form::input('key', $settings->key, array('class' => 'form-control', 'placeholder' => 'Поле key', 'autofocus'))?>
    </div>

    <div class="form-group">
      <?=Form::label('value', 'Значение')?>
      <?=Form::textarea('value', $settings->value, array('class' => 'form-control', 'placeholder' => 'Поле value', 'rows' => 3))?>
    </div>

    <div class="form-group">
      <?=Form::label('description', 'Описание')?>
      <?=Form::textarea('description', $settings->description,
                        array('class' => 'form-control', 'placeholder' => 'Поле description', 'rows' => 5))?>
    </div>
  
    <?=Form::hidden('id', $settings->id)?>
  
    <div class="form-submit text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($settings->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($settings->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <? Form::close() ?>
</div>
    