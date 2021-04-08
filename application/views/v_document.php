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

	<div class="col-xs-12">
		<? foreach ($paid as $doc): ?>
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

	<p>
		<strong>В образовательной организации не реализуются образовательные программы дошкольного, начального общего, основного общего и среднего
			общего образования.</strong>
	</p>

	<p>
		<b>Документ об установлении размера платы, взимаемой с родителей (законных представителей) за присмотр и уход за детьми, осваивающими
			образовательные программы дошкольного образования в организациях, осуществляющих образовательную деятельность, за содержание детей в
			образовательной организации, реализующей образовательные программы начального общего, основного общего или среднего общего образования,если в
			такой образовательной организации созданы условия для проживания обучающихся в интернате, либо за осуществление присмотра и ухода за детьми в
			группах продленного дня в образовательной организации, реализующей образовательные программы начального общего, основного общего или среднего
			общего образования:</b> отсутствует
	</p>

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
