<div class="hls row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<!-- Питание -->
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6 <?= ($mode != 'normal' ? 'hidden' : '') ?>">
			<img src="<?= $dir_img_hls ?>nutrition.jpg" class="img img-responsive" alt="<?= $page_title ?>">
		</div>

		<h4 class="text-center">Питание</h4>

		<p>
			В СКФ БГТУ им.В.Г.Шухова для преподавателей и студентов работают <strong>столовая</strong> и <strong>буфет</strong>, в которых регулярно обновляется
			меню и вносятся кулинарные новинки.
		</p>
		<p>
			В нашей столовой ассортимент вырабатываемой продукции разработан с учетом сезонности и калорийности выпускаемых блюд.
		</p>
		<p>
			Среди студентов большой популярностью пользуется буфет. Разгадка проста — разнообразное и постоянно обновляющееся меню, качественные продукты,
			просторный зал, вежливый персонал. Разнообразное меню буфета подходит как для легкого завтрака, так и для плотного обеда.
		</p>
		<p>
			Часы работы столовой организованы с учетом графика учебного процесса и отдыха: с <strong>08<sup>30</sup></strong> до <strong>19<sup>00</sup></strong>
			(выходной <strong>воскресенье</strong>).
		</p>
	</div>

	<hr>

	<!-- Медицинcкое обслуживание -->
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6 <?= ($mode != 'normal' ? 'hidden' : '') ?>">
			<img src="<?= $dir_img_hls ?>medicine.jpg" class="img img-responsive">
		</div>

		<h4 class="text-center">Медицинcкое обслуживание</h4>

		<p class="text-center">
			<?= HTML::anchor(
				$dir_docs_hls . 'zakluch_ses.pdf',
				'Санитарно-эпидемиологическое заключение',
				['target' => '_blank']
			) ?>
		</p>

		<p>
			В СКФ БГТУ им.В.Г.Шухова работает <strong>медицинский кабинет</strong>.
		</p>
		<p>
			Медицинская сестра осуществляет прием пациентов, оказывает неотложную доврачебную медицинскую помощь при острых заболеваниях.
			несчастных случаях, с последующим вызовом врача к пациенту или направлением его в ближайшее лечебно-профилактическое учреждение, вводит лекарственные
			препараты, противошоковые средства (при анафилактическом шоке) больным по жизненным показаниям (при невозможности своевременного прибытия врача к
			пациенту), организует и проводит профилактические прививки студентам и работникам филиала, проводит санитарно-просветительскую работу по укреплению
			здоровья и профилактике заболеваний, пропаганде здорового образа жизни.
		</p>
		<p>
			График работы медицинского кабинета: с <strong>08<sup>30</sup></strong> до <strong>12<sup>00</sup></strong> (выходной <strong>суббота,
				воскресенье</strong>).
		</p>
	</div>

	<hr>

	<!-- Спортивный комплекс -->
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6 <?= ($mode != 'normal' ? 'hidden' : '') ?>">
			<img src="<?= $dir_img_hls ?>sport.jpg" class="img img-responsive">
		</div>

		<h4 class="text-center">Спортивный комплекс</h4>

		<p>
			На территории СКФ БГТУ им.В.Г.Шухова построен самый современный <strong>физкультурно-оздоровительный центр</strong>, где студенты могут заниматься в
			различных спортивных секциях и кружках.
		</p>
		<p>
			На базе спортивного комплекса успешно действуют тренажерный зал со специальным оборудованием, зал настольного тенниса, зал для игровых видов спорта,
			шейпинга, аэробики, йоги.
		</p>
		<p>
			Фитнес-залы оснащены всем необходимым для тренировок.
		</p>
		<p>
			Имеется у нас и собственный благоустроенный теннисный корт.
		</p>
	</div>
</div>

<?= $news ?>
