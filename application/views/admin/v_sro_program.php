<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/sroprograms', 'К списку программ')?>
  </div>

  <?=Form::open('admin/sroprograms/save')?>
    <div class="form-group">
      <?=Form::label('order_no', '№ п/п')?>
      <?=Form::input('order_no', $program->order_no, array('class' => 'form-control', 'placeholder' => 'Поле order_no', 'autofocus'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('pressmark', 'Шифр')?>
      <?=Form::input('pressmark', $program->pressmark, array('class' => 'form-control', 'placeholder' => 'Поле pressmark'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('sro', 'КПК')?>
      <select name="sro" class="form-control">
        <option value="0" <?=($program->kpk_sro_id ? '' : 'selected')?>>Поле kpk_id</option>

        <? foreach ($sro as $course): ?>
          <? $sub_courses = ORM::factory('kpksro')->where('parent_id', '=', $course->id)->find_all() ?>
          <? if (count($sub_courses) == 0): ?>
            <option <?=($program->kpk_sro_id == $course->id ? 'selected' : '')?> value="<?=$course->id?>"><?=$course->course?></option>
          <? endif ?>
        <? endforeach ?>
      </select>
    </div>
  
    <div class="form-group">
      <?=Form::label('program', 'Программа')?>
      <?=Form::textarea('program', $program->program, array('class' => 'form-control', 'rows' => '3', 'placeholder' => 'Поле program'))?>
    </div>

    <div class="form-group">
      <?=Form::label('hours', 'Кол-во часов')?>
      <?=Form::input('hours', $program->hours, array('class' => 'form-control', 'placeholder' => 'Поле hours'))?>
    </div>

    <div class="form-group">
      <?=Form::label('cost', 'Стоимость')?>
      <?=Form::input('cost', $program->cost, array('class' => 'form-control', 'placeholder' => 'Поле cost'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('work_type', 'Виды работ')?>
      <?=Form::textarea('work_type', $program->work_type, array('class' => 'form-control', 'rows' => '7', 'placeholder' => 'Поле work_type'))?>
    </div>
  
    <div class="remark col-xs-12 bg-danger text-danger">
      <p>
        При вводе видов работ для форматирования используйте <strong>HTML-тэги</strong>.
      </p>
        <strong><span class="text-uppercase">обязательно !!!</span></strong><br>
      Для того, чтобы перейти на новую строку текста используйте либо тэг <strong><?=HTML::chars('<br>')?></strong>, либо обрамите абзац тэгами <strong><?=HTML::chars('<p> </p>')?></strong>.
    </div>
  
    <?=Form::hidden('id', $program->id)?>

    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($program->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($program->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
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