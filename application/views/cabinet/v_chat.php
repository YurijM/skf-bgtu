<div class="col-xs-5 col-md-4">
	<?= $message ?>
</div>

<div class="col-xs-7 col-md-8">
	<?= $messagesRange ?>

	<div id="messages" style="height: 500px; overflow-y: auto">
		<?= $messages ?>
	</div>
</div>

<script>
	$(document).ready(function () {
		loadMessages(-1);
	})
</script>