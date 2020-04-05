<!-- Стиль и скрипт для datepicker -->
<?=HTML::style($dir_css.'jquery-ui.min.css')?>
<?=HTML::script($dir_js.'jquery-ui.min.js')?>

<?= (isset($confirmation_delete) ? $confirmation_delete : '') ?>

<h4><?= $page_title ?> - <small>таблица</small> <?= $table ?></h4>

<div class="admin-list">
	<div class="text-right">
		<?= HTML::anchor('admin/dissertationdefense', 'К списку защит диссертаций') ?>
	</div>

	<?= Form::open('admin/dissertationdefense/save') ?>
	<div class="form-group">
		<?= Form::label('personnel', 'Сотрудник') ?>
		<select name="personnel" class="form-control" autofocus>
			<option value="0" <?= ($dissertationdefense->personnel_id ? '' : 'selected') ?>>Поле personnel_id</option>

			<? foreach ($personnel as $employee): ?>
				<option <?= ($dissertationdefense->personnel_id == $employee->id ? 'selected' : '') ?>
					value="<?= $employee->id ?>"><?= $employee->family . ' ' . $employee->name . ' ' . $employee->patronymic ?></option>
			<? endforeach ?>
		</select>
	</div>

	<div class="form-group">
		<?= Form::label('degree', 'На соискание учёной степени') ?>
		<select name="degree" class="form-control">
			<option value="0" <?= ($dissertationdefense->degree_id ? '' : 'selected') ?>>Поле degree_id</option>

			<? foreach ($degrees as $degree): ?>
				<option <?= ($dissertationdefense->degree_id == $degree->id ? 'selected' : '') ?>
					value="<?= $degree->id ?>"><?= $degree->degree ?></option>
			<? endforeach ?>
		</select>
	</div>

	<div class="form-group">
		<?= Form::label('quarter', 'Квартал') ?>
		<?= Form::select('quarter', $quarters, $dissertationdefense->quarter, array('class' => 'form-control', 'placeholder' => 'Поле quarter')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('year', 'Год') ?>
		<?= Form::select('year', $years, $dissertationdefense->year, array('class' => 'form-control', 'placeholder' => 'Поле year')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('date', 'Фактическая дата защиты') ?>
		<?= Form::input(
			'date',
			Helper_Addfunction::date_from_mysql($dissertationdefense->date),
			['class' => 'form-control', 'placeholder' => 'Поле date']
		) ?>
	</div>

	<?= Form::hidden('id', $dissertationdefense->id) ?>

	<div class="form-submit text-center col-xs-12">
		<?= Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm')) ?>
		<!-- Не получилось корректно привязать модальное окно к кнопке submit.
		Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
		На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
		<?= ($dissertationdefense->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '') ?>
		<?= ($dissertationdefense->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '') ?>
	</div>
	<?= Form::close() ?>
</div>

<script>
	$(document).ready(function () {
		$('[name=date]').datepicker({
		});

		$("select").change(function () {
			if ($(this).val() == "0")
				$(this).addClass("select-placeholder");
			else
				$(this).removeClass("select-placeholder");
		});

		$("select").change();
	});
</script>