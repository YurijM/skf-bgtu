<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/kpkspecialists', 'К списку КПК для специалистов')?>
  </div>

  <?=Form::open('admin/kpkspecialists/save')?>
    <div class="form-group">
      <?=Form::label('course', 'Название курса')?>
      <?=Form::input('course', $course->course, array('class' => 'form-control', 'placeholder' => 'Поле course', 'autofocus'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('listener_category', 'Категория слушателей')?>
      <?=Form::textarea('listener_category', $course->listener_category, array('class' => 'form-control', 'rows' => 5, 'placeholder' => 'Поле listener_category'))?>
    </div>

    <div class="form-group">
      <?=Form::label('hours', 'Кол-во часов')?>
      <?=Form::input('hours', $course->hours, array('class' => 'form-control', 'placeholder' => 'Поле hours'))?>
    </div>

    <div class="form-group">
      <?=Form::label('cost', 'Стоимость')?>
      <?=Form::input('cost', $course->cost, array('class' => 'form-control', 'placeholder' => 'Поле cost'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('program', 'Программа')?>
      <?=Form::textarea('program', $course->program, array('class' => 'form-control', 'rows' => 12, 'placeholder' => 'Поле program'))?>
    </div>
  
    <div class="remark col-xs-12 bg-danger text-danger">
      <p>
        При вводе программы для форматирования используйте <strong>HTML-тэги</strong>.
      </p>
        <strong><span class="text-uppercase">обязательно !!!</span></strong><br>
      Для того, чтобы перейти на новую строку текста используйте либо тэг <strong><?=HTML::chars('<br>')?></strong>, либо обрамите абзац тэгами <strong><?=HTML::chars('<p> </p>')?></strong>.
    </div>
  
    <?=Form::hidden('id', $course->id)?>

    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($course->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($course->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
