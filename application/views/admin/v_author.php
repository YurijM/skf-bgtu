<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/authors', 'К списку авторов')?>
  </div>

  <?=Form::open('admin/authors/save')?>
    <div class="form-group">
      <?=Form::label('author', 'Автор')?>
      <?=Form::input('author', $author->author, array('class' => 'form-control', 'placeholder' => 'Поле author', 'autofocus'))?>
    </div>
  
    <?=Form::hidden('id', $author->id)?>

    <div class="form-submit text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($author->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($author->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
