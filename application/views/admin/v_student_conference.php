<!-- Стиль и скрипт для datepicker -->
<?=HTML::style($dir_css.'jquery-ui.min.css')?>
<?=HTML::script($dir_js.'jquery-ui.min.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/studentconferences', 'К списку студенческих конференций')?>
  </div>

  <div class="remark bg-danger text-danger">
    Перед вводом данных о конференции сначала убедитесь, что данные об <strong>организаторах конференции</strong> уже добавлены в базу данных.
  </div>

  <?=Form::open('admin/studentconferences/save')?>
    <div class="form-group col-md-2 col-sm-3 col-xs-12">
      <?=Form::label('date', 'Дата')?>
      <?=Form::input('date', Helper_Addfunction::date_from_mysql($conference->date), array('class' => 'form-control', 'placeholder' => 'Поле date', 'autofocus'))?>
    </div>

    <div class="form-group col-md-10 col-sm-9 col-xs-12">
      <?=Form::label('conference', 'Организатор конференция')?>
      <select name="organizer" class="form-control">
        <option value="0" <?=($conference->organizer_id ? '' : 'selected')?>>Поле organizer_id</option>

        <? foreach ($organizers as $organizer): ?>
          <option <?=($conference->organizer_id == $organizer->id ? 'selected' : '')?> value="<?=$organizer->id?>"><?=$organizer->organizer?></option>
        <? endforeach ?>
      </select>
    </div>

    <div class="form-group col-xs-12">
      <?=Form::label('conference', 'Студенческая конференция')?>
      <?=Form::textarea('conference', $conference->conference, array('class' => 'form-control', 'placeholder' => 'Поле conference', 'rows' => 2))?>
    </div>

      <?=Form::hidden('id', $conference->id)?>

    <div class="form-submit col-xs-12 text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($conference->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($conference->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  
  <? Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    $('[name=date]').datepicker({
		});

    $("select").change(function () {
      if($(this).val() == "0")
        $(this).addClass("select-placeholder");
      else
        $(this).removeClass("select-placeholder");
    });
    
    $("select").change();
  });
</script>
