<div class="specialties">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<h2 class="text-center"><?= $page_title ?></h2>

		<div class="col-xs-12 text-center" style="margin-top: 1em; margin-bottom: 1.5em">
			<h4 style="text-decoration: underline">
				<?= HTML::image(
					$dir_img . 'signature.png',
					[
						'style' => 'max-width: 1em',
						'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.05.2022 10:00
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
					]
				) ?>

				<?= HTML::anchor(
					$dir_docs_admission . 'pravila_spo.pdf',
					'правила приема на обучение по образовательным программам среднего профессионального образования',
					['target' => '_blank']
				) ?>
			</h4>
		</div>

		<div class="row programs" style="margin-top: 1em; margin-bottom: 1.5em">
			<div class="col-sm-4 col-xs-12 text-center bg-info">
				<p>
					<?= HTML::anchor(
						'/apply',
						'Подать заявление'
					) ?>
				</p>
				<p>
					<?= HTML::anchor(
						'/schedulematriculantcollege',
						'Расписание вступительных испытаний',
						["style" => "color: red !important"]
					) ?>
				</p>
				<p>
					<?= HTML::image(
						$dir_img . 'signature.png',
						[
							'style' => 'max-width: 1em',
							'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.03.2022 11:03
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
						]
					) ?>

					<?= HTML::anchor(
						$dir_docs_programs . 'arh.pdf',
						'Программа вступительного экзамена «Архитектура»',
						['target' => '_blank']
					) ?>
				</p>
				<p>
					<?= HTML::image(
						$dir_img . 'signature.png',
						[
							'style' => 'max-width: 1em',
							'title' => 'Файл подписан простой электронной подписью
Дата, время: 02.05.2022 14:44
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
						]
					) ?>


					<?= HTML::anchor(
						$dir_docs_programs . 'programm_arh.pdf',
						'Подготовка к вступительному экзамену',
						['target' => '_blank']
					) ?>
				</p>
			</div>

			<hr class="visible-xs col-xs-12" style="margin-top: 1em; margin-bottom: 1em;">

			<div class="col-sm-4 col-xs-12 text-center bg-success">
				<p>
					<?= HTML::anchor(
						'/admissionrulescollege',
						'Нормативно-правовые акты',
						["style" => "color: red !important"]
					) ?>
				</p>
				<p>
					<?= HTML::anchor(
						$dir_docs . 'dogovor_spo.pdf',
						'Форма договора на обучение',
						['target' => '_blank']
					) ?>
				</p>
				<p>
					<?= HTML::image(
						$dir_img . 'signature.png',
						[
							'style' => 'max-width: 1em',
							'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.07.2022 09:25
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
						]
					) ?>

					<?= HTML::anchor(
						$dir_docs . 'preiskurant1_spo.pdf',
						'Стоимость обучения',
						['target' => '_blank']
					) ?>
				</p>
			</div>

			<hr class="visible-xs col-xs-12" style="margin-top: 1em; margin-bottom: 1em;">

			<div class="col-sm-4 col-xs-12 text-center bg-info">
				<p>
					<?= HTML::anchor(
						'/applicationsnumbercollege',
						'Поданные заявления'
					) ?>
				</p>
				<p>
					<?= HTML::anchor(
						'/rankedlistscolledge',
						'Ранжированные списки'
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
			Информационная безопасность автоматизированных систем — это динамично развивающаяся область науки и техники, охватывающая криптографические,
			математические, программно-аппаратные, технические, правовые и организационные аспекты обеспечения безопасности информации при ее приеме, обработке,
			хранении и передаче в автоматизированных электронно-вычислительных системах и сетях. Специалисты по информационной безопасности принимают
			непосредственное участие в создании системы защиты информации, ее аудите и мониторинге, анализируют информационные риски, разрабатывают и внедряют
			мероприятия по их предотвращению.
		</p>

		<p>
			<b>Преимущества специальности:</b>
		</p>

		<ul type="disc">
			<li class="info">
				востребованность на рынке труда, так как сфера информационной безопасности стремительно развивается, а значит, спрос на специалистов в этой области
				будет постоянно расти;
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
			В организациях различных форм собственности, имеющих собственные компьютерные сети и нуждающихся в сохранении корпоративных сведений и важной
			коммерческой информации.
		</p>

		<p>
			<b>Важные качества</b>
		</p>
		<p>
			Коммуникабельность и умение работать в команде.
		</p>
		<p>
			Создание и наладка систем защиты - это коллективная работа нескольких специалистов: руководителя защищаемой компании, аналитика, проектировщиков
			систем, программистов, ко всем нужно найти подход и суметь поставить задачу понятным для них языком.
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
			Объектами профессиональной деятельности выпускников являются: многоквартирный дом и придомовая территория; внутридомовые инженерные системы:
			водоснабжения, водоотведения, отопления, внутридомового газового оборудования, электрооборудования; прочие системы: лифтового хозяйства,
			кондиционирования, вентиляции и дымоудаления, охранной и пожарной сигнализации, видеонаблюдения. Программа обучения направлена на теоретическое и
			практическое изучение основ, обеспечивающих сохранность общего имущества многоквартирных домов в течение нормативного срока его службы, комфортные и
			безопасные условия проживания граждан, а также решение вопросов пользования имуществом и предоставления коммунальных услуг.
		</p>

		<h5 class="text-center">
			07.02.01 Архитектура
		</h5>

		<div class="text-center" style="text-decoration: underline">
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.03.2022 11:03
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
				]
			) ?>

			<?= HTML::anchor(
				$dir_docs_programs . 'arh.pdf',
				'Программа вступительного экзамена «Архитектура»',
				['target' => '_blank']
			) ?>
		</div>

		<p>
			<b>Квалификация:</b> архитектор.
		</p>

		<p>
			<b>Вступительные испытания:</b> рисунок.
		</p>

		<p>
			Срок обучения на базе основного общего образования – 3 года 10 месяцев.
		</p>
		<p>
			Срок обучения на базе среднего общего образования – 2 года 10 месяцев.
		</p>

		<p>
			Профессия архитектор соединяет в себе инженерные знания, чистое творчество и менеджмент. Архитектор участвует во всех этапах разработки системы – от
			встречи с заказчиками до финального внедрения. В обязанности архитектора входит, в первую очередь, создание идеи здания и визуализация проекта в виде
			макета. Он продумывает проект в деталях. Каждое здание должно сочетать красоту, удобство и вписываться в окружающую среду. Концепцию здания
			продумывает именно архитектор.
		</p>

		<h5 class="text-center">
			38.02.01 Экономика и бухгалтерский учет (по отраслям)
		</h5>

		<p>
			<b>Квалификация:</b> бухгалтер; бухгалтер, специалист по налогообложению.
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
			Бухгалтер – всегда уважаемый сотрудник, получающий хорошую зарплату. Но чтобы стать хорошим специалистом, следует учитывать ряд индивидуальных
			качеств, от которых зависит будущий успех: повышенное внимание ко всем деталям; умение сосредоточиться; усидчивость; устойчивость к стрессовым
			ситуациям; развитое логическое мышление. Пока есть деньги, будут востребованы и бухгалтеры. Вакансии есть на любых предприятиях, чья деятельность так
			или иначе связана с финансами.
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
			Срок обучения на базе среднего общего образования – 10 месяцев.
		</p>

		<p>
			Для удовлетворения требований, предъявляемых в настоящее время качеству строительно-монтажных работ, необходимы высококвалифицированные кадры
			рабочих-строителей, обладающие высоким уровнем теоретических знаний и профессиональной подготовки.
		</p>
		<p>
			Такими специалистами являются мастера общестроительных работ. Мастер общестроительных работ выполняет монтажные работы при возведении всех типов
			зданий и сооружений из сборных железобетонных и металлических конструкций.
		</p>

		<h4 class="text-center">
			Важная информация
		</h4>
		<p>
			По окончании срока обучения, выпускники имеют приоритет для продолжения обучения по образовательным программам высшего образования
			(СПО-ВО-бакалавриат) соответствующего направления в СКФ БГТУ им.В.Г.Шухова с сокращенным сроком получения высшего образования по образовательной
			программе, реализуемый путем зачета результатов обучения по отдельным дисциплинам (модулям) и (или) отдельным практикам, освоенным (пройденным)
			обучающимися при получении среднего профессионального образования на основании приказа Минобрнауки от 5 апреля 2017г., за №301.
		</p>

		<p>
			<b>Зачисление абитуриентов</b> будет производиться только при наличии в приемной комиссии оригинала документа об образовании. Копии документов не
			дают право на зачисление.
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