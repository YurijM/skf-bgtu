<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/scientificactivity', 'К списку оценок')?>
  </div>

  <?=Form::open('admin/scientificactivity/save', array('class' => 'form-horizontal'))?>
    <div class="form-group">
      <?=Form::label('year', 'Год', array('class' => 'control-label col-sm-3 col-xs-12'))?>
      <div class="col-sm-2 col-xs-12">
        <?=Form::select('year', $years, $scientificactivity->year, array('class' => 'form-control'))?>
      </div>
    </div>

    <div class="form-group">
      <?=Form::label('personnel', 'Преподаватель', array('class' => 'control-label col-sm-3 col-xs-12'))?>
      <div class="col-sm-6 col-xs-12">
        <select name="personnel" class="form-control" autofocus>
          <option value="0" <?=($scientificactivity->personnel_id ? '' : 'selected')?>>Поле personnel_id</option>

          <? foreach ($personnel as $employee): ?>
            <option <?=($scientificactivity->personnel_id == $employee->id ? 'selected' : '')?> value="<?=$employee->id?>"><?=$employee->family.' '.$employee->name.' '.$employee->patronymic?></option>
          <? endforeach ?>
        </select>
      </div>
    </div>
  
    <div class="form-group">
      <?=Form::label('point', 'Баллы', array('class' => 'control-label col-sm-3 col-xs-12'))?>
      <div class="col-sm-2 col-xs-12">
        <?=Form::input('point', $scientificactivity->point, array('class' => 'form-control'))?>
      </div>
    </div>
  
    <?=Form::hidden('id', $scientificactivity->id)?>

    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($scientificactivity->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($scientificactivity->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    $("select").change(function () {
      if($(this).val() == "0")
        $(this).addClass("select-placeholder");
      else
        $(this).removeClass("select-placeholder");
    });
    
    $("select").change();
  });
</script>