<div class="admission-rules">
	<h2 class="text-center"><?= $page_title ?></h2>

	<p>
		Правила приёма в Северо-Кавказский филиал Белгородского государственного технологического университета им.В.Г.Шухова включают в себя следующие
		разделы:
	</p>

	<ul style="list-style-type: disc">
		<!--<li>
			<?/*= HTML::anchor(
				$dir_docs_admission . 'sroki_priema.pdf',
				'информация о сроках проведения приема, в том числе о сроках начала и завершения приема документов,
        необходимых для поступления, проведения вступительных испытаний, завершения приема заявлений о согласии на зачисление на каждом этапе зачисления;',
				array('target' => '_blank')
			) */?>
		</li>-->
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'perechen_vstupitelnih_ispitani_rangir_22.pdf',
				'перечень вступительных испытаний с указанием приоритетности вступительных испытаний при ранжировании списков поступающих;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'info_ob_osobih_pravah_21.pdf',
				'информация об особых правах и преимуществах при приеме на обучение по программам бакалавриата;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'info_o_yazike.pdf',
				'информация о возможности сдачи вступительных испытаний, проводимых Филиалом, на языке республики Российской Федерации, на территории которой расположена организация (далее - язык республики Российской Федерации), на иностранном языке;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'info_ob_individualnih_dostijeniah_21.pdf',
				'информация о перечне индивидуальных достижений поступающих;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'podacha_dokumentov_v_elektronnoiy_forme.pdf',
				'информация о возможности подачи документов для поступления на обучение в электронной форме;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'invalidi_21.pdf',
				'информация об особенностях проведения вступительных испытаний для лиц с ограниченными возможностями здоровья, инвалидов;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'distancionnie_tehnologii.pdf',
				'информация о проведении вступительных испытаний с использованием дистанционных технологий;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'pravila_podachi_apelliazii.pdf',
				'правила подачи и рассмотрения апелляций по результатам вступительных испытаний, проводимых Университетом самостоятельно;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'medosmotr.pdf',
				' информация о необходимости (отсутствии необходимости) прохождения поступающими обязательного предварительного медицинского осмотра (обследования);',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'priem_doc.pdf',
				'информация о местах приема документов, необходимых для поступления;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'address.pdf',
				'информация о почтовых адресах для направления документов, необходимых для поступления;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'email.pdf',
				'информация об электронных адресах для направления документов, необходимых для поступления, в электронной форме;',
				array('target' => '_blank')
			) ?>
		</li>
		<li>
			<?= HTML::anchor(
				$dir_docs_admission . 'max_kol_spec_21.pdf',
				'максимальное количество специальностей и (или) направлений подготовки для одновременного участия в конкурсе;',
				array('target' => '_blank')
			) ?>
		</li>
	</ul>

	<p>
		Иногородним поступающим общежитие <strong>не предоставляется</strong>.
	</p>
</div>
