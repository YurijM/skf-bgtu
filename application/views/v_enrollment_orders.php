<div class="enrollment-orders row">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= $year - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<? if (count($orders) > 0): ?>
			<h2 class="text-center"><?= $page_title . ' (' . $year . 'г.)' ?></h2>

			<? foreach ($orders as $order): ?>
				<p>
					<?= HTML::anchor($dir_docs_enrollment_orders . $order->doc_file, $order->description, ['target' => '_blank']) ?>
				</p>
			<? endforeach ?>

		<? else: ?>
			<h4 class="text-center" style="margin: 3em 0">Приказы на зачисление формируются по окончании приемной
				кампании</h4>
		<? endif ?>
	<? endif ?>
</div>

<script>
	//  $(document).ready(function() {
	$(window).load(function () {
		setHeight();
	});

	function setHeight() {
		heights = [];

		$('.thumbnail .img').each(function () {
			heights.push($(this).height());
		});

		height = Math.max.apply(null, heights);

		$('.thumbnail .img').css('min-height', height + 15);
	};
</script>