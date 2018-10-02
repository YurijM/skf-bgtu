<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/studentconferenceorganizers', 'К списку организаторов')?>
  </div>

  <?=Form::open('admin/studentconferenceorganizers/save')?>
    <div class="form-group">
      <?=Form::label('organizer', 'Организатор')?>
      <?=Form::input('organizer', $organizer->organizer, array('class' => 'form-control', 'placeholder' => 'Поле organizer', 'autofocus'))?>
    </div>
  
    <div class="remark col-xs-12 bg-danger text-danger">
      <p>
        При вводе контактов для форматирования текста используйте <strong>HTML-тэги</strong>.
      </p>
        <strong><span class="text-uppercase">обязательно !!!</span></strong><br>
      Для того, чтобы перейти на новую строку текста используйте либо тэг <strong><?=HTML::chars('<br>')?></strong>, либо обрамите абзац тэгами <strong><?=HTML::chars('<p> </p>')?></strong>.
    </div>
  
    <div class="form-group">
      <?=Form::label('contact', 'Контакты')?>
      <?=Form::textarea('contact', $organizer->contact, array('class' => 'form-control', 'placeholder' => 'Поле contact', 'rows' => 15))?>
    </div>
  
    <?=Form::hidden('id', $organizer->id)?>

    <div class="form-submit text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($organizer->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($organizer->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
