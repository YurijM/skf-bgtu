<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/degrees', 'К списку учёных степеней')?>
  </div>

  <?=Form::open('admin/degrees/save')?>
    <div class="form-group">
      <?=Form::label('degree', 'Учёная степень')?>
      <?=Form::input('degree', $degree->degree, array('class' => 'form-control', 'placeholder' => 'Поле degree', 'autofocus'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('short', 'Сокращение')?>
      <?=Form::input('short', $degree->short, array('class' => 'form-control', 'placeholder' => 'Поле short'))?>
    </div>
  
    <?=Form::hidden('id', $degree->id)?>

    <div class="form-submit text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($degree->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($degree->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
