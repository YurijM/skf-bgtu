<div class="stipend row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<ul type="disc">
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_191.pdf',
				'Приказ №4/191 от 06.09.2018 "Об установлении размера стипендии обучающимся"',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_kom_183.pdf',
				'Приказ №4/183 от 03.09.2018 "О составе стипендиальной комиссии университета"',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'pol_st_kom.pdf',
				'Положение о стипендиальной комиссии образовательной организации',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'dop_pol_st.pdf',
				'Положение об оказании материальной поддержки обучающимся по программам высшего образования – программам бакалавриата, программам специалитета, программам аспирантуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'pol_st.pdf',
				'Положение о стипендиальном обеспечении и других формах материальной поддержки студентов, аспирантов, слушателей подготовительного факультета, обучающихся по очной форме обучения за счет бюджетных ассигнований федерального бюджета',
				['target' => '_blank']
			) ?>;
		</li>
	</ul>

	<h4 class="text-center">Информация о стипендиях</h4>

	<ul type="disc">
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_191.pdf',
				'Государственная академическая стипендия',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_191.pdf',
				'Государственная социальная стипендия',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_842.pdf',
				'Стипендия Президента РФ',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_842.pdf',
				'Стипендия Правительства РФ',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_171.pdf',
				'Стипендия Президента РФ (по приоритетным направлениям модернизации и технологического развития российской экономики)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_172.pdf',
				'Стипендия Правительства РФ (по приоритетным направлениям модернизации и технологического развития российской экономики)',
				['target' => '_blank']
			) ?>;
		</li>
	</ul>

	<p itemprop="HostelInfo">
		Общежитие <b>не предоставляется</b>.
	</p>

	<h4 class="text-center">Информация о трудоустройстве выпускников</h4>

	<ul type="disc" itemprop="GraduateJob">
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'trud_2014_2016.pdf',
				'Результаты трудоустройства выпускников СКФ БГТУ им.В.Г.Шухова за 2014-2016гг.',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'trudoustroistvo.pdf',
				'Результаты трудоустройства выпускников СКФ БГТУ им.В.Г.Шухова за 2013г.',
				['target' => '_blank']
			) ?>;
		</li>
	</ul>
</div>
