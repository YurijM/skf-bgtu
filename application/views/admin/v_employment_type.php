<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/employmenttypes', 'К списку типов занятости')?>
  </div>

  <?=Form::open('admin/employmenttypes/save')?>
    <div class="form-group">
      <?=Form::label('employment_type', 'Тип занятости')?>
      <?=Form::input('employment_type', $employment_type->employment_type, array('class' => 'form-control', 'placeholder' => 'Поле employment_type', 'autofocus'))?>
    </div>

    <div class="form-group">
      <?=Form::label('plural', 'Тип занятости во множественном числе')?>
      <?=Form::input('plural', $employment_type->plural, array('class' => 'form-control', 'placeholder' => 'Поле plural', 'autofocus'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('order_no', 'Порядок отображения')?>
      <?=Form::input('order_no', $employment_type->order_no, array('class' => 'form-control', 'placeholder' => 'Поле order_no'))?>
    </div>
  
    <?=Form::hidden('id', $employment_type->id)?>

    <div class="form-submit text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($employment_type->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($employment_type->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
