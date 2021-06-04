<div class="docs row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="col-xs-12" itemprop="copyDoc">
		<? foreach ($copyDoc1 as $doc): ?>
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
				<div
					class="col-xs-12"
					<?= (isset($doc['style']) ? 'style="' . $doc['style'] . '"' : '') ?>
					<?= ($doc['itemprop'] !== '' ? 'itemprop="' . $doc['itemprop'] . '"' : '') ?>
				>
					<?= $doc['title'] ?>
				</div>
			<? endif ?>
		<? endforeach ?>
	</div>

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-bottom: .5em"></div>

	<div class="col-xs-12" itemprop="docLink">
		<? foreach ($docLink as $doc): ?>
			<? if ($doc['link'] != ''): ?>
				<div class="col-xs-12" style="margin-bottom: 1em; <?= (isset($doc['style']) ? $doc['style'] : '') ?>">
					<? if (isset($doc['sign'])): ?>
						<?= HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1em',
								'title' => $doc['sign']
							]
						) ?>
					<? endif ?>

					<?= HTML::anchor($dir_docs . $doc['link'], $doc['title'],
						[
							'target' => '_blank',
							'itemprop' => $doc['itemprop'],
						]
					) ?>
				</div>
			<? else: ?>
				<div
					class="col-xs-12"
					<?= (isset($doc['style']) ? 'style="' . $doc['style'] . '"' : '') ?>
					<?= ($doc['itemprop'] !== '' ? 'itemprop="' . $doc['itemprop'] . '"' : '') ?>
				>
					<?= $doc['title'] ?>
				</div>
			<? endif ?>
		<? endforeach ?>
	</div>

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-bottom: .5em"></div>

	<div class="col-xs-12">
		<? foreach ($reports as $doc): ?>
			<? if ($doc['link'] != ''): ?>
				<div class="col-xs-12" style="margin-bottom: 1em; <?= (isset($doc['style']) ? $doc['style'] : '') ?>">
					<? if (isset($doc['sign'])): ?>
						<?= HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1em',
								'title' => $doc['sign']
							]
						) ?>
					<? endif ?>

					<?= HTML::anchor($dir_docs . $doc['link'], $doc['title'],
						[
							'target' => '_blank',
							'itemprop' => $doc['itemprop'],
						]
					) ?>
				</div>
			<? else: ?>
				<div
					class="col-xs-12"
					<?= (isset($doc['style']) ? 'style="' . $doc['style'] . '"' : '') ?>
					<?= ($doc['itemprop'] !== '' ? 'itemprop="' . $doc['itemprop'] . '"' : '') ?>
				>
					<?= $doc['title'] ?>
				</div>
			<? endif ?>
		<? endforeach ?>
	</div>

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-bottom: .5em"></div>

	<div class="col-xs-12" style="margin-bottom: 1em">
		<div class="col-xs-12" style="margin-bottom: .5em; font-weight: bold">
			Документы о предоставлении платных образовательных услуг и приказы об утверждении стоимости обучения по каждой образовательной программе:
		</div>
		<?= HTML::anchor(
			'/sveden/paid_edu',
			'Положение о порядке оказания платных образовательных услуг;и приказы об установлении стоимости платных образовательных услуг',
			['style' => 'margin-left: 2em']
		) ?>
	</div>

	<div class="hidden" itemprop="paidParent">
		Размер платы, взимаемой с родителей (законных представителей) за присмотр и уход за детьми - нет
	</div>

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-bottom: .5em"></div>

	<div class="col-xs-12">
		<? foreach ($copyDoc2 as $doc): ?>
			<? if ($doc['link'] != ''): ?>
				<div class="col-xs-12" style="margin-bottom: 1em; <?= (isset($doc['style']) ? $doc['style'] : '') ?>">
					<? if (isset($doc['sign'])): ?>
						<?= HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1em',
								'title' => $doc['sign']
							]
						) ?>
					<? endif ?>

					<?= HTML::anchor($dir_docs . $doc['link'], $doc['title'],
						[
							'target' => '_blank',
							'itemprop' => $doc['itemprop'],
						]
					) ?>
				</div>
			<? else: ?>
				<div
					class="col-xs-12"
					<?= (isset($doc['style']) ? 'style="' . $doc['style'] . '"' : '') ?>
					<?= ($doc['itemprop'] !== '' ? 'itemprop="' . $doc['itemprop'] . '"' : '') ?>
				>
					<?= $doc['title'] ?>
				</div>
			<? endif ?>
		<? endforeach ?>
	</div>

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-bottom: .5em"></div>

	<div class="col-xs-12" itemprop="prescriptionDocLink">
		<strong>Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования, отчеты об
			исполнении таких предписаний</strong> - предписаний нет.
	</div>
</div>
