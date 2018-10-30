<!-- Стиль и скрипт для datepicker -->
<?= HTML::style($dir_css . 'jquery-ui.min.css') ?>
<?= HTML::script($dir_js . 'jquery-ui.min.js') ?>

<h4><?= $page_title ?> -
	<small>таблица</small> <?= $table ?></h4>

<div class="admin-list">
	<div class="text-right">
		<?= HTML::anchor('admin/certificationdates', 'Выйти из режима редактирования') ?>
	</div>

	<?= Form::open('admin/certificationdates/save') ?>
		<div class="col-sm-6 col-xs-12">
			<h4>Аттестация первая</h4>
			<div class="form-group col-sm-6 col-xs-12">
				<?= Form::label('begin_first', 'начало') ?>
				<?= Form::input(
					'begin_first',
					Helper_Addfunction::date_from_mysql($dates->begin_first),
					['class' => 'form-control', 'placeholder' => 'Поле begin_first']
				) ?>
			</div>
			<div class="form-group col-sm-6 col-xs-12">
				<?= Form::label('end_first', 'окончание') ?>
				<?= Form::input(
					'end_first',
					Helper_Addfunction::date_from_mysql($dates->end_first),
					['class' => 'form-control', 'placeholder' => 'Поле end_first']
				) ?>
			</div>
		</div>

	<div class="col-sm-6 col-xs-12">
		<h4>Аттестация вторая</h4>
		<div class="form-group col-sm-6 col-xs-12">
			<?= Form::label('begin_second', 'начало') ?>
			<?= Form::input(
				'begin_second',
				Helper_Addfunction::date_from_mysql($dates->begin_second),
				['class' => 'form-control', 'placeholder' => 'Поле begin_second']
			) ?>
		</div>
		<div class="form-group col-sm-6 col-xs-12">
			<?= Form::label('end_second', 'окончание') ?>
			<?= Form::input(
				'end_second',
				Helper_Addfunction::date_from_mysql($dates->end_second),
				['class' => 'form-control', 'placeholder' => 'Поле end_second']
			) ?>
		</div>
	</div>

		<?= Form::hidden('id', $dates->id) ?>

		<div class="form-submit text-center col-xs-12">
			<?= Form::submit('save', 'Сохранить', ['class' => 'btn btn-success btn-sm']) ?>
		</div>
	<?= Form::close() ?>
</div>

<script>
  $(document).ready(function () {
    $('[name="begin_first"]').datepicker({});
    $('[name="end_first"]').datepicker({});
    $('[name="begin_second"]').datepicker({});
    $('[name="end_second"]').datepicker({});
  });
</script>