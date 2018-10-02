<?= Form::input('messageId', $message->id, ['class' => 'hidden', 'id' => 'messageId']) ?>

<? if ($kind == 1): ?>
	<div id="select_addr" style="padding: 5px; margin-bottom: 5px; border: 1px solid #999; border-radius: 5px">
		<h6>Отправить сообщение:</h6>
		<div>
			<?= Form::radio('to_', 'student', true, ['id' => 'to_student']) ?>
			<?= Form::label('to_student', 'студенту', ['style' => 'padding-bottom: -30px']) ?>
		</div>
		<div>
			<?= Form::radio('to_', 'group', false, ['id' => 'to_group', 'style' => 'margin-right: 5px']) ?>
			<?= Form::label('to_group', 'группе', []) ?>
		</div>
	</div>

	<?= Form::label('addressee', 'Адресат', ['style' => 'display: block; font-size: .85em']) ?>
	<?= Form::select('	addressee', $addressees, '0', [
		'id' => 'addressee',
		'style' => 'display: block; margin-bottom: .5em; padding: .25em; width: 100%'
	]) ?>
	<?= Form::select('	addressee', $groups, '0', [
		'id' => 'addressee_group',
		'style' => 'display: block; margin-bottom: .5em; padding: .25em; width: 100%'
	]) ?>
<? else: ?>
	<?= Form::label('addressee', 'Адресат', ['style' => 'display: block; font-size: .85em']) ?>
	<?= Form::select('	addressee', $addressees, '0', [
		'id' => 'addressee',
		'style' => 'display: block; margin-bottom: .5em; padding: .25em; width: 100%'
	]) ?>
<? endif ?>
<?= Form::label('message', 'Сообщение', ['style' => 'display: block; font-size: .85em']) ?>
<?= Form::textarea('message', $message->message, [
	'id' => 'message',
	'rows' => 15,
	'placeholder' => 'Текст сообщения',
	'style' => 'display: block; margin-bottom: .5em; padding: .25em; width: 100%'
]) ?>
<div id="new" class="text-center">
	<?= Form::button('save', 'Отправить', [
		'class' => 'send btn btn-sm btn-primary',
		'title' => 'Комбинация клавиш Ctrl+Enter',
		'style' => 'outline: 0',
		'onclick' => 'messageSend(' . $userId . ')'
	]) ?>
</div>
<div id="edit" class="text-center">
	<?= Form::button('save', 'Отправить', [
		'class' => 'send btn btn-sm btn-primary',
		'title' => 'Комбинация клавиш Ctrl+Enter',
		'style' => 'outline: 0; margin-bottom: 5px',
		'onclick' => 'messageSend(' . $userId . ')'
	]) ?>
	<?= Form::button('delete', 'Удалить', [
		'class' => 'btn btn-sm btn-danger',
		'style' => 'outline: 0; margin-bottom: 5px',
		'onclick' => 'messageDelete()'
	]) ?>
	<?= Form::button('cancel', 'Отменить', [
		'class' => 'cancel btn btn-sm btn-success',
		'title' => 'Клавиша Esc',
		'style' => 'outline: 0; margin-bottom: 5px',
		'onclick' => 'messageCancel()'
	]) ?>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		var isCtrl = false;

		$("#message").keyup(function (e) {
			if (e.which == 17) {
				isCtrl = false;
			}
		}).keydown(function (e) {
			if (e.which == 27) {
				if ($("#edit").isShown) {
					$("#edit .cancel").click();
				}
			} else {
				if (e.which == 17) {
					isCtrl = true;
				}

				if (e.which == 13 && isCtrl == true) {
					if ($("#new").isShown) {
						$("#new .send").click();
					} else {
						$("#edit .send").click();
					}
				}
			}
		});

		$("#addressee_group").hide();

		$("#edit").hide();

		$("#select_addr input[type='radio']").click(function () {
			if ($(this).val() == 'student') {
				$("#addressee").show();
				$("#addressee_group").hide();
			} else {
				$("#addressee").hide();
				$("#addressee_group").show();
			}
		});
	});
</script>
