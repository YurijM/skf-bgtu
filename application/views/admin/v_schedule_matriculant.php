<!-- Стиль и скрипт для datepicker -->
<?=HTML::style($dir_css.'jquery.datetimepicker.css')?>
<?=HTML::script($dir_js.'jquery.datetimepicker.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/schedulematriculant', 'К расписанию вступительных испытаний')?>
  </div>

  <?=Form::open('admin/schedulematriculant/save')?>
    <div class="form-group">
      <?=Form::label('education', 'Форма обучения')?>
      <?=Form::select('education', $education_forms, $schedule->education, array('class' => 'form-control', 'placeholder' => 'Поле education'))?>
    </div>

    <div class="form-group">
      <?=Form::label('date', 'Дата')?>
      <?=Form::input('date', Helper_Addfunction::datetime_from_mysql($schedule->date, FALSE), array('class' => 'form-control', 'placeholder' => 'Поле date'))?>
    </div>

    <div class="form-group">
      <?=Form::label('subject', 'Предмет')?>
      <?=Form::select('subject', $subjects, $schedule->subject, array('class' => 'form-control', 'placeholder' => 'Поле subject'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('event_type', 'Мероприятие')?>
      <?=Form::select('event_type', $event_types, $schedule->event_type, array('class' => 'form-control', 'placeholder' => 'Поле event_type'))?>
    </div>

    <div class="form-group">
      <?=Form::label('classroom', 'Аудитория')?>
      <?=Form::input('classroom', $schedule->classroom, array('class' => 'form-control', 'placeholder' => 'Поле classroom'))?>
    </div>

    <?=Form::hidden('id', $schedule->id)?>

    <div class="form-submit col-xs-12 text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($schedule->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($schedule->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  
  <? Form::close() ?>
</div>

<script>
  $(document).ready(function() {
//    $('[name=date]').appendDtpicker({
//      locale: 'ru',
//      minuteInterval: 15
//		});
    $('[name=date]').datetimepicker({
      lang: 'ru',
      format:'d.m.Y H:i',
      step: 15
		});
  });
</script>
