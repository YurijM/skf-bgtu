<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/departments', 'К списку кафедр')?>
  </div>

  <?=Form::open('admin/departments/save')?>
    <div class="form-group">
      <?=Form::label('department', 'Кафедра')?>
      <?=Form::input('department', $department->department, array('class' => 'form-control', 'placeholder' => 'Поле department', 'autofocus'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('head', 'Заведующий кафедрой')?>
      <select name="head" class="form-control">
        <option value="0" <?=($department->head_personnel_id ? '' : 'selected')?>>Поле head_personnel_id</option>

        <? foreach ($personnel as $employee): ?>
          <option <?=($department->head_personnel_id == $employee->id ? 'selected' : '')?> value="<?=$employee->id?>"><?=$employee->family.' '.$employee->name.' '.$employee->patronymic?></option>
        <? endforeach ?>
      </select>
    </div>
  
    <?=Form::hidden('id', $department->id)?>

    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($department->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($department->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
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