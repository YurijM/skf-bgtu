<div class="specialties">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<h2 class="text-center"><?= $page_title ?></h2>

		<div class="row programs" style="margin-top: 1em; margin-bottom: 1.5em">
			<div class="col-sm-4 col-xs-12 text-center">
				<p>
					<?= HTML::anchor(
						'/apply',
						'Подать заявление'
					) ?>
				</p>
			</div>

			<hr class="visible-xs col-xs-12" style="margin-top: 1em; margin-bottom: 1em;">

			<div class="col-sm-4 col-xs-12 text-center">
				<p>
					<?= HTML::anchor(
						'/admissionrulescollege',
						'Нормативно-правовые акты'
					) ?>
				</p>
			</div>

			<hr class="visible-xs col-xs-12" style="margin-top: 1em; margin-bottom: 1em;">

			<div class="col-sm-4 col-xs-12 text-center">
				<p>
					<?= HTML::anchor(
						'/applicationsnumbercollege',
						'Поданные заявления'
					) ?>
				</p>
				<p>
					<?= HTML::anchor(
						'/enrollmentorderscollege',
						'Приказы на зачисление'
					) ?>
				</p>
			</div>

			<hr class="visible-xs col-xs-12" style="margin-top: 1em; margin-bottom: 1em;">
		</div>

		<div class="small text-center" style="margin-bottom: 1.25em;">
			<b>(лицензия 90Л01 №0008983 от 20.02.2016 приложение 3.3 приказ Рособрнадзора о переоформлении лицензии от 02.07.2021г. №932)</b>
		</div>

		<h4 class="text-center">
			Специальности
		</h4>

		<h5 class="text-center">
			10.02.05 Обеспечение информационной безопасности автоматизированных систем
		</h5>

		<p>
			<b>Квалификация:</b> техник по защите информации.
		</p>

		<p>
			<b>Вступительные испытания:</b> конкурс аттестатов, средний балл.
		</p>

		<p>
			Срок обучения на базе основного общего образования – 3 года 10 месяцев.
		</p>
		<p>
			Срок обучения на базе среднего общего образования – 2 года 10 месяцев.
		</p>

		<p>
			Специальность ТОП-50! Одна из самых востребованных специальностей!
		</p>

		<p>
			Информационная безопасность автоматизированных систем — это динамично развивающаяся область науки и техники, охватывающая криптографические, математические, программно-аппаратные, технические, правовые и организационные аспекты обеспечения безопасности информации при ее приеме, обработке, хранении и передаче в автоматизированных электронно-вычислительных системах и сетях. Специалисты по информационной безопасности принимают непосредственное участие в создании системы защиты информации, ее аудите и мониторинге, анализируют информационные риски, разрабатывают и внедряют мероприятия по их предотвращению.
		</p>

		<p>
			<b>Преимущества специальности:</b>
		</p>

		<ul type="disc">
			<li class="info">
				востребованность на рынке труда, так как сфера информационной безопасности стремительно развивается, а значит, спрос на специалистов в этой области будет постоянно расти;
			</li>
			<li>высокая оплата труда;</li>
			<li>возможность освоения самых передовых технологий защиты информации;</li>
			<li>возможность посещать конференции и семинары;</li>
			<li>общение с разнообразными специалистами, возможность завязать полезные связи.</li>
		</ul>

		<p>
			<b>Место работы</b>
		</p>
		<p>
			В организациях различных форм собственности, имеющих собственные компьютерные сети и нуждающихся в сохранении корпоративных сведений и важной коммерческой информации.
		</p>

		<p>
			<b>Важные качества</b>
		</p>
		<p>
			Коммуникабельность и умение работать в команде.
		</p>
		<p>
			Создание и наладка систем защиты - это коллективная работа нескольких специалистов: руководителя защищаемой компании, аналитика, проектировщиков систем, программистов, ко всем нужно найти подход и суметь поставить задачу понятным для них языком.
		</p>

		<h5 class="text-center">
			08.02.11 Управление, эксплуатация и обслуживание многоквартирного дома
		</h5>

		<p>
			<b>Квалификация:</b> техник, специалист по управлению, эксплуатации и обслуживанию многоквартирного дома.
		</p>

		<p>
			<b>Вступительные испытания:</b> конкурс аттестатов, средний балл.
		</p>

		<p>
			Срок обучения на базе основного общего образования – 3 года 10 месяцев.
		</p>
		<p>
			Срок обучения на базе среднего общего образования – 2 года 10 месяцев.
		</p>

		<p>
			Объектами профессиональной деятельности выпускников являются: многоквартирный дом и придомовая территория; внутридомовые инженерные системы: водоснабжения, водоотведения, отопления, внутридомового газового оборудования, электрооборудования; прочие системы: лифтового хозяйства, кондиционирования, вентиляции и дымоудаления, охранной и пожарной сигнализации, видеонаблюдения. Программа обучения направлена на теоретическое и практическое изучение основ, обеспечивающих сохранность общего имущества многоквартирных домов в течение нормативного срока его службы, комфортные и безопасные условия проживания граждан, а также решение вопросов пользования имуществом и предоставления коммунальных услуг.
		</p>

		<h4 class="text-center">
			Профессии
		</h4>

		<h5 class="text-center">
			08.01.07 Мастер общестроительных работ
		</h5>

		<p>
			<b>Квалификация:</b> арматурщик, бетонщик, каменщик, монтажник по монтажу стальных и железобетонных конструкций, печник, стропальщик,
			электросварщик ручной сварки.
		</p>

		<p>
			<b>Вступительные испытания:</b> конкурс аттестатов, средний балл.
		</p>

		<p>
			Срок обучения на базе среднего общего образования  – 10 месяцев.
		</p>

		<p>
			Для удовлетворения требований, предъявляемых в настоящее время качеству строительно-монтажных работ, необходимы высококвалифицированные кадры рабочих-строителей, обладающие высоким уровнем теоретических знаний и профессиональной подготовки.
		</p>
		<p>
			Такими специалистами являются мастера общестроительных работ. Мастер общестроительных работ выполняет монтажные работы при возведении всех типов зданий и сооружений из сборных железобетонных и металлических конструкций.
		</p>

		<p>
			<b>Важная информация:</b> по окончании срока обучения, выпускники имеют приоритет для продолжения обучения по образовательным программам высшего образования (СПО-ВО-бакалавриат) соответствующего направления в СКФ БГТУ им.В.Г.Шухова с сокращенным сроком получения высшего образования по образовательной программе, реализуемый путем зачета результатов обучения по отдельным дисциплинам (модулям) и (или) отдельным практикам,  освоенным (пройденным) обучающимися при получении среднего профессионального образования на основании приказа Минобрнауки от 5 апреля 2017г., за №301.
		</p>

		<p>
			<b>Зачисление абитуриентов</b> будет производиться только при наличии в приемной комиссии оригинала документа об образовании. Копии документов не дают право на зачисление.
		</p>
	<? endif ?>
</div>

<style>
	.programs p > a, li.info > a {
		text-decoration: underline !important;
		color: #333 !important;
	}

	.programs p > a:active, li.info > a:active {
		text-decoration: underline !important;
	}

	.info {
		margin-bottom: 5px;
	}
</style>