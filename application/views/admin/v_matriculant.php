<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/matriculants/'.$page, 'К списку абитуриентов')?>
  </div>

  <div class="remark bg-danger text-danger">
    Перед вводом данных по абитуриенту сначала убедитесь, что <strong>профили</strong> заведены, и
    <strong>предметы</strong>, по которым подсчитываются баллы за ЕГЭ, добавлены в соответствующее направление.
  </div>

	<div class="remark bg-success text-success">
		Для того, чтобы на сайте в разделе <b>Абитуриенту - Поданные заявления</b> отобразились актуальные данные о поданных заявлениях, необходимо ввести данные по
		направлениям в разделе админки <b>Количество мест для поступления</b>
	</div>

	<?=Form::open('admin/matriculants/save/'.$matriculant->id.'/'.$page)?>
    <div class="form-group">
      <?=Form::label('year', 'Год поступления')?>
      <?=Form::input('year', $matriculant->year ? $matriculant->year : $current_year, array('class' => 'form-control', 'placeholder' => 'Поле year', 'autofocus'))?>
    </div>
      
    <div class="form-group">
      <?=Form::label('family', 'Фамилия')?>
      <?=Form::input('family', $matriculant->family, array('class' => 'form-control', 'placeholder' => 'Поле family'))?>
    </div>
      
    <div class="form-group">
      <?=Form::label('name', 'Имя')?>
      <?=Form::input('name', $matriculant->name, array('class' => 'form-control', 'placeholder' => 'Поле name'))?>
    </div>
      
    <div class="form-group">
      <?=Form::label('patronymic', 'Отчество')?>
      <?=Form::input('patronymic', $matriculant->patronymic, array('class' => 'form-control', 'placeholder' => 'Поле patronymic'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('section', 'Профиль')?>
      <select name="section" class="form-control placeholder">
        <option value="0" <?=($matriculant->section_id ? '' : 'selected')?>>Поле section_id</option>

        <? foreach ($sections as $section): ?>
          <option <?=($matriculant->section_id == $section->id ? 'selected' : '')?> value="<?=$section->id?>"><?=$education_types[$section->direction->education].' - '.($section->short ? : $section->section)?></option>
        <? endforeach ?>
      </select>
    </div>

    <div class="col-xs-12" style="border: 1px solid #CCC; padding: .5em; margin: .5em 0">
      <div class="col-sm-6 col-xs-12 text-center">
        <?=Form::radio('result', 0, (!$matriculant->test > 0), ['onchange' => "resultChange(0)"])?> Результаты ЕГЭ
      </div>
      <div class="col-sm-6 col-xs-12 text-center" style="margin-bottom: 1em">
        <?=Form::radio('result', 1, ($matriculant->test > 0), ['onchange' => "resultChange(1)"])?> Вступительные испытания
      </div>

      <div id="exams">
        <div class="text-center">
          <strong>Баллы за ЕГЭ:</strong>
        </div>

        <div class="form-group col-xs-3 text-center">
          <?=Form::label('points_1', 'предмет')?>
          <?=Form::hidden('subject_1', $matriculant->subject_id_1)?>
          <?=Form::input('points_1', $matriculant->points_1, array('class' => 'form-control', 'placeholder' => 'Поле points'))?>
        </div>

        <div class="form-group col-xs-3 text-center">
          <?=Form::label('points_2', 'предмет')?>
          <?=Form::hidden('subject_2', $matriculant->subject_id_2)?>
          <?=Form::input('points_2', $matriculant->points_2, array('class' => 'form-control', 'placeholder' => 'Поле points'))?>
        </div>

        <div class="form-group col-xs-3 text-center">
          <?=Form::label('points_3', 'предмет')?>
          <?=Form::hidden('subject_3', $matriculant->subject_id_3)?>
          <?=Form::input('points_3', $matriculant->points_3, array('class' => 'form-control', 'placeholder' => 'Поле points'))?>
        </div>

				<div class="form-group col-xs-3 text-center">
					<?=Form::label('points_4', 'предмет')?>
					<?=Form::hidden('subject_4', $matriculant->subject_id_4)?>
					<?=Form::input('points_4', $matriculant->points_4, array('class' => 'form-control', 'placeholder' => 'Поле points'))?>
				</div>
      </div>

      <div id="test" class="form-group">
        <?=Form::label('test', 'Вступительные испытания (баллы)')?>
        <?=Form::input('test', $matriculant->test, array('class' => 'form-control', 'placeholder' => 'Поле test'))?>
      </div>
    </div>

    <div class="form-group">
      <?=Form::label('achievement', 'Индивидуальные достижения (баллы)')?>
      <?=Form::input('achievement', $matriculant->achievement, array('class' => 'form-control', 'placeholder' => 'Поле achievement'))?>
    </div>
      
    <div class="form-group">
      <?=Form::label('cost_kind', 'Вид оплаты')?>
      <?=Form::select('cost_kind', $costs_kind, $matriculant->cost_kind, array('class' => 'form-control', 'placeholder' => 'Поле cost_kind'))?>
    </div>
    
    <div class="form-group">
      <?=Form::label('doc_kind', 'Вид документа')?>
      <?=Form::select('doc_kind', $docs_kind, $matriculant->doc_kind, array('class' => 'form-control', 'placeholder' => 'Поле doc_kind'))?>
    </div>
    
    <div class="form-group">
      <?=Form::label('status', 'Статус')?>
      <?=Form::select('status', $statuses, $matriculant->status, array('class' => 'form-control', 'placeholder' => 'Поле status'))?>
    </div>
  
    <div class="form-group">
      <?=Form::label('remark', 'Примечание')?>
      <?=Form::input('remark', $matriculant->remark, array('class' => 'form-control', 'placeholder' => 'Поле remark'))?>
    </div>
  
    <?=Form::hidden('id', $matriculant->id)?>

    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($matriculant->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($matriculant->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    $("select.placeholder").change(function () {
      if($(this).val() == "0")
        $(this).addClass("select-placeholder");
      else
        $(this).removeClass("select-placeholder");
    });

    resultChange(<?=($matriculant->test ? : 0)?>);

    $("select").change();
    
    $("[name=section]").on("change", function() {
      $.ajaxSetup({
        async: false
      });
      
      id = $("[name=section]").val();

    	$("[for=points_1]").load('/admin/matriculants/loadsubject', {id: id, idx: 1});
    	$("[for=points_2]").load('/admin/matriculants/loadsubject', {id: id, idx: 2});
    	$("[for=points_3]").load('/admin/matriculants/loadsubject', {id: id, idx: 3});
			$("[for=points_4]").load('/admin/matriculants/loadsubject', {id: id, idx: 4});

      $.post('/admin/matriculants/loadsubjectid', {id: id, idx: 1}, on_success1);
      function on_success1(data)
      {
        $("[name=subject_1]").val(data);
      };

      $.post('/admin/matriculants/loadsubjectid', {id: id, idx: 2}, on_success2);
      function on_success2(data)
      {
        $("[name=subject_2]").val(data);
      };

      $.post('/admin/matriculants/loadsubjectid', {id: id, idx: 3}, on_success3);
      function on_success3(data)
      {
        $("[name=subject_3]").val(data);
      };

			$.post('/admin/matriculants/loadsubjectid', {id: id, idx: 4}, on_success4);
			function on_success4(data)
			{
				$("[name=subject_4]").val(data);
			};

      $("[name=points_1]").focus();
    });

    $("[name=section]").change();

    $("[name=year]").focus();
  });

  function resultChange(value)
  {
    $("[name=result]").val(value);

    if (value == 0) {
      $("#test").hide();
      $("#exams").show();
    } else {
      $("#exams").hide();
      $("#test").show();
    }
  }
</script>