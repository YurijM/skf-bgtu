<div class="docs row" itemprop="copyDoc">
	<h2 class="text-center"><?= $page_title ?></h2>

	<? foreach ($docs as $doc): ?>
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
			<div class="col-xs-12" <?= (isset($doc['style']) ? 'style="' . $doc['style'] . '"' : '') ?>>
				<?= $doc['title'] ?>
			</div>
		<? endif ?>
	<? endforeach ?>

	<? /* foreach ($docs_continuation as $doc): */ ?><!--
		<? /* if ($doc['link'] != ''): */ ?>
			<? /*= HTML::anchor($dir_docs . $doc['link'], $doc['title'],
				[
					'class' => 'col-xs-12',
					'target' => '_blank',
					'itemprop' => $doc['itemprop'],
					'style' => (isset($doc['style']) ? $doc['style'] : '')
				]
			) */ ?>
		<? /* else: */ ?>
			<div class="col-xs-12" <? /*= (isset($doc['style']) ? 'style="' . $doc['style'] . '"' : '') */ ?>>
				<? /*= $doc['title'] */ ?>
			</div>
		<? /* endif */ ?>
	--><? /* endforeach */ ?>

	<p>
		<strong>Документы об утверждении стоимости обучения по каждой образовательной программе:</strong>
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

	<p itemprop="prescriptionDocLink">
		<strong>Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования, отчеты об
			исполнении таких предписаний</strong> - предписаний нет.
	</p>
</div>
