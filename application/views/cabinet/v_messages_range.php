<h6 class="text-center small">Сообщения</h6>
<div class="text-center" style="margin-bottom: .5em;">
	<?= Form::button('actual', 'Вчера и сегодня', [
		'class' => 'btn btn-xs btn-primary',
		'style' => 'outline: 0; margin-bottom: 5px',
		'onclick' => 'loadMessages(-1)'
	]) ?>
	<?= Form::button('week', 'За неделю', [
		'class' => 'btn btn-xs btn-primary',
		'style' => 'outline: 0; margin-bottom: 5px',
		'onclick' => 'loadMessages(-7)'
	]) ?>
	<?= Form::button('all', 'Все', [
		'class' => 'btn btn-xs btn-primary',
		'style' => 'outline: 0; margin-bottom: 5px',
		'onclick' => 'loadMessages(0)'
	]) ?>
</div>
