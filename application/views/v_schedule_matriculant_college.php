<div class="schedule-matriculant">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<h2 class="text-center"><?= $page_title ?></h2>

		<p>
			Для лиц, поступающих по программам среднего профессионального образования на направление 07.02.01 «Архитектура» по
			результатам вступительных испытаний, проводимых СКФ БГТУ им.В.Г.Шухова самостоятельно, провести вступительные испытания
			по графику:
		</p>

		<div class="table table-responsive">
			<table class="table-responsive table-bordered table-condensed" style="width: 100%">
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

				<tr>
					<td>рисунок</td>
					<td class="text-center">24.07.2023 09:00 (пн)</td>
					<td class="text-center">10</td>
					<td class="text-center">21.07.2023 09:00 (пт)</td>
					<td class="text-center">10</td>
					<td class="text-center">25.07.2023 14:00 (вт)</td>
					<td class="text-center">10</td>
					<td class="text-center">25.07.2023 14:30 (вт)</td>
					<td class="text-center">10</td>
				</tr>

				<tr>
					<td>рисунок</td>
					<td class="text-center">09.08.2023 10:00 (ср)</td>
					<td class="text-center">10</td>
					<td class="text-center">08.08.2023 10:00 (вт)</td>
					<td class="text-center">10</td>
					<td class="text-center">10.08.2023 14:00 (чт)</td>
					<td class="text-center">10</td>
					<td class="text-center">10.08.2023 14:30 (чт)</td>
					<td class="text-center">10</td>
				</tr>

				<tr>
					<td>рисунок</td>
					<td class="text-center">29.08.2023 11:00 (вт)</td>
					<td class="text-center">10</td>
					<td class="text-center">25.08.2023 11:00 (пт)</td>
					<td class="text-center">10</td>
					<td class="text-center">30.08.2023 14:00 (ср)</td>
					<td class="text-center">10</td>
					<td class="text-center">30.08.2023 14:30 (ср)</td>
					<td class="text-center">10</td>
				</tr>
			</table>
		</div>
	<? endif ?>
</div>
    