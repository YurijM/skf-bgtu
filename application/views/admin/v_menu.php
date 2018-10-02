<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/menu', 'К списку пунктов меню')?>
  </div>

  <?=Form::open('admin/menu/save')?>
    <div class="form-group">
      <?=Form::label('item', 'Пункт меню')?>
      <?=Form::input('item', $menu->item, array('class' => 'form-control', 'placeholder' => 'Поле item', 'autofocus'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('controller', 'Контроллер')?>
      <?=Form::input('controller', $menu->controller, array('class' => 'form-control', 'placeholder' => 'Поле controller', 'autofocus'))?>
    </div>
  
    <?=Form::hidden('id', $menu->id)?>

    <div class="form-submit text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($menu->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($menu->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
