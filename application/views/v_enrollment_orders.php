<div class="enrollment-orders row">
	<? if (date('Ymd') < date($start[2] . $start[1] . $start[0])
	|| date('Ymd') >= date($finish[2] . $finish[1] . $finish[0])): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<h2 class="text-center"><?=$page_title.' ('.$start[2].'г.)'?></h2>

		<? if (count($orders) > 0): ?>
			<? foreach ($orders as $order): ?>
				<div class="<?=($mode == 'normal' ? 'col-md-2' : '')?> col-sm-3 col-xs-6">
					<div class="thumbnail text-center">
						<?=HTML::anchor($dir_docs_enrollment_orders.$order->doc_file, HTML::image($dir_img_enrollment_orders.$order->img_file, array('class' => 'img img-rounded img-responsive', 'alt' => $site_name)), array('title'  => 'Просмотреть приказ', 'target' => '_blank'))?>
						<div class="caption <?=($mode == 'normal' ? 'small' : '')?>">
							Приказ от <?=Helper_Addfunction::date_from_mysql($order->date)?>
						</div>
					</div>
				</div>
			<? endforeach ?>
		<? else: ?>
			<h4 class="text-center" style="margin: 3em 0">Приказы на зачисление формируются по окончании приемной кампании</h4>
		<? endif ?>
	<? endif ?>
</div>
  
<script>
//  $(document).ready(function() {
  $(window).load(function() {
    setHeight();
  });
    
  function setHeight() {
    heights = [];

    $('.thumbnail .img').each(function() {
      heights.push($(this).height());
    });

    height = Math.max.apply(null, heights);

    $('.thumbnail .img').css('min-height', height + 15);
  };
</script>