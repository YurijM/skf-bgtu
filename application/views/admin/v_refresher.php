<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/refresher', 'К списку курсов повышения квалификации')?>
  </div>

  <?=Form::open('admin/refresher/save')?>
    <div class="form-group">
      <?=Form::label('course', 'Название курса')?>
      <?=Form::input('course', $refresher->course, array('class' => 'form-control', 'placeholder' => 'Поле course', 'autofocus'))?>
    </div>

    <div class="form-group">
      <?=Form::label('listeners_categories', 'Категории слушателей')?>
      <?=Form::input(
      	'listeners_categories',
				$refresher->listeners_categories,
				['class' => 'form-control', 'placeholder' => 'Поле listeners_categories']
			)?>
    </div>

	<div class="form-group">
		<?=Form::label('hours_amount', 'Количество часов')?>
		<?=Form::input(
			'hours_amount',
			$refresher->hours_amount,
			['class' => 'form-control', 'placeholder' => 'Поле hours_amount']
		)?>
	</div>

	<div class="form-group">
		<?=Form::label('cost', 'Стоимость')?>
		<?=Form::input(
			'cost',
			$refresher->cost,
			['class' => 'form-control', 'placeholder' => 'Поле cost']
		)?>
	</div>

    <div class="form-group">
      <?=Form::label('description', 'Краткое описание программы')?>
      <?=Form::textarea(
      	'description',
				$refresher->description,
				['class' => 'form-control', 'rows' => 10, 'placeholder' => 'Поле description']
			)?>
    </div>
  
    <div class="remark bg-danger text-danger">
      <p>
        При вводе описания для форматирования используйте <strong>HTML-тэги</strong>.
      </p>
        <strong><span class="text-uppercase">Обязательно !!!</span></strong><br>
      Для того, чтобы перейти на новую строку текста используйте либо тэг <strong><?=HTML::chars('<br>')?></strong>, либо обрамите абзац тэгами <strong><?=HTML::chars('<p> </p>')?></strong>.
    </div>

    <?=Form::hidden('id', $refresher->id)?>
  
    <div class="col-xs-12">
      <div class="form-submit text-center">
        <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
        <!-- Не получилось корректно привязать модальное окно к кнопке submit.
        Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
        На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
        <?=($refresher->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
        <?=($refresher->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
      </div>
    </div>
  
  <? Form::close() ?>
</div>
