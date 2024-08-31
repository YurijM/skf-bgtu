<div class="objects row">
	<h2 class="text-center" style="margin-bottom: .5em"><?= $page_title ?></h2>

	<h3 class="text-center";">
		Информация о материально-техническом обеспечении образовательной деятельности, в том числе и в отношении инвалидов и лиц с ограниченными возможностями здоровья:
	</h3>

	<h4 class="text-center">
		о наличии у СКФ БГТУ им.В.Г.Шухова на праве оперативного управления зданий, строений, сооружений,
		территорий, необходимых для осуществления образовательной деятельности
	</h4>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed bg-info" itemprop="mto">
			<tr>
				<th style="width: 20%">Наименование объекта</th>
				<th style="width: 20%">Адрес объекта</th>
				<th style="width: 20%">Назначение объекта</th>
				<th style="width: 30%">Документ</th>
				<th style="width: 10%">Площадь объекта, кв.м.</th>
			</tr>
			<tr>
				<td>Земельный участок</td>
				<td>г.Минеральные Воды, ул.Московская, 27</td>
				<td>Земли поселений под учебно-производственный корпус</td>
				<td class="text-center">
					<?= HTML::anchor(
						$dir_docs_logistical_support . 'svid_z2.pdf',
						'Свидетельство о государственной регистрации права 26 АИ №836440 от 19.08.2014г.',
						['target' => '_blank'])
					?>
				</td>
				<td class="text-center">2741.31</td>
			</tr>
			<tr>
				<td>Земельный участок</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td>Земли поселений под учебные корпуса</td>
				<td class="text-center">
					<?= HTML::anchor(
						$dir_docs_logistical_support . 'svid_z1.pdf',
						'Свидетельство о государственной регистрации права 26 АИ №836441 от 19.08.2014г.',
						['target' => '_blank'])
					?>
				</td>
				<td class="text-center">5303.74</td>
			</tr>
			<tr>
				<td>Учебный корпус №1</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td>Нежилое здание</td>
				<td class="text-center">
					<?= HTML::anchor(
						$dir_docs_logistical_support . 'svid_k1.pdf',
						'Свидетельство о государственной регистрации права 26 АИ №836437 от 19.08.2014г.',
						['target' => '_blank'])
					?>
				</td>
				<td class="text-center">1603.0</td>
			</tr>
			<tr>
				<td>Учебный корпус №3</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td>Нежилое здание</td>
				<td class="text-center">
					<?= HTML::anchor(
						$dir_docs_logistical_support . 'svid_k3.pdf',
						'Свидетельство о государственной регистрации права 26 АИ №836438 от 19.08.2014г.',
						['target' => '_blank'])
					?>
				</td>
				<td class="text-center">428.9</td>
			</tr>
			<tr>
				<td>Учебный корпус №4</td>
				<td>г.Минеральные Воды, ул.Московская, 27</td>
				<td>Нежилое здание</td>
				<td class="text-center">
					<?= HTML::anchor(
						$dir_docs_logistical_support . 'svid_k4.pdf',
						'Свидетельство о государственной регистрации права 26 АИ №836439 от 19.08.2014г.',
						['target' => '_blank'])
					?>
				</td>
				<td class="text-center">622.4</td>
			</tr>
			<tr>
				<td>Физкультурно-оздоровительный центр</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td>Нежилое здание</td>
				<td class="text-center">
					<?= HTML::anchor(
						$dir_docs_logistical_support . 'svid_foc.pdf',
						'Свидетельство о государственной регистрации права 26 АИ №836436 от 19.08.2014г.', ['target' => '_blank']) ?>
				</td>
				<td class="text-center">1321.3</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center">
		о наличии оборудованных учебных кабинетов
	</h4>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed bg-success" itemprop="purposeCab">
			<tr>
				<th style="width: 25%" rowspan="2">Наименование объекта</th>
				<th style="width: 30%" rowspan="2">Адрес объекта</th>
				<th style="width: 15%" colspan="2">Оборудованные учебные кабинеты</th>
				<th style="width: 30%" rowspan="2">Приспособленность для использования инвалидами и лицами с ОВЗ</th>
			</tr>
			<tr>
				<th>Количество</th>
				<th>Общая площадь, кв.м.</th>
			</tr>
			<tr>
				<td>Учебный корпус №1</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td class="text-center">12</td>
				<td class="text-center">1087.4</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
			<tr>
				<td>Учебный корпус №3</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td class="text-center">5</td>
				<td class="text-center">312.3</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
			<tr>
				<td>Учебный корпус №4</td>
				<td>г.Минеральные Воды, ул.Московская, 27</td>
				<td class="text-center">13</td>
				<td class="text-center">426.9</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
			<tr>
				<td>Физкультурно-оздоровительный центр</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td class="text-center">4</td>
				<td class="text-center">1321.3</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center">
		о наличии объектов для проведения практических занятий
	</h4>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed bg-success" itemprop="purposePrac">
			<tr>
				<th style="width: 25%" rowspan="2">Наименование объекта</th>
				<th style="width: 30%" rowspan="2">Адрес объекта</th>
				<th style="width: 15%" colspan="2">Объекты для проведения практических занятий</th>
				<th style="width: 30%" rowspan="2">Приспособленность для использования инвалидами и лицами с ОВЗ</th>
			</tr>
			<tr>
				<th>Количество</th>
				<th>Общая площадь, кв.м.</th>
			</tr>
			<tr>
				<td>Учебный корпус №1</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td class="text-center">5</td>
				<td class="text-center">516.6</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
			<tr>
				<td>Учебный корпус №3</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td class="text-center">2</td>
				<td class="text-center">116.6</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
			<tr>
				<td>Учебный корпус №4</td>
				<td>г.Минеральные Воды, ул.Московская, 27</td>
				<td class="text-center">2</td>
				<td class="text-center">171.7</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center">
		о наличии оборудованных библиотек, объектов спорта
	</h4>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed bg-info">
			<tr>
				<th style="width: 30%">Наименование объекта</th>
				<th style="width: 30%">Адрес местонахождения</th>
				<th style="width: 5%">Площадь</th>
				<th style="width: 5%">Кол-во мест</th>
				<th style="width: 30%">Приспособленность для использования инвалидами и лицами с ОВЗ</th>
			</tr>
			<tr itemprop="purposeLibr">
				<td>Справочно-информационный центр (читальный зал, абонемент)</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td class="text-center">154.0</td>
				<td class="text-center">44</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
			<tr itemprop="sport">
				<td>Учебно–спортивный комплекс (крытое спортивное сооружение: имеются игровой зал, тренажерный зал,
					раздевалки, душевые)
				</td>
				<td>г.Минеральные Воды, ул.Железноводская, 24</td>
				<td class="text-center">1321.3</td>
				<td class="text-center">-</td>
				<td class="text-center">Для инвалидов с соматическими заболеваниями (по общим заболеваниям)</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center">
		о наличии средств обучения и воспитания
	</h4>

	<p>
		В СКФ БГТУ им.В.Г.Шухова создаются все условия для патриотического и физического развития студентов,
		реализации их научно-технического, творческого потенциалов.
	</p>
	<p>
		Организация воспитательной работы в университете — важное условие создания единого воспитательного
		пространства, фактора социализации личности. Действенным инструментом этого стало студенческое самоуправление,
		демонстрирующее высокую эффективность работы.
	</p>
	<p>
		В филиале создан студенческий совет. Студенческий совет - это центр культурно-массовой и воспитательной
		работы со студенческой молодежью. Культурно-массовая работа помогает молодым людям адаптироваться в
		современном обществе, реализовать свои таланты и возможности, сформировать у молодежи активную
		жизненную позицию и готовность к участию в общественно-политической жизни страны и гражданского общества.
	</p>
	<p>
		Для студентов ежегодно проводятся культурно-воспитательные мероприятия, такие как: лектории; конкурсы;
		спортивные состязания; встречи с интересными людьми, ветеранами и участниками боевых действий,
		представителями профильных служб: миграционной службы, полиции, УФСКН, медицины, духовенства и др.
		Студенты выезжают на экскурсии.
	</p>
	<p>
		В филиале успешно функционирует кураторство. Куратор каждой группы — опытный преподаватель, имеющий стаж
		педагогической работы. Ежемесячно в группах проводятся кураторские часы на различные тематики, в том числе по
		вопросам ограждения студентов, включая несовершеннолетних, от размещения в сети Интернет информации,
		причиняющей вред их здоровью и развитию, побуждающей к самоубийству; студенты совместно с кураторами
		принимают участие не только в мероприятиях, реализующихся на базе университета, но и в городских и
		областных мероприятиях, также посещают выставки, театры, кинотеатры и др.
	</p>
	<p>
		Филиал уделяет пристальное внимание развитию студенческого спорта. В филиале имеется
		физкультурно-оздоровительный центр, где имеются все возможности для проведения спортивной работы. В
		здании ФОЦ есть спортивный зал площадью 540 кв.м., тренажерные залы, залы для фитнеса. Согласно
		календарного плана спортивно-массовых мероприятий студенты участвуют в внутривузовских, городских, региональных соревнованиях.
	</p>
	<p>
		В СКФ БГТУ им.В.Г.Шухова может осуществляться обучение для инвалидов и лиц с ограниченными возможностями здоровья.
	</p>
	<p>
		К средствам обучения относятся предметы материальной и духовной культуры, которые используются при решении
		педагогических задач. Они обеспечивают реализацию принципа наглядности и содействуют повышению
		эффективности учебного процесса, дают учащимся материал в форме наблюдений и впечатлений для
		осуществления учебного познания и мыслительной деятельности на всех этапах обучения.
	</p>
	<p>
		Электронная информационно-образовательная среда университета предоставляет возможность осуществлять
		дистанционное обучение. Обучающиеся имеют возможность самостоятельно изучать размещенные на сайте
		университета, а так же на сайте научно-технической библиотеки курсы учебных дисциплин. С помощью
		«Личного кабинета» студент с ограниченными возможностями здоровья может связаться с преподавателем для
		индивидуальной консультации по изучаемому материалу.
	</p>

	<h4 class="text-center" style="margin-top: 1em">
		о доступе к электронно-информационной образовательной среде, информационным системам и
		информационно-телекоммуникационным сетям и электронным ресурсам
	</h4>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed bg-info" itemprop="comNet">
			<tr>
				<th style="width: 78%">Наименование показателя</th>
				<th style="width: 7%">Количество / наличие</th>
				<th style="width: 15%">Приспособленность для использования инвалидами и лицами с ОВЗ</th>
			</tr>
			<tr>
				<td>Наличие в образовательной организации электронной информационно-образовательной среды</td>
				<td class="text-center">да</td>
				<td rowspan="6" style="vertical-align: middle" class="text-center">Для инвалидов с соматическими
					заболеваниями (по общим заболеваниям)
				</td>
			</tr>
			<tr>
				<td>Общее количество компьютеров с выходом в информационно-телекоммуникационную сеть «Интернет», к которым
					имеет доступ обучающиеся
				</td>
				<td class="text-center">83</td>
			</tr>
			<tr>
				<td>Общее количество ЭБС, к которым имеют доступ обучающиеся (собственных или на договорной основе)</td>
				<td class="text-center">7</td>
			</tr>
			<tr>
				<td>Наличие собственных электронных образовательных и информационных ресурсов</td>
				<td class="text-center">да</td>
			</tr>
			<tr>
				<td>Наличие сторонних электронных образовательных и информационных ресурсов</td>
				<td class="text-center">да</td>
			</tr>
			<tr>
				<td>Наличие базы электронного каталога</td>
				<td class="text-center">да</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center">
		Электронные образовательные ресурсы, к которым обеспечен доступ обучающихся СКФ БГТУ им.В.Г.Шухова
	</h4>

	<div class="text-center" style="margin-top: .5em; margin-bottom: .5em">
		<?= HTML::anchor($dir_docs_logistical_support . 'elresurs.pdf',
			'Скачать список электронных образовательных ресурсов',
			['target' => '_blank']
		) ?>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed bg-success" itemprop="erList">
			<tr>
				<th style="width: 70%">Наименование ресурса</th>
				<th style="width: 30%">Адрес сайта</th>
			</tr>
			<tr>
				<td>Министерство науки и высшего образования Российской Федерации</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'https://minobrnauki.gov.ru',
						'минобрнаука',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Министерство просвещения Российской Федерации</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'https://edu.gov.ru',
						'edu.gov.ru',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Федеральная служба по надзору в сфере образования и науки</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'http://www.obrnadzor.gov.ru',
						'www.obrnadzor.gov.ru',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Федеральный портал «Российское образование»</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'http://www.edu.ru',
						'www.edu.ru',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Информационная система «Единое окно доступа к образовательным ресурсам»</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'https://elementy.ru/catalog/8602/Edinoe_okno_dostupa_k_obrazovatelnym_resursam_window_edu_ru',
						'elementy.ru',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Федеральный центр информационно-образовательных ресурсов</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'http://fcior.edu.ru',
						'fcior.edu.ru',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Справочно-поисковая система "Консультант–плюс"</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'http://www.consultant.ru',
						'www.consultant.ru',
						['target' => '_blank']) ?></td>
			</tr>
			<tr>
				<td>
					Электронный читальный зал научно-технической библиотеки БГТУ им.В.Г.Шухова (вход по единому паролю и логину. Преподавателям  и студентам для получения логина и пароля необходимо обратиться в читальный зал библиотеки)
				</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'https://elib.bstu.ru/',
						'elib.bstu.ru',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Электронно-библиотечная система издательства "Лань"</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'http://e.lanbook.com',
						'e.lanbook.com',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Электронно-библиотечная система "IPRsmart"</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'http://www.iprbookshop.ru',
						'www.iprbookshop.ru',
						['target' => '_blank']) ?></td>
			</tr>
			<tr>
				<td>Электронно-библиотечная система "Юрайт"</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'https://biblio-online.ru',
						'biblio-online.ru',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>"Университетская библиотека ONLINE"</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'http://biblioclub.ru/index.php?page=main_ub_red',
						'biblioclub.ru',
						['target' => '_blank']) ?>
				</td>
			</tr>
			<tr>
				<td>Электронно-библиотечная система ZNANIUM</td>
				<td class="text-center" style="vertical-align: middle">
					<?= HTML::anchor(
						'http://znanium.com',
						'znanium.com',
						['target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td>Электронный каталог библиотеки СКФ БГТУ им.В.Г.Шухова</td>
				<td class="text-center" style="vertical-align: middle">
					локальная сеть
				</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center">
		О количестве помещений в общежитии, интернате, формировании платы за проживание в общежитии
	</h4>
	<p>
		Общежития нет
	</p>

	<h3 class="text-center" style="margin-top: 1em;">
		Информация о материально-техническом обеспечении образовательной деятельности, в том числе и в отношении инвалидов и лиц с ограниченными возможностями здоровья:
	</h3>

	<h4 class="text-center">
		об обеспечении доступа в здания образовательной организации инвалидов и лиц с ограниченными
		возможностями здоровья (в том числе наличие пандусов, подъёмников, поручней, расширенных дверных
		проёмов, лифтов и др.)
	</h4>
	<h6 class="text-center" style="color: #0000FF">
		с нарушениями опорно-двигательного аппарата
	</h6>

	<div class="table-responsive" itemprop="access">
		<table class="table table-bordered table-condensed bg-info">
			<tr>
				<th style="width: 30%" rowspan="2">Наименование объекта</th>
				<th style="width: 70%" colspan="6">
					Характеристики объекта (наличие на объекте)
				</th>
			</tr>
			<tr>
				<th>пандусы/поручни</th>
				<th>лифты</th>
				<th>подъёмники</th>
				<th>кнопка вызова помощи</th>
				<th>расширенные дверные проёмы</th>
				<th>туалеты для инвалидов</th>
			</tr>
			<tr>
				<td>Учебный корпус №1</td>
				<td class="text-center">да</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
			</tr>
			<tr>
				<td>Учебный корпус №3</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">да</td>
				<td class="text-center">нет</td>
			</tr>
			<tr>
				<td>Учебный корпус №4</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
			</tr>
			<tr>
				<td>Физкультурно-оздоровительный центр</td>
				<td class="text-center">да</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">нет</td>
			</tr>
		</table>
	</div>

	<h6 class="text-center" style="color: #0000FF">
		с нарушениями зрения и слуха
	</h6>

	<div class="table-responsive" itemprop="access">
		<table class="table table-bordered table-condensed bg-info">
			<tr>
				<th style="width: 30%" rowspan="2">Наименование объекта</th>
				<th style="width: 70%" colspan="5">
					Характеристики объекта (наличие на объекте)
				</th>
			</tr>
			<tr>
				<th>маяк световой</th>
				<th>индукционная портативная система VERT-1а</th>
				<th>
					информационная тактильная мнемосхема отображающая информацию о помещениях, находящихся в здании
				</th>
				<th>кнопка вызова помощи со шрифтом Брайля</th>
				<th>звуковой маяк VERTICAL-2/2/IR с датчиком движения</th>
			</tr>
			<tr>
				<td>Учебный корпус №1</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
			</tr>
			<tr>
				<td>Учебный корпус №3</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">да</td>
				<td class="text-center">нет</td>
				<td class="text-center">да</td>
			</tr>
			<tr>
				<td>Учебный корпус №4</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
			</tr>
			<tr>
				<td>Физкультурно-оздоровительный центр</td>
				<td class="text-center">нет</td>
				<td class="text-center">нет</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
				<td class="text-center">да</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center" style="margin-top: 5px;">
		о наличии специальных технических средств обучения коллективного и индивидуального пользования для
		инвалидов и лиц с ограниченными возможностями здоровья
	</h4>

	<div itemprop="techOvz">
		<p>
			С целью оптимизации учебного процесса и компенсации утраченной или нарушенной слуховой функции для
			слабослышащих обучающихся (при их наличии) предусмотрено использование сурдотехнических и иных
			технических средств. Аудитория оснащена компьютерной техникой, аудиотехникой (переносная индукционная
			петля), видеотехникой (мультимедийный проектор). Слабослышащие обучающиеся обеспечиваются
			видеоматериалами.
		</p>

		<p>
			Для слабовидящих обучающихся (при их наличии) в компьютерном классе и библиотеке предусматривается
			возможность использования клавиатуры Брайля.
		</p>
	</div>

	<div class="col-xs-12 danger" style="border-top: 1px solid #555; margin-top: .5em; margin-bottom: .5em"></div>

	<div class="col-xs-12" style="margin-bottom: .5em">
		<?= HTML::image(
			$dir_img . 'signature.png',
			[
				'style' => 'max-width: 1em',
				'title' => 'Файл подписан простой электронной подписью
	Дата, время: 07.06.2021 15:05
	ФИО: Курбатов Владимир Леонидович
	Должность: директор
	Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
			]
		) ?>
		<?= HTML::anchor($dir_docs . 'passport_dost.pdf',
			'Паспорт доступности объекта социальной инфраструктура',
			[
				'target' => '_blank',
			]
		) ?>
	</div>
</div>
