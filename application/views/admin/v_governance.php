<?= (isset($confirmation_delete) ? $confirmation_delete : '') ?>

<h4><?= $page_title ?> - <small>таблица</small> <?= $table ?></h4>

<div class="admin-list">
	<div class="text-right">
		<?= HTML::anchor('admin/governance', 'К списку руководителей') ?>
	</div>

	<div class="remark bg-danger text-danger">
		Перед вводом руководителя данный <strong>сотрудник</strong> должен быть уже добавлен в базу данных и введены
		данные по <strong>органам управления (структуре)</strong> организации
	</div>

	<?= Form::open('admin/governance/save') ?>
	<div class="form-group">
		<?= Form::label('personnel', 'Сотрудник') ?>
		<select name="personnel" class="form-control">
			<option value="0" <?= ($governance->personnel_id ? '' : 'selected') ?>>Поле personnel_id</option>

			<? foreach ($personnel as $employee): ?>
				<option <?= ($governance->personnel_id == $employee->id ? 'selected' : '') ?>
				        value="<?= $employee->id ?>"><?= $employee->family . ' ' . $employee->name . ' ' . $employee->patronymic ?></option>
			<? endforeach ?>
		</select>
	</div>

	<div class="form-group">
		<?= Form::label('post', 'Должность') ?>
		<?= Form::input('post', $governance->post, array('class' => 'form-control', 'placeholder' => 'Поле post')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('phone', 'Телефон') ?>
		<?= Form::input('phone', $governance->phone, array('class' => 'form-control', 'placeholder' => 'Поле phone')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('email', 'E-mail') ?>
		<?= Form::input('email', $governance->email, array('class' => 'form-control', 'placeholder' => 'Поле email')) ?>
	</div>

	<div class="form-group">
		<?= Form::label('itemprop', 'Значение itemprop (для руководителя и замов)') ?>
		<?= Form::input(
			'itemprop',
			$governance->itemprop,
			['class' => 'form-control', 'placeholder' => 'Поле itemprop']
		) ?>
	</div>

	<div class="form-group">
		<?= Form::label('order_no', 'Номер по порядку в списке руководителей') ?>
		<?= Form::input('order_no', $governance->order_no, array('class' => 'form-control', 'placeholder' => 'Поле order_no')) ?>
	</div>

	<?= Form::hidden('id', $governance->id) ?>

	<div class="form-submit text-center col-xs-12">
		<?= Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm')) ?>
		<!-- Не получилось корректно привязать модальное окно к кнопке submit.
		Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
		На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
		<?= ($governance->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '') ?>
		<?= ($governance->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '') ?>
	</div>
	<?= Form::close() ?>
</div>

<script>
	$(document).ready(function () {
		$("select").change(function () {
			if ($(this).val() == "0")
				$(this).addClass("select-placeholder");
			else
				$(this).removeClass("select-placeholder");
		});

		$("select").change();
	});
</script>