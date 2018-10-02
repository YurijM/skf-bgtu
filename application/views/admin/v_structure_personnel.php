<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/structurepersonnel', 'К списку сотрудников органов управления')?>
  </div>

  <div class="remark bg-danger text-danger">
    Перед вводом убедитесь, что данный <strong>сотрудник</strong> уже добавлен в базу данных и введены данные по 
    <strong>органам управления (структуре)</strong> организации
  </div>

  <?=Form::open('admin/structurepersonnel/save')?>
    <div class="form-group">
      <?=Form::label('structure', 'Орган управления')?>
      <select name="structure" class="form-control" autofocus>
        <option value="0" <?=($structure_personnel->structure_id ? '' : 'selected')?>>Поле structure_id</option>

        <? foreach ($structure as $item): ?>
          <option <?=($structure_personnel->structure_id == $item->id ? 'selected' : '')?>
            value="<?=$item->id?>"><?=$item->structure?></option>
        <? endforeach ?>
      </select>
    </div>

    <div class="form-group">
      <?=Form::label('personnel', 'Сотрудник')?>
      <select name="personnel" class="form-control">
        <option value="0" <?=($structure_personnel->personnel_id ? '' : 'selected')?>>Поле personnel_id</option>

        <? foreach ($personnel as $employee): ?>
          <option <?=($structure_personnel->personnel_id == $employee->id ? 'selected' : '')?> value="<?=$employee->id?>"><?=$employee->family.' '.$employee->name.' '.$employee->patronymic?></option>
        <? endforeach ?>
      </select>
    </div>

    <div class="form-group">
      <?=Form::label('post', 'Должность')?>
      <?=Form::input('post', $structure_personnel->post, array('class' => 'form-control', 'placeholder' => 'Поле post'))?>
    </div>

    <div class="form-group">
      <?=Form::label('order_no', 'Номер по порядку в списке руководителей органа управления')?>
      <?=Form::input('order_no', $structure_personnel->order_no, array('class' => 'form-control', 'placeholder' => 'Поле order_no'))?>
    </div>

    <div class="form-group">
      <?=Form::label('location', 'Местонахождение')?>
      <?=Form::input('location', $structure_personnel->location, array('class' => 'form-control', 'placeholder' => 'Поле location'))?>
    </div>

    <div class="form-group">
      <?=Form::label('phone', 'Телефон(ы)')?>
      <?=Form::input('phone', $structure_personnel->phone, array('class' => 'form-control', 'placeholder' => 'Поле phone'))?>
    </div>

    <div class="form-group">
      <?=Form::label('email', 'Адрес(а) электронной почты')?>
      <?=Form::input('email', $structure_personnel->email, array('class' => 'form-control', 'placeholder' => 'Поле email'))?>
    </div>

    <?=Form::hidden('id', $structure_personnel->id)?>

    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($structure_personnel->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($structure_personnel->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
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