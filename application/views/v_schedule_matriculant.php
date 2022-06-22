<div class="schedule-matriculant">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<h2 class="text-center"><?= $page_title ?></h2>

		<? /* if (count($intramural) + count($extramural) > 0): */ ?>
		<p>
			Лица, имеющие среднее общее образование (11 классов), поступают в ВУЗ по результатам <b>ЕГЭ</b>.
		</p>

		<h4 class="text-center">График сдачи на ИЮЛЬ</h4>

		<p>
			1) Лица, имеющие среднее общее образование (11 классов) и относящиеся к инвалидам, лицам с ограниченными возможностями здоровья или к иностранным
			гражданам, поступающие <b>на очную форму обучения на бюджетные места</b> (в рамках контрольных цифр приема), а также <b>на очную, очно-заочную и
				заочную формы</b> обучения на места с полным возмещением затрат <b>(платно)</b>, сдают вступительные испытания, проводимые СКФ БГТУ им.В.Г.Шухова,
			самостоятельно, в соответствии с графиком:
		</p>

		<div class="table table-responsive row">
			<table class="table-responsive table-bordered table-condensed bg-info col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12">
				<tr>
					<th>Предмет</th>
					<th>Консультация в 9:00 ауд.10</th>
					<th>Экзамен в 10:00 ауд.10</th>
				</tr>
				<tr>
					<td>Математика</td>
					<td class="text-center">15.07.2022 (пт)</td>
					<td class="text-center"><b>18.07.2022 (пн)</b></td>
				</tr>
				<tr>
					<td>Русский язык</td>
					<td class="text-center">18.07.2022 (пн)</td>
					<td class="text-center"><b>19.07.2022 (вт)</b></td>
				</tr>
				<tr>
					<td>Физика</td>
					<td class="text-center">19.07.2022 (вт)</td>
					<td class="text-center"><b>20.07.2022 (ср)</b></td>
				</tr>
				<tr>
					<td>Обществознание</td>
					<td class="text-center">20.07.2022 (ср)</td>
					<td class="text-center"><b>21.07.2022 (чт)</b></td>
				</tr>
				<tr>
					<td>Информатика</td>
					<td class="text-center">21.07.2022 (чт)</td>
					<td class="text-center"><b>22.07.2022 (пт)</b></td>
				</tr>
			</table>
		</div>

		<p>
			2) Лица, имеющие среднее профессиональное образование, поступающие <b>на очную форму обучения на бюджетные места</b> (в рамках контрольных цифр
			приема), а также <b>на очную, очно-заочную и заочную формы</b> обучения на места с полным возмещением затрат <b>(платно)</b>, сдают вступительные
			испытания, проводимые СКФ БГТУ им.В.Г.Шухова, самостоятельно, в соответствии с графиком:
		</p>

		<div class="table table-responsive row">
			<table class="table-responsive table-bordered table-condensed bg-info col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12">
				<tr>
					<th>Предмет</th>
					<th>Консультация в 9:00 ауд.10</th>
					<th>Экзамен в 10:00 ауд.10</th>
				</tr>
				<tr>
					<td>Прикладная математика</td>
					<td class="text-center">15.07.2022 (пт)</td>
					<td class="text-center"><b>18.07.2022 (пн)</b></td>
				</tr>
				<tr>
					<td>Русский язык</td>
					<td class="text-center">18.07.2022 (пн)</td>
					<td class="text-center"><b>19.07.2022 (вт)</b></td>
				</tr>
				<tr>
					<td>Механика</td>
					<td class="text-center">19.07.2022 (вт)</td>
					<td class="text-center"><b>20.07.2022 (ср)</b></td>
				</tr>
				<tr>
					<td>Экономика организации</td>
					<td class="text-center">20.07.2022 (ср)</td>
					<td class="text-center"><b>21.07.2022 (чт)</b></td>
				</tr>
				<tr>
					<td>Информационные технологии</td>
					<td class="text-center">21.07.2022 (чт)</td>
					<td class="text-center"><b>22.07.2022 (пт)</b></td>
				</tr>
			</table>
		</div>

		<p>
			<b>Резервный день</b> - 25.07.2022 09:00 (пн)
		</p>
		<p>
			<b>Объявление результатов</b> на следующий день после проведения экзамена, путем размещения на официальном сайте.
		</p>
		<p>
			<b>Апелляция</b> на следующий день после объявления результатов экзамена.
		</p>

		<h4 class="text-center">График сдачи на АВГУСТ</h4>

		<p>
			1) Лица, имеющие среднее общее образование (11 классов) и относящиеся к инвалидам, лицам с ограниченными возможностями здоровья или к иностранным
			гражданам,  поступающие <b>на очную, очно-заочную, заочную формы</b> обучения на места с полным возмещением затрат <b>(платно)</b>, сдают
			вступительные испытания, проводимые СКФ БГТУ им.В.Г.Шухова, самостоятельно, в соответствии с графиком:
		</p>

		<div class="table table-responsive row">
			<table class="table-responsive table-bordered table-condensed bg-success col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12">
				<tr>
					<th>Предмет</th>
					<th>Консультация в 9:00 ауд.10</th>
					<th>Экзамен в 10:00 ауд.10</th>
				</tr>
				<tr>
					<td>Математика</td>
					<td class="text-center">12.08.2022 (пт)</td>
					<td class="text-center"><b>15.08.2022 (пн)</b></td>
				</tr>
				<tr>
					<td>Русский язык</td>
					<td class="text-center">15.08.2022 (пн)</td>
					<td class="text-center"><b>16.08.2022 (вт)</b></td>
				</tr>
				<tr>
					<td>Физика</td>
					<td class="text-center">16.08.2022 (вт)</td>
					<td class="text-center"><b>17.08.2022 (ср)</b></td>
				</tr>
				<tr>
					<td>Обществознание</td>
					<td class="text-center">17.08.2022 (ср)</td>
					<td class="text-center"><b>18.08.2022 (чт)</b></td>
				</tr>
				<tr>
					<td>Информатика</td>
					<td class="text-center">18.08.2022 (чт)</td>
					<td class="text-center"><b>19.08.2022 (пт)</b></td>
				</tr>
			</table>
		</div>

		<p>
			2) Лица, имеющие среднее профессиональное и высшее образование, поступающие <b>на очную, очно-заочную, заочную формы</b> обучения на места с полным
			возмещением затрат <b>(платно)</b>, сдают  вступительные испытания, проводимые СКФ БГТУ им.В.Г.Шухова, самостоятельно, в соответствии с графиком:
		</p>

		<div class="table table-responsive row">
			<table class="table-responsive table-bordered table-condensed bg-success col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12">
				<tr>
					<th>Предмет</th>
					<th>Консультация в 9:00 ауд.10</th>
					<th>Экзамен в 10:00 ауд.10</th>
				</tr>
				<tr>
					<td>Прикладная математика</td>
					<td class="text-center">12.08.2022 (пт)</td>
					<td class="text-center"><b>15.08.2022 (пн)</b></td>
				</tr>
				<tr>
					<td>Русский язык</td>
					<td class="text-center">15.08.2022 (пн)</td>
					<td class="text-center"><b>16.08.2022 (вт)</b></td>
				</tr>
				<tr>
					<td>Механика</td>
					<td class="text-center">16.08.2022 (вт)</td>
					<td class="text-center"><b>17.08.2022 (ср)</b></td>
				</tr>
				<tr>
					<td>Экономика организации</td>
					<td class="text-center">17.08.2022 (ср)</td>
					<td class="text-center"><b>18.08.2022 (чт)</b></td>
				</tr>
				<tr>
					<td>Информационные технологии</td>
					<td class="text-center">18.08.2022 (чт)</td>
					<td class="text-center"><b>19.08.2022 (пт)</b></td>
				</tr>
			</table>
		</div>

		<p>
			<b>Резервные дни</b> - 20.08.2022 09:00 (сб), 27.08.2022 09:00 (сб)
		</p>
		<p>
			<b>Объявление результатов</b> на следующий день после проведения экзамена, путем размещения на официальном сайте.
		</p>
		<p>
			<b>Апелляция</b> на следующий день после объявления результатов экзамена.
		</p>

		<? /* if (count($intramural) > 0): */ ?><!--
			<h4 class="text-center">на очную форму обучения на места в рамках КЦП (контрольных цифр приема)</h4>
			<h4 class="text-center">для инвалидов и лиц с ограниченными возможностями на базе 11 классов</h4>

			<div class="table table-responsive">
				<table class="table-responsive table-bordered table-condensed bg-info" style="width: 100%">
					<tr>
						<th rowspan="2">Предмет</th>
						<th colspan="2">Консультация</th>
						<th colspan="2">Экзамен</th>
						<th colspan="2">Объявление результатов</th>
						<th colspan="2">Апелляция</th>
					</tr>
					<tr>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
					</tr>

					<? /* foreach ($intramural as $schedule): */ ?>
						<? /* $subject = ORM::factory('schedulematriculant')->where('education', '=', 0)->and_where('subject', '=', $schedule->subject)->order_by('event_type')->find_all() */ ?>

						<tr>
							<td><? /*= $schedule->subject */ ?></td>
							<? /* foreach ($subject as $event_type): */ ?>
								<td class="text-center">
									<? /*= $event_type->event_type == 1 ? '<b>' : '' */ ?>
									<? /*= Helper_Addfunction::datetime_from_mysql($event_type->date, FALSE) */ ?>
									<? /*= '(' . $weekdays[date('w', strtotime($event_type->date))] . ')' */ ?>
									<? /*= $event_type->event_type == 1 ? '</b>' : '' */ ?>
								</td>
								<td class="text-center">
									<? /*= $event_type->event_type == 1 ? '<b>' : '' */ ?>
									<? /*= $event_type->classroom */ ?>
									<? /*= $event_type->event_type == 1 ? '</b>' : '' */ ?>
								</td>
							<? /* endforeach */ ?>
						</tr>
					<? /* endforeach */ ?>
				</table>
			</div>

			<h4 class="text-center">на очную форму обучения на места в рамках КЦП (контрольных цифр приема)</h4>
			<h4 class="text-center">на базе среднего профессионального образования</h4>

			<div class="table table-responsive">
				<table class="table-responsive table-bordered table-condensed bg-success" style="width: 100%">
					<tr>
						<th rowspan="2">Предмет</th>
						<th colspan="2">Консультация</th>
						<th colspan="2">Экзамен</th>
						<th colspan="2">Объявление результатов</th>
						<th colspan="2">Апелляция</th>
					</tr>
					<tr>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
					</tr>

					<tr>
						<td>Прикладная математика</td>
						<td class="text-center">15.07.2022 09:00 (пт)</td>
						<td class="text-center">10</td>
						<td class="text-center"><b>18.07.2022 10:00 (пн)</b></td>
						<td class="text-center"><b>10</b></td>
						<td class="text-center">22.07.2022 14:00 (пт)</td>
						<td class="text-center">на сайте</td>
						<td class="text-center">23.07.2022 14:30 (сб)</td>
						<td class="text-center">10</td>
					</tr>

					<tr>
						<td>Русский язык</td>
						<td class="text-center">18.07.2022 09:00 (пн)</td>
						<td class="text-center">10</td>
						<td class="text-center"><b>19.07.2022 10:00 (вт)</b></td>
						<td class="text-center"><b>10</b></td>
						<td class="text-center">22.07.2022 14:00 (пт)</td>
						<td class="text-center">на сайте</td>
						<td class="text-center">23.07.2022 14:30 (сб)</td>
						<td class="text-center">10</td>
					</tr>

					<tr>
						<td>Механика</td>
						<td class="text-center">19.07.2022 09:00 (вт)</td>
						<td class="text-center">10</td>
						<td class="text-center"><b>20.07.2022 10:00 (ср)</b></td>
						<td class="text-center"><b>10</b></td>
						<td class="text-center">22.07.2022 14:00 (пт)</td>
						<td class="text-center">на сайте</td>
						<td class="text-center">23.07.2022 14:30 (сб)</td>
						<td class="text-center">10</td>
					</tr>

					<tr>
						<td>Экономина организации</td>
						<td class="text-center">20.07.2022 09:00 (ср)</td>
						<td class="text-center">10</td>
						<td class="text-center"><b>21.07.2022 10:00 (чт)</b></td>
						<td class="text-center"><b>10</b></td>
						<td class="text-center">22.07.2022 14:00 (пт)</td>
						<td class="text-center">на сайте</td>
						<td class="text-center">23.07.2022 14:30 (сб)</td>
						<td class="text-center">10</td>
					</tr>

					<tr>
						<td>Информационные технологии</td>
						<td class="text-center">21.07.2022 09:00 (чт)</td>
						<td class="text-center">10</td>
						<td class="text-center"><b>22.07.2022 10:00 (пт)</b></td>
						<td class="text-center"><b>10</b></td>
						<td class="text-center">22.07.2022 14:00 (пт)</td>
						<td class="text-center">на сайте</td>
						<td class="text-center">23.07.2022 14:30 (сб)</td>
						<td class="text-center">10</td>
					</tr>
				</table>
			</div>

			<? /* if ($intramural_reserve_day->subject): */ ?>
				<p>
					<em><? /*= $intramural_reserve_day->subject */ ?>
						- <? /*= Helper_Addfunction::datetime_from_mysql($intramural_reserve_day->date, FALSE) . ' (' . $weekdays[date('w', strtotime($intramural_reserve_day->date))] . ')' */ ?></em>
				</p>
			<? /* endif */ ?>
		--><? /* endif */ ?>

		<? if (count($extramural) > 0): ?>
			<h4 class="text-center">на заочную форму обучения</h4>

			<div class="table table-responsive">
				<table class="table-responsive table-bordered table-condensed bg-info">
					<tr>
						<th rowspan="2">Предмет</th>
						<th colspan="2">Экзамен</th>
						<th colspan="2">Консультация</th>
						<th colspan="2">Объявление результатов</th>
						<th colspan="2">Апелляция</th>
					</tr>
					<tr>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
					</tr>

					<? foreach ($extramural as $schedule): ?>
						<? $subject = ORM::factory('schedulematriculant')->where('education', '=', 1)->and_where('subject', '=', $schedule->subject)->order_by('event_type')->find_all() ?>

						<tr>
							<td><?= $schedule->subject ?></td>
							<? foreach ($subject as $event_type): ?>
								<td class="text-center">
									<?= Helper_Addfunction::datetime_from_mysql($event_type->date, FALSE) ?>
									<?= '(' . $weekdays[date('w', strtotime($event_type->date))] . ')' ?>
								</td>
								<td class="text-center"><?= $event_type->classroom ?></td>
							<? endforeach ?>
						</tr>
					<? endforeach ?>
				</table>
			</div>

			<? if ($extramural_reserve_day->subject): ?>
				<p>
					<em><?= $extramural_reserve_day->subject ?>
						- <?= Helper_Addfunction::datetime_from_mysql($extramural_reserve_day->date, FALSE) . ' (' . $weekdays[date('w', strtotime($extramural_reserve_day->date))] . ')' ?></em>
				</p>
			<? endif ?>
		<? endif ?>

		<? if (count($int_ext) > 0): ?>
			<h4 class="text-center">на очно-заочную форму обучения</h4>

			<div class="table table-responsive">
				<table class="table-responsive table-bordered table-condensed bg-info">
					<tr>
						<th rowspan="2">Предмет</th>
						<th colspan="2">Экзамен</th>
						<th colspan="2">Консультация</th>
						<th colspan="2">Объявление результатов</th>
						<th colspan="2">Апелляция</th>
					</tr>
					<tr>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
						<th>дата</th>
						<th>ауд.</th>
					</tr>

					<? foreach ($int_ext as $schedule): ?>
						<? $subject = ORM::factory('schedulematriculant')->where('education', '=', 2)->and_where('subject', '=', $schedule->subject)->order_by('event_type')->find_all() ?>

						<tr>
							<td><?= $schedule->subject ?></td>
							<? foreach ($subject as $event_type): ?>
								<td class="text-center">
									<?= Helper_Addfunction::datetime_from_mysql($event_type->date, FALSE) ?>
									<?= '(' . $weekdays[date('w', strtotime($event_type->date))] . ')' ?>
								</td>
								<td class="text-center"><?= $event_type->classroom ?></td>
							<? endforeach ?>
						</tr>
					<? endforeach ?>
				</table>
			</div>

			<? if ($int_ext_reserve_day->subject): ?>
				<p>
					<em><?= $extramural_reserve_day->subject ?>
						- <?= Helper_Addfunction::datetime_from_mysql($extramural_reserve_day->date, FALSE) . ' (' . $weekdays[date('w', strtotime($extramural_reserve_day->date))] . ')' ?></em>
				</p>
			<? endif ?>
		<? endif ?>

		<? /* else: */ ?><!--
		<h4 class="text-center" style="margin: 3em 0">Приёмная кампания ещё не началась</h4>
	--><? /* endif */ ?>
	<? endif ?>
</div>
    