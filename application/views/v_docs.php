<div class="docs row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<? foreach ($docs as $doc): ?>
		<?= HTML::anchor($dir_docs . $doc['link'], $doc['title'],
			['class' => 'col-xs-12', 'target' => '_blank', 'itemprop' => $doc['itemprop']]) ?>
	<? endforeach ?>

	<? foreach ($docs_continuation as $doc): ?>
		<? if ($doc['link'] != ''): ?>
			<?= HTML::anchor($dir_docs . $doc['link'], $doc['title'],
				[
					'class' => 'col-xs-12',
					'target' => '_blank',
					'itemprop' => $doc['itemprop'],
					'style' => (isset($doc['style']) ? $doc['style'] : '')
				]
			) ?>
		<? else: ?>
			<div class="col-xs-12" <?= (isset($doc['style']) ? 'style="' . $doc['style'] . '"' : '') ?>><?= $doc['title'] ?></div>
		<? endif ?>
	<? endforeach ?>

	<p>
		<strong>Приказы "О стоимости платных образовательных услуг":</strong>
	</p>
	<ul type="disc">
		<? foreach ($orders as $order): ?>
			<li>
				<?= HTML::anchor($dir_docs . $order['link'], $order['title'],
					['target' => '_blank', 'itemprop' => $order['itemprop']]) . ' ' . $order['description']
				?>
			</li>
		<? endforeach ?>
	</ul>

	<? foreach ($docs_continuation1 as $doc): ?>
		<?= HTML::anchor($doc['link'] == 'attachments' || $doc['link'] == 'attachments1' ? $doc['link'] : $dir_docs . $doc['link'], $doc['title'],
			[
				'class' => 'col-xs-12',
				'target' => $doc['link'] == 'attachments' || $doc['link'] == 'attachments1' ? '_self' : '_blank',
				'itemprop' => $doc['itemprop'],
				'style' => (isset($doc['style']) ? $doc['style'] : '')
			])
		?>
	<? endforeach ?>

</div>
