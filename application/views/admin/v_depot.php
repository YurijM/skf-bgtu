<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/depot', 'К списку сотрудников учебной части')?>
  </div>

  <?=Form::open('admin/depot/save')?>
    <div class="form-group">
      <?=Form::label('post', 'Должность')?>
      <?=Form::input('post', $depot->post, array('class' => 'form-control', 'placeholder' => 'Поле post', 'autofocus'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('person', 'ФИО сотрудника')?>
      <?=Form::input('person', $depot->person, array('class' => 'form-control', 'placeholder' => 'Поле person'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('order_no', 'Порядок отображения в списке')?>
      <?=Form::input('order_no', $depot->order_no, array('class' => 'form-control', 'placeholder' => 'Поле order_no'))?>
    </div>
  
    <?=Form::hidden('id', $depot->id)?>

    <div class="form-submit text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($depot->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($depot->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
