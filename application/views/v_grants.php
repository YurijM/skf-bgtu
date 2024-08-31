<div class="grants row" itemprop="grant">
	<h2 class="text-center"><?= $page_title ?></h2>

	<h4 class="text-center">Федеральные нормативные акты</h4>
	<p>
			<?= Html::anchor(
				'http://government.ru/docs/all/109497/',
				'Копия постановления Правительства РФ от 17.12.2016 №1390 "О формировании стипендиального фонда" (в редакции Постановления Правительства Российской Федерации от 28.06.2021 №1033)',
				['target' => '_blank']
			) ?>
	</p>

	<h4 class="text-center">Локальные акты</h4>
	<ul style="list-style-type: disc">
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st.pdf',
				'Приказ №4/306 от 04.09.2023г. «Об установлении размеров стипендий обучающимися на 2023-2024 учебный год»',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'pr-2-25.pdf',
				'Приказ №2/25-УК от 31.08.23 «О составе стипендиальной комиссии университета»',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_docs . 'pol_st_kom.pdf',
				HTML::image(
					$dir_img . 'signature.png',
					[
						'style' => 'max-width: 1.5em; margin-right: .5em',
						'title' => 'Файл подписан простой электронной подписью
Дата, время: 02.02.2024 14:34
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
					]
				) . 'Положение о стипендиальной комиссии образовательной организации',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_docs . 'pol_st_vus.pdf',
				'Положение об оказании материальной поддержки обучающимся по программам высшего образования – программам бакалавриата, программам специалитета, программам магистратуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_docs . 'pol_st.pdf',
				HTML::image(
					$dir_img . 'signature.png',
					[
						'style' => 'max-width: 1.5em; margin-right: .5em',
						'title' => 'Файл подписан простой электронной подписью
Дата, время: 02.02.2024 13:51
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e'
					]
				) . 'Положение о стипендиальном обеспечении и других формах материальной поддержки студентов, аспирантов, слушателей подготовительного факультета, обучающихся по очной форме обучения за счет бюджетных ассигнований федерального бюджета',
				['target' => '_blank']
			) ?>;
		</li>
	</ul>

	<h4 class="text-center">Информация о наличии и условиях предоставления обучающимся стипендий</h4>

	<p style="text-indent: 1em">
		Стипендии назначаются обучающимся по очной форме обучения в целях стимулирования, поддержки и (или) повышения заинтересованности в обучении. В Университете выплачиваются следующие стипендии:
	</p>

	<ul style="list-style-type: disc">
		<li>
			<b>государственные академические стипендии студентам</b> назначаются в зависимости от успехов в учебе
			на основании результатов промежуточной аттестации в соответствии с календарным учебным графиком с первого числа месяца, следующего за месяцем ее окончания. В период с начала учебного года по месяц окончания первой промежуточной аттестации в соответствии с календарным учебным графиком государственная академическая стипендия выплачивается всем студентам первого курса, обучающимся по очной форме обучения за счет бюджетных ассигнований федерального бюджета;
		</li>
		<li>
			<b>государственные академические стипендии студентам в повышенном размере</b> назначаются за особые
			достижения в какой-либо одной или нескольких областях деятельности (учебной, научно-исследовательской, общественной, культурно-творческой и спортивной);
		</li>
		<li>
			<b>государственные социальные стипендии</b> назначаются социально незащищенным категориям студентов
			независимо от их результатов обучения в соответствии с Положением Университета «О стипендиальном обучении и других формах материальной поддержки студентов, аспирантов, слушателей подготовительного факультета, обучающихся по очной форме обучения за счет бюджетных ассигнований федерального бюджета»;
		</li>
		<li>
			<b>государственные стипендии аспирантам</b> назначаются в зависимости от успешности освоения программ
			подготовки научно-педагогических кадров в аспирантуре на основании результатов промежуточной аттестации в соответствии с календарным учебным графиком с первого числа месяца, следующего за месяцем ее окончания;
		</li>
		<li>
			<b>стипендии Президента Российской Федерации и Правительства Российской Федерации</b> назначаются
			студентам и аспирантам, достигшим выдающихся успехов в учебной и научной деятельности, в соответствии
			с положениями, утвержденными Президентом Российской Федерации от 06.09.1993 № 613-рп и Правительством Российской Федерации от 06.04.1995 № 309;
		</li>
		<li>
			<b>стипендии Президента Российской Федерации студентам и аспирантам, обучающимся по направлениям
			подготовки (специальностям), соответствующим приоритетным направлениям модернизации и
				технологического развития Российской экономики</b> назначаются студентам и аспирантам, проявившим
			выдающиеся способности в учебной и научной деятельности в соответствии с Постановлением Правительства Российской Федерации от 27.08.2016 № 854;
		</li>
		<li>
			<b>стипендии Правительства Российской Федерации для студентов и аспирантов, обучающихся по
			образовательным программам, соответствующим приоритетным направлениям модернизации и технологического
				развития экономики России</b> назначаются студентам и аспирантам за высокие достижения в учебной,
				научно-интеллектуальной деятельности в соответствии с Постановлением правительства Российской Федерации от 03.11.2015 № 1192;
		</li>
		<li>
			<b>стипендии Губернатора Белгородской области</b> назначаются в соответствии с Постановлением
			Губернатора Белгородской области от 29.10.2013г. № 123 «О стипендиях Губернатора Белгородской области для лучших студентов, обучающихся в профессиональных образовательных организациях и образовательных организациях высшего образования, расположенных на территории Белгородской области» для наиболее способных студентов-отличников учебы, активно занимающихся научно-исследовательской деятельностью;
		</li>
		<li>
			<b>стипендии Губернатора Белгородской области имени академика В.Г.Шухова</b> назначаются в целях
			сохранения и развития интеллектуального потенциала региона, повышения мотивации к научной, творческой
			и инновационной деятельности, поощрения и социальной поддержки наиболее одаренных студентов, аспирантов и докторантов Белгородской области в соответствии с Постановлением Губернатора Белгородской области № 16 от 22.02.2017г.
		</li>
	</ul>

	<h4 class="text-center">Информация о мерах социальной поддержки</h4>

	<p style="text-indent: 1em">
		<b>Получение стипендий</b> и других денежных выплат, предусмотренных законодательством об образовании.
	</p>

	<p style="text-indent: 1em">
		<b>Материальная помощь</b>: выделяется студентам из малоимущих семей, обучающимся по очной форме обучения
			на бюджетной основе; детям—сиротам и детям, оставшимся без попечения родителей; лицам из числа детей —сирот и детей, оставшихся без попечения родителей; матерям — одиночкам; лицам, проживающим в Чернобыльской зоне, обучающимся по очной форме обучения на бюджетной основе; детям—инвалидам и лицам, являющимися инвалидами с детства, обучающимся по очной форме обучения на бюджетной основе; студентам, обучающимся по очной форме обучения на бюджетной основе, нуждающимся в дорогостоящем лечении; студентам — членам профсоюза университета, обучающимся по очной форме обучения (в связи с трудным материальным положением или болезнью, в случае потери близкого родственника, при рождении ребенка).
	</p>

	<p style="text-indent: 1em">
		<b>Приобретение</b> новогодних подарков для детей студентов — членов профкома университета, обучающихся по очной форме обучения; детей—сирот и детей, оставшихся без попечения родителей; лиц из числа детей —сирот и детей, оставшихся без попечения родителей, членов профкома университета, обучающихся на очной форме обучения.
	</p>

	<p style="text-indent: 1em">
		<b>Предоставление путевок, включающих питание и оздоровление в санатории-профилактории БГТУ им.В
			.Г.Шухова</b>, для детей-сирот и детей, оставшихся без попечения родителей и лиц из их числа;
			инвалидов I и II группы, обучающихся по очной форме обучения — бесплатно; студентов, обучающихся по очной форме обучения — 10 % от полной стоимости.
	</p>

	<p style="text-indent: 1em">
		<b>Предоставление путевок на базу отдыха «Технолог» БГТУ им.В.Г.Шухова</b> для детей -сирот и детей,
		оставшихся без попечения родителей и лиц из их числа; инвалидов I и II группы, обучающихся по очной форме обучения — бесплатно; студентов, обучающихся по очной форме обучения — 10 % от полной стоимости.
	</p>

	<p style="text-indent: 1em">
		<b>Социальная защита</b> детей-сирот и детей, оставшихся без попечения родителей и лиц из их числа
		(питание, приобретение одежды, обуви, мягкого инвентаря, единовременное денежное пособие при выпуске, ежегодное пособие на приобретение учебной литература и письменных принадлежностей и др.).
	</p>

	<p style="text-indent: 1em">
		<b>Переход с платной на бесплатную форму обучения</b> в первую очередь: детей —сирот и  детей, оставшихся
		без попечения родителей; лиц из числа детей —сирот и детей, оставшихся без попечения родителей; граждан в возрасте до 20 лет, имеющих только одного родителя; инвалидов I группы; женщин, родивших ребенка в период обучения и лиц, утративших в период обучения одного из родителей, которые успешно сдали сессию на  «4» и «5» и у которых отсутствует академическая задолженность по всем установленным образовательной программой дисциплинам за 2 семестра, обучающихся по очной форме обучения; по остаточному принципу: студентов, которые успешно сдали сессию на «4» и «5» и у которых отсутствует академическая задолженность по всем установленным образовательной программой дисциплинам за 2 семестра, обучающихся по очной форме обучения.
	</p>

	<p style="text-indent: 1em">
		<b>Снижение стоимости за обучение</b> студентам, обучающимся по очной форме обучения на  бюджетной
		основе, которые успешно сдали сессию на «4» и «5» и у которых отсутствует академическая задолженность по  всем установленным образовательной программой дисциплинам за семестр — 10 % от полной стоимости обучения за семестр; студентам, обучающимся по очной форме обучения на бюджетной основе, которые успешно сдали сессию на «5» и у которых отсутствует академическая задолженность по всем установленным образовательной программой дисциплинам за семестр — 25 % от стоимости обучения за семестр.
	</p>

	<h4 class="text-center">
		Информация о наличии общежития, интерната, количество жилых помещений в общежитии, интернате для иногородних
		обучающихся
	</h4>
	<p class="text-center" style="margin-bottom: 1em" itemprop="hostelInfo">
		Общежитие не предоставляется.
	</p>
</div>
