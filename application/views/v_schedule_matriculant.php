<div class="schedule-matriculant">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<h2 class="text-center"><?= $page_title ?></h2>

		<h4 class="text-center">Расписание вступительных испытаний на июль</h4>

		<h6 class="text-center">
			Для лиц, поступающих по программам высшего образования по результатам вступительных испытаний, проводимых СКФ БГТУ им.В.Г.Шухова
			самостоятельно на очную и очно-заочную форму обучения на места в рамках КЦП*
		</h6>

		<div class="table-responsive">
			<table class="table table-bordered table-condensed bg-info">
				<tr>
					<th rowspan="2">Предмет</th>
					<th rowspan="2">Дата экзамена</th>
					<th rowspan="2">Ауд.</th>
					<th colspan="2">Консультация</th>
					<th colspan="2">Объявление результатов<br>14:00</th>
					<th colspan="2">Рассмотрение аппеляций<br>14:30</th>
				</tr>
				<tr>
					<th>Дата</th>
					<th>Ауд.</th>
					<th>Дата</th>
					<th>Ауд.</th>
					<th>Дата</th>
					<th>Ауд.</th>
				</tr>
				<tr>
					<td>Математика</td>
					<td class="text-center">18.07.2023 10:00 (вт)</td>
					<td class="text-center">10</td>
					<td class="text-center">14.07.2023 09:00 (пт)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.07.2023 (сб)</td>
					<td class="text-center">10</td>
					<td class="text-center">24.07.2023 (пн)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td>Русский язык</td>
					<td class="text-center">19.07.2023 10:00 (ср)</td>
					<td class="text-center">10</td>
					<td class="text-center">17.07.2023 09:00 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.07.2023 (сб)</td>
					<td class="text-center">10</td>
					<td class="text-center">24.07.2023 (пн)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td>Физика</td>
					<td class="text-center">20.07.2023 10:00 (чт)</td>
					<td class="text-center">10</td>
					<td class="text-center">18.07.2023 09:00 (вт)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.07.2023 (сб)</td>
					<td class="text-center">10</td>
					<td class="text-center">24.07.2023 (пн)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td>Обществознание</td>
					<td class="text-center">21.07.2023 10:00 (пт)</td>
					<td class="text-center">10</td>
					<td class="text-center">19.07.2023 09:00 (ср)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.07.2023 (сб)</td>
					<td class="text-center">10</td>
					<td class="text-center">24.07.2023 (пн)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td>Информатика</td>
					<td class="text-center">24.07.2023 10:00 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">20.07.2023 09:00 (чт)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.07.2023 (сб)</td>
					<td class="text-center">10</td>
					<td class="text-center">24.07.2023 (пн)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td colspan="9" class="text-center">Резервный день 24.07.2023 (пн)</td>
				</tr>
			</table>
		</div>

		<div class="text-right small"><i><b>*КЦП - контрольные цифры приема</b></i></div>

		<p>
			<b>Вступительные испытания на очную, очно-заочную и заочную формы обучения на места с полным возмещением затрат</b> по договору об
			оказании платных образовательных услуг) <b>проводятся по субботам (с 03.07.2023г. по 28.08.2023г., начало экзаменов в 10:00)</b> кабинет №10.
		</p>


		<h3 class="text-center" style="margin-top: 1em">Расписание вступительных испытаний на август</h3>

		<h6 class="text-center">
			Для лиц, поступающих по программам высшего образования по результатам вступительных испытаний, проводимых СКФ БГТУ им.В.Г.Шухова
			самостоятельно на очную форму обучения на места в рамках КЦП*
		</h6>

		<div class="table-responsive" style="margin-top: 1em;">
			<table class="table table-bordered table-condensed bg-success">
				<tr>
					<th rowspan="2">Предмет</th>
					<th rowspan="2">Дата экзамена</th>
					<th rowspan="2">Ауд.</th>
					<th colspan="2">Консультация</th>
					<th colspan="2">Объявление результатов<br>14:00</th>
					<th colspan="2">Рассмотрение аппеляций<br>14:30</th>
				</tr>
				<tr>
					<th>Дата</th>
					<th>Ауд.</th>
					<th>Дата</th>
					<th>Ауд.</th>
					<th>Дата</th>
					<th>Ауд.</th>
				</tr>
				<tr>
					<td>Математика</td>
					<td class="text-center">14.08.2023 10:00 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">10.08.2023 09:00 (чт)</td>
					<td class="text-center">10</td>
					<td class="text-center">21.08.2023 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.08.2023 (вт)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td>Русский язык</td>
					<td class="text-center">15.08.2023 10:00 (вт)</td>
					<td class="text-center">10</td>
					<td class="text-center">11.08.2023 09:00 (пт)</td>
					<td class="text-center">10</td>
					<td class="text-center">21.08.2023 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.08.2023 (вт)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td>Физика</td>
					<td class="text-center">16.08.2023 10:00 (ср)</td>
					<td class="text-center">10</td>
					<td class="text-center">12.08.2023 09:00 (сб)</td>
					<td class="text-center">10</td>
					<td class="text-center">21.08.2023 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.08.2023 (вт)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td>Обществознание</td>
					<td class="text-center">17.08.2023 10:00 (чт)</td>
					<td class="text-center">10</td>
					<td class="text-center">14.08.2023 09:00 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">21.08.2023 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.08.2023 (вт)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td>Информатика</td>
					<td class="text-center">18.08.2023 10:00 (пт)</td>
					<td class="text-center">10</td>
					<td class="text-center">15.08.2023 09:00 (вт)</td>
					<td class="text-center">10</td>
					<td class="text-center">21.08.2023 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">22.08.2023 (вт)</td>
					<td class="text-center">10</td>
				</tr>
				<tr>
					<td colspan="9" class="text-center">Резервный день 25.08.2023 (пт)</td>
				</tr>
			</table>
		</div>

		<div class="text-right small"><i><b>*КЦП - контрольные цифры приема</b></i></div>

		<p>
			<b>Вступительные испытания на очную, очно-заочную и заочную формы обучения на места с полным возмещением затрат</b> по договору об
			оказании платных образовательных услуг) <b>проводятся по субботам (с 03.07.2023г. по 28.08.2023г., начало экзаменов в 10:00)</b> кабинет №10.
		</p>
	<? endif ?>
</div>
    