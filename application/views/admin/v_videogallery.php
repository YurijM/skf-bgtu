<!-- Стиль и скрипт для datepicker -->
<?=HTML::style($dir_css.'jquery-ui.min.css')?>
<?=HTML::script($dir_js.'jquery-ui.min.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/videogallery', 'К списку видеосюжетов')?>
  </div>

  <?=Form::open('admin/videogallery/save')?>
    <div class="form-group">
      <?=Form::label('date', 'Дата')?>
      <?=Form::input('date', Helper_Addfunction::date_from_mysql($videogallery->date), array('class' => 'form-control', 'placeholder' => 'Поле date'))?>
    </div>

    <div class="form-group">
      <?=Form::label('title', 'Название сюжета')?>
      <?=Form::input('title', $videogallery->title, array('class' => 'form-control', 'placeholder' => 'Поле title'))?>
    </div>

    <div class="form-group">
      <?=Form::label('source', 'Адрес сюжета')?>
      <?=Form::input('source', $videogallery->source, array('class' => 'form-control', 'placeholder' => 'Поле source'))?>
    </div>

    <?=Form::hidden('id', $videogallery->id)?>

    <div class="form-submit col-xs-12 text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($videogallery->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($videogallery->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  
  <? Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    $('[name=date]').datepicker({
		});
  });
</script>
