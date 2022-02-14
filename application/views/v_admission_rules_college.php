<div class="admission-rules">
	<h2 class="text-center"><?= $page_title ?></h2>

	<ul style="list-style-type: disc">
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 13.07.2021 13:17
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>

			<?= HTML::anchor(
				$dir_docs_admission . 'pravila_spo.pdf',
				'правила приёма на СПО',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 26.01.2022 16:57
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>

			<?= HTML::anchor(
				$dir_docs_admission . 'km_spo.pdf',
				'количество мест с полным возмещением затрат для приема на обучение по программам СПО',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'spec.pdf',
				'перечень специальностей',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'ur_obr.pdf',
				'требуемый уровень образования',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'vst_isp.pdf',
				'перечень вступительных испытаний',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'priem_dog.pdf',
				'приём по договорам',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'med_osm.pdf',
				'требования по мед. осмотру',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'doc_elform.pdf',
				'получение документов в электронной форме',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'vst_isp_ovz.pdf',
				'вступительные испытания для инвалидов',
				['target' => '_blank']
			) ?>
		</li>
	</ul>

	<p>
		Иногородним поступающим общежитие <strong>не предоставляется</strong>.
	</p>
</div>
