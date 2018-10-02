<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/contacts', 'К списку контактов')?>
  </div>

  <?=Form::open('admin/contacts/save', array('class' => 'form-horizontal'))?>
    <div class="form-group">
      <?=Form::label('order_no', 'Порядок отображения', array('class' => 'control-label col-lg-3 col-sm-4 col-xs-9'))?>
      <div class="col-lg-1 col-sm-2 col-xs-3">
        <?=Form::input('order_no', $contact->order_no, array('class' => 'form-control text-center', 'autofocus'))?>
      </div>
    </div>

    <div class="form-group">
      <?=Form::label('contact', 'Контакт', array('class' => 'control-label col-lg-2 col-sm-3 col-xs-4'))?>
      <div class="col-lg-10 col-sm-9 col-xs-8">
        <?=Form::input('contact', $contact->contact, array('class' => 'form-control', 'placeholder' => 'Поле contact'))?>
      </div>
    </div>

    <div class="form-group">
      <?=Form::label('phone', 'Телефон(ы)', array('class' => 'control-label col-lg-2 col-sm-3 col-xs-4'))?>
      <div class="col-lg-10 col-sm-9 col-xs-8">
        <?=Form::input('phone', $contact->phone, array('class' => 'form-control', 'type' => 'tel', 'placeholder' => 'Поле phone'))?>
      </div>
    </div>

    <div class="form-group">
      <?=Form::label('email', 'E-mail', array('class' => 'control-label col-lg-2 col-sm-3 col-xs-4'))?>
      <div class="col-lg-10 col-sm-9 col-xs-8">
        <?=Form::input('email', $contact->email, array('class' => 'form-control', 'type' => 'email', 'placeholder' => 'Поле email'))?>
      </div>
    </div>
  
    <?=Form::hidden('id', $contact->id)?>

    <div class="form-submit col-xs-12 text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($contact->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($contact->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
