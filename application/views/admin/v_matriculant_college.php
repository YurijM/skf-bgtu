<?= (isset($confirmation_delete) ? $confirmation_delete : '') ?>

<h4><?= $page_title ?> - <small>таблица</small> <?= $table ?></h4>

<div class="admin-list">
	<div class="text-right">
		<?= HTML::anchor('admin/matriculantscollege/' . $page, 'К списку абитуриентов') ?>
	</div>

	<div class="remark bg-danger text-danger">
		Перед вводом данных по абитуриенту сначала убедитесь, что соответствующие <strong>направления</strong>
		заведены.
	</div>

	<div class="remark bg-success text-success">
		Для того, чтобы на сайте в разделе <b>Абитуриенту - Поданные заявления СПО</b> отобразились актуальные данные о
		поданных заявлениях, необходимо ввести данные по направлениям в разделе админки <b>Количество мест для
			поступления СПО</b>
	</div>

	<?= Form::open('admin/matriculantscollege/save/' . $matriculant->id . '/' . $page) ?>
	<div class="form-group">
		<?= Form::label('year', 'Год поступления') ?>
		<?= Form::input('year', $matriculant->year ? $matriculant->year : $current_year, array('class' => 'form-control', 'placeholder' => 'Поле year', 'autofocus')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('insurance_number', 'СНИЛС') ?>
		<?= Form::input(
			'insurance_number',
			$matriculant->insurance_number,
			['class' => 'form-control', 'placeholder' => 'Поле insurance_number']
		) ?>
	</div>

	<div class="form-group">
		<?= Form::label('family', 'Фамилия') ?>
		<?= Form::input('family', $matriculant->family, array('class' => 'form-control', 'placeholder' => 'Поле family')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('name', 'Имя') ?>
		<?= Form::input('name', $matriculant->name, array('class' => 'form-control', 'placeholder' => 'Поле name')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('patronymic', 'Отчество') ?>
		<?= Form::input('patronymic', $matriculant->patronymic, array('class' => 'form-control', 'placeholder' => 'Поле patronymic')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('direction', 'Направление') ?>
		<select name="direction" class="form-control placeholder">
			<option value="0" <?= ($matriculant->direction_id ? '' : 'selected') ?>>Поле direction_id</option>

			<? foreach ($directions as $direction): ?>
				<option <?= ($matriculant->direction_id == $direction->id ? 'selected' : '') ?>
					value="<?= $direction->id ?>">
					<?= $education_types[$direction->education] . ' - ' . $direction->direction ?>
				</option>
			<? endforeach ?>
		</select>

		<?= Form::open('admin/matriculantscollege/save') ?>
		<div class="form-group col-xs-12" style="margin-top: .5em">
			<div class="col-xs-12">
				<?= Form::label('consent', 'Льгота') ?>
			</div>
			<div class="col-xs-2 col-sm-1">
				<?= Form::radio(
					'privilege',
					0,
					($matriculant->privilege == 0)
				) ?> нет
			</div>
			<div class="col-xs-2 col-sm-1">
				<?= Form::radio(
					'privilege',
					1,
					($matriculant->privilege == 1)
				) ?> да
			</div>
		</div>

		<div class="form-group">
			<?= Form::label('points', 'Средний балл аттестата') ?>
			<?= Form::input('points', $matriculant->points, ['class' => 'form-control', 'placeholder' => 'Поле year']) ?>
		</div>

		<div class="form-group">
			<?= Form::label('doc_kind', 'Вид документа') ?>
			<?= Form::select('doc_kind', $docs_kind, $matriculant->doc_kind, array('class' => 'form-control', 'placeholder' => 'Поле doc_kind')) ?>
		</div>
	</div>

	<div class="form-group">
		<?= Form::label('status', 'Статус') ?>
		<?= Form::select('status', $statuses, $matriculant->status, array('class' => 'form-control', 'placeholder' => 'Поле status')) ?>
	</div>

	<?= Form::hidden('id', $matriculant->id) ?>

	<div class="form-submit text-center col-xs-12">
		<?= Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm')) ?>
		<!-- Не получилось корректно привязать модальное окно к кнопке submit.
		Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
		На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
		<?= ($matriculant->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '') ?>
		<?= ($matriculant->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '') ?>
	</div>
	<?= Form::close() ?>
</div>

<script>
	$(document).ready(function () {
		$("select.placeholder").change(function () {
			if ($(this).val() == "0")
				$(this).addClass("select-placeholder");
			else
				$(this).removeClass("select-placeholder");
		});

		$("select").change();

		$("[name=direction]").change();

		$("[name=year]").focus();
	});
</script>