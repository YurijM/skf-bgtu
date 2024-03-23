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

	<div class="col-xs-12" style="margin-bottom: 1em;" itemprop="prescriptionDocLink">
		<strong>Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования, отчеты об
			исполнении таких предписаний</strong>
		<div style="margin-left: 2em">предписаний нет.</div>
	</div>

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-bottom: .5em"></div>

	<h4 class="text-center">
		Локальные нормативные акты образовательной организации по основным вопросам организации и осуществления образовательной деятельности, в том числе регламентирующие:
	</h4>

	<div class="col-xs-12" itemprop="docLink">
		<? foreach ($localAct1 as $doc): ?>
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

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-bottom: .5em"></div>

	<h4 class="text-center">
		Локальные нормативные акты и иные документы, которые размещаются, опубликовываются по решению образовательной организации и (или) размещение, опубликование которых является обязательным в соответствии с законодательством Российской Федерации:
	</h4>

	<div class="col-xs-12" itemprop="education">
		<? foreach ($education as $doc): ?>
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
			Документы по защите персональных данных:
		</div>
		<?= HTML::anchor(
			'/infosecurity',
			'Положение об обработке и защите персональных данных и Политика в отношении обработки персональных данных',
			['style' => 'margin-left: 2em']
		) ?>
	</div>

	<div class="hidden" itemprop="paidParent">
		Размер платы, взимаемой с родителей (законных представителей) за присмотр и уход за детьми - нет
	</div>

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-bottom: .5em"></div>

	<div class="col-xs-12" style="margin-bottom: 1em; margin-left: 2em">
		<?= HTML::anchor(
			$dir_docs . 'sertificate_328.pdf',
			"Сертификат участника (результаты) независимой оценки качества условий осуществления образовательной деятельности в 2021 году",
			['target' => '_blank', 'itemprop' => 'reportEduDocLink']
		) ?>
	</div>
</div>
