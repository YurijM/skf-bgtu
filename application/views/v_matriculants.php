<div class="matriculants">
	<h2 class="text-center"><?= $page_title . ' (' . $year . 'г.)' ?></h2>

	<? if ($count_intramural > 0): ?>
		<h4 class="text-center">Очное отделение</h4>

		<? foreach ($intramural as $direction => $costs_kind): ?>
			<? if (count($costs_kind['budget']) + count($costs_kind['by_contract']) > 0): ?>
				<h4 class="text-center direction"><?= $direction ?></h4>

				<? $n = 1 ?>
				<? if (count($costs_kind['budget']) > 0): ?>
					<p>Бюджет</p>

					<div class="table-responsive">
						<table class="table table-bordered table-condensed bg-info">
							<tr>
								<th rowspan="3" width="3%">№ п/п</th>
								<th rowspan="3" width="30%">Абитуриент</th>
								<th colspan="<?= count($costs_kind['subjects']) + 1 + 1 ?>" width="25%">Учитываемые результаты</th>
								<th rowspan="3" width="7%">Инд. достижения</th>
								<th rowspan="3" width="7%">Итого баллов</th>
								<th rowspan="3" width="7%">Профиль</th>
								<th rowspan="3" width="7%">Документ</th>
								<th rowspan="3" width="7%">Статус</th>
								<th rowspan="3" width="7%">Примечание</th>
							</tr>
							<tr>
								<th colspan="4">ЕГЭ</th>
								<th rowspan="2">Всего за ЕГЭ</th>
								<th rowspan="2">Вступительные испытания</th>
							</tr>
							<tr>
								<? foreach ($costs_kind['subjects'] as $subject): ?>
									<th><?= $subject->subject ?></th>
								<? endforeach ?>
							</tr>

							<? foreach ($costs_kind['budget'] as $matriculant): ?>
								<tr>
									<td class="text-center"><?= $n++ ?></td>
									<td><?= $matriculant->family . ' ' . $matriculant->name . ' ' . $matriculant->patronymic ?></td>
									<td class="text-center"><?= ($matriculant->points_1 ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->points_2 ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->points_3 ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->points_4 ?: '') ?></td>
									<? $points = $matriculant->points_1 + $matriculant->points_2 + $matriculant->points_3 + $matriculant->points_4 ?>
									<td class="text-center"><?= ($points ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->test ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->achievement > 0 ? $matriculant->achievement : '') ?></td>
									<td class="text-center">
										<?= $matriculant->points_1 + $matriculant->points_2 + $matriculant->points_3 + $matriculant->points_4 + $matriculant->test +
										$matriculant->achievement ?>
									</td>
									<td class="text-center"><?= $matriculant->section->short ?></td>
									<td class="text-center"><?= $docs_kind[$matriculant->doc_kind] ?></td>
									<td class="text-center"><?= $statuses[$matriculant->status] ?></td>
									<td><?= $matriculant->remark ?></td>
								</tr>
							<? endforeach ?>
						</table>
					</div>
				<? endif ?>

				<? if (count($costs_kind['by_contract']) > 0): ?>
					<p>Полное возмещение затрат</p>
					<div class="table-responsive">
						<table class="table table-bordered table-condensed bg-success">
							<tr>
								<th rowspan="3" width="3%">№ п/п</th>
								<th rowspan="3" width="30%">Абитуриент</th>
								<th colspan="<?= count($costs_kind['subjects']) + 1 + 1 ?>" width="25%">Учитываемые результаты</th>
								<th rowspan="3" width="7%">Инд. достижения</th>
								<th rowspan="3" width="7%">Итого баллов</th>
								<th rowspan="3" width="7%">Профиль</th>
								<th rowspan="3" width="7%">Документ</th>
								<th rowspan="3" width="7%">Статус</th>
								<th rowspan="3" width="7%">Примечание</th>
							</tr>
							<tr>
								<th colspan="4">ЕГЭ</th>
								<th rowspan="2">Всего за ЕГЭ</th>
								<th rowspan="2">Вступительные испытания</th>
							</tr>
							<tr>
								<? foreach ($costs_kind['subjects'] as $subject): ?>
									<th><?= $subject->subject ?></th>
								<? endforeach ?>
							</tr>

							<? foreach ($costs_kind['by_contract'] as $matriculant): ?>
								<tr>
									<td class="text-center"><?= $n++ ?></td>
									<td><?= $matriculant->family . ' ' . $matriculant->name . ' ' . $matriculant->patronymic ?></td>
									<td class="text-center"><?= ($matriculant->points_1 ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->points_2 ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->points_3 ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->points_4 ?: '') ?></td>
									<? $points = $matriculant->points_1 + $matriculant->points_2 + $matriculant->points_3 + $matriculant->points_4 ?>
									<td class="text-center"><?= ($points ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->test ?: '') ?></td>
									<td class="text-center"><?= ($matriculant->achievement > 0 ? $matriculant->achievement : '') ?></td>
									<td class="text-center">
										<?= $matriculant->points_1 + $matriculant->points_2 + $matriculant->points_3 + $matriculant->points_4 + $matriculant->test +
										$matriculant->achievement ?>
									</td>
									<td class="text-center"><?= $matriculant->section->short ?></td>
									<td class="text-center"><?= $docs_kind[$matriculant->doc_kind] ?></td>
									<td class="text-center"><?= $statuses[$matriculant->status] ?></td>
									<td><?= $matriculant->remark ?></td>
								</tr>
							<? endforeach ?>
						</table>
					</div>
				<? endif ?>

				<hr>
			<? endif ?>
		<? endforeach ?>
	<? endif ?>

	<? if ($count_extramural > 0): ?>
		<h4 class="text-center">Заочное отделение</h4>

		<? foreach ($extramural as $direction => $costs_kind): ?>
			<? if (count($costs_kind['by_contract']) > 0): ?>
				<h4 class="text-center direction"><?= $direction ?></h4>

				<? $n = 1 ?>
				<div class="table-responsive">
					<table class="table table-bordered table-condensed bg-success">
						<tr>
							<th rowspan="3" width="3%">№ п/п</th>
							<th rowspan="3" width="30%">Абитуриент</th>
							<th colspan="<?= count($costs_kind['subjects']) + 1 + 1 ?>" width="25%">Учитываемые результаты</th>
							<th rowspan="3" width="7%">Инд. достижения</th>
							<th rowspan="3" width="7%">Итого баллов</th>
							<th rowspan="3" width="7%">Профиль</th>
							<th rowspan="3" width="7%">Документ</th>
							<th rowspan="3" width="7%">Статус</th>
							<th rowspan="3" width="7%">Примечание</th>
						</tr>
						<tr>
							<th colspan="4">ЕГЭ</th>
							<th rowspan="2">Всего за ЕГЭ</th>
							<th rowspan="2">Вступительные испытания</th>
						</tr>
						<tr>
							<? foreach ($costs_kind['subjects'] as $subject): ?>
								<th><?= $subject->subject ?></th>
							<? endforeach ?>
						</tr>

						<? foreach ($costs_kind['by_contract'] as $matriculant): ?>
							<tr>
								<td class="text-center"><?= $n++ ?></td>
								<td><?= $matriculant->family . ' ' . $matriculant->name . ' ' . $matriculant->patronymic ?></td>
								<td class="text-center"><?= ($matriculant->points_1 ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->points_2 ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->points_3 ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->points_4 ?: '') ?></td>
								<? $points = $matriculant->points_1 + $matriculant->points_2 + $matriculant->points_3 + $matriculant->points_4 ?>
								<td class="text-center"><?= ($points ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->test ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->achievement > 0 ? $matriculant->achievement : '') ?></td>
								<td class="text-center">
									<?= $matriculant->points_1 + $matriculant->points_2 + $matriculant->points_3 + $matriculant->points_4 + $matriculant->test +
									$matriculant->achievement ?>
								</td>
								<td class="text-center"><?= $matriculant->section->short ?></td>
								<td class="text-center"><?= $docs_kind[$matriculant->doc_kind] ?></td>
								<td class="text-center"><?= $statuses[$matriculant->status] ?></td>
								<td><?= $matriculant->remark ?></td>
							</tr>
						<? endforeach ?>
					</table>
				</div>

				<hr>
			<? endif ?>
		<? endforeach ?>
	<? endif ?>

	<? if ($count_int_ext > 0): ?>
		<h4 class="text-center">Очно-заочное отделение</h4>

		<? foreach ($int_ext as $direction => $costs_kind): ?>
			<? if (count($costs_kind['by_contract']) > 0): ?>
				<h4 class="text-center direction"><?= $direction ?></h4>

				<? $n = 1 ?>
				<div class="table-responsive">
					<table class="table table-bordered table-condensed bg-success">
						<tr>
							<th rowspan="3" width="3%">№ п/п</th>
							<th rowspan="3" width="30%">Абитуриент</th>
							<th colspan="<?= count($costs_kind['subjects']) + 1 + 1 ?>" width="25%">Учитываемые результаты</th>
							<th rowspan="3" width="7%">Инд. достижения</th>
							<th rowspan="3" width="7%">Итого баллов</th>
							<th rowspan="3" width="7%">Профиль</th>
							<th rowspan="3" width="7%">Документ</th>
							<th rowspan="3" width="7%">Статус</th>
							<th rowspan="3" width="7%">Примечание</th>
						</tr>
						<tr>
							<th colspan="4">ЕГЭ</th>
							<th rowspan="2">Всего за ЕГЭ</th>
							<th rowspan="2">Вступительные испытания</th>
						</tr>
						<tr>
							<? foreach ($costs_kind['subjects'] as $subject): ?>
								<th><?= $subject->subject ?></th>
							<? endforeach ?>
						</tr>

						<? foreach ($costs_kind['by_contract'] as $matriculant): ?>
							<tr>
								<td class="text-center"><?= $n++ ?></td>
								<td><?= $matriculant->family . ' ' . $matriculant->name . ' ' . $matriculant->patronymic ?></td>
								<td class="text-center"><?= ($matriculant->points_1 ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->points_2 ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->points_3 ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->points_4 ?: '') ?></td>
								<? $points = $matriculant->points_1 + $matriculant->points_2 + $matriculant->points_3 + $matriculant->points_4 ?>
								<td class="text-center"><?= ($points ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->test ?: '') ?></td>
								<td class="text-center"><?= ($matriculant->achievement > 0 ? $matriculant->achievement : '') ?></td>
								<td class="text-center">
									<?= $matriculant->points_1 + $matriculant->points_2 + $matriculant->points_3 + $matriculant->points_4 + $matriculant->test +
									$matriculant->achievement ?>
								</td>
								<td class="text-center"><?= $matriculant->section->short ?></td>
								<td class="text-center"><?= $docs_kind[$matriculant->doc_kind] ?></td>
								<td class="text-center"><?= $statuses[$matriculant->status] ?></td>
								<td><?= $matriculant->remark ?></td>
							</tr>
						<? endforeach ?>
					</table>
				</div>

				<hr>
			<? endif ?>
		<? endforeach ?>
	<? endif ?>

	<? if ($count_intramural + $count_extramural + $count_int_ext == 0): ?>
		<h4 class="text-center" style="margin: 3em 0">Приёмная кампания ещё не началась</h4>
	<? endif ?>
</div>
    