<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/directions', 'К списку направлений')?>
  </div>

  <?=Form::open('admin/directions/save')?>
    <div class="form-group">
      <?=Form::label('education', 'Форма обучения')?>
      <?=Form::select('education', $education_types, $direction->education, array('class' => 'form-control'))?>
    </div>

    <div class="form-group">
      <?=Form::label('code', 'Шифр')?>
      <?=Form::input('code', $direction->code, array('class' => 'form-control'))?>
    </div>

    <div class="form-group">
      <?=Form::label('direction', 'Направление')?>
      <?=Form::input('direction', $direction->direction, array('class' => 'form-control'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('subject', 'Предметы, по которым учитываются баллы за ЕГЭ при поступлении')?>
      <select name="subject" class="form-control">
        <option value="0" selected>Добавить предмет (поле subject_id)</option>

        <? foreach ($subjects as $subject): ?>
          <option value="<?=$subject->id?>"><?=$subject->subject?></option>
        <? endforeach ?>
      </select>

      <table class="author">
        <? foreach ($direction_subjects as $subject): ?>
          <tr>
            <td><?=$subject->subject?></td>
            <td>
              <a href="/admin/directions/deletesubject/<?=$direction->id?>/<?=$subject->id?>" title="Удалить предмет">
                <i class="fa fa-minus-circle text-danger"></i>
              </a>
            </td>
          </tr>
        <? endforeach ?>
      </table>

      <div class="remark bg-info text-primary">
        Для ввода второго и каждого последующего предмета, нужно добавить предмет, сохранить направление и открыть его снова на редактирование.
      </div>
    </div>      
  
    <?=Form::hidden('id', $direction->id)?>

    <div class="form-submit col-xs-12 text-center">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($direction->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($direction->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>
