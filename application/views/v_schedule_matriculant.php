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
			Для лиц, поступающих по результатам вступительных испытаний, проводимых СКФ БГТУ им.В.Г.Шухова
			самостоятельно, провести вступительные испытания по графику:
		</p>

		<? if (count($intramural) > 0): ?>
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

					<? foreach ($intramural as $schedule): ?>
						<? $subject = ORM::factory('schedulematriculant')->where('education', '=', 0)->and_where('subject', '=', $schedule->subject)->order_by('event_type')->find_all() ?>

						<tr>
							<td><?= $schedule->subject ?></td>
							<? foreach ($subject as $event_type): ?>
								<td class="text-center">
									<?= $event_type->event_type == 1 ? '<b>' : '' ?>
									<?= Helper_Addfunction::datetime_from_mysql($event_type->date, FALSE) ?>
									<?= '(' . $weekdays[date('w', strtotime($event_type->date))] . ')' ?>
									<?= $event_type->event_type == 1 ? '</b>' : '' ?>
								</td>
								<td class="text-center">
									<?= $event_type->event_type == 1 ? '<b>' : '' ?>
									<?= $event_type->classroom ?>
									<?= $event_type->event_type == 1 ? '</b>' : '' ?>
								</td>
							<? endforeach ?>
						</tr>
					<? endforeach ?>
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

			<? if ($intramural_reserve_day->subject): ?>
				<p>
					<em><?= $intramural_reserve_day->subject ?>
						- <?= Helper_Addfunction::datetime_from_mysql($intramural_reserve_day->date, FALSE) . ' (' . $weekdays[date('w', strtotime($intramural_reserve_day->date))] . ')' ?></em>
				</p>
			<? endif ?>
		<? endif ?>

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

		<p>
			Вступительные испытания на очную, очно-заочную и заочную формы обучения на <b>места с полным возмещением затрат</b> (по договору об оказании платных
			образовательных услуг) проводятся по субботам (с 02.07.22г. по 27.08.22г., начало экзаменов в 10:00) кабинет №10
		</p>
		<? /* else: */ ?><!--
		<h4 class="text-center" style="margin: 3em 0">Приёмная кампания ещё не началась</h4>
	--><? /* endif */ ?>
	<? endif ?>
</div>
    