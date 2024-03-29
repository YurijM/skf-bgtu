<div class="info-security row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<h5 class="text-center">
		Действующее законодательство Российской федерации, регламентирующее работу с персональными данными
	</h5>

	<p>
		Актуальный список федеральных законов, постановлений правительства РФ, указов президента РФ, приказов ФСБ и ФСТЭК РФ представлен на сайте
		<?= Html::anchor(
			'https://26.rkn.gov.ru/law/p7096/',
			'Управления Роскомнадзора по Северо-Кавказскому Федеральному округу',
			['target' => '_blank']
		) ?>
	</p>

	<h5 class="text-center">
		Нормативно-правовые документы СКФ БГТУ им.В.Г.Шухова в сфере защиты персональных данных
	</h5>
	<ul style="list-style-type: disc">
		<li>
			<?= Html::anchor(
				$dir_docs . 'pd_politika.pdf',
				'Политика СКФ БГТУ им.В.Г.Шухова в отношении обработки персональных данных',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs . 'pd_polojenie2021.pdf',
				'Положение об обработке и защите персональных данных',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_info_security . 'pol_video.pdf',
				'Положение о системе видеонаблюдения в СКФ БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_info_security . 'pamyatka.pdf',
				'Информационная памятка для обучающихся для работы с Интернетом',
				['target' => '_blank']
			) ?>
		</li>
	</ul>
</div>
