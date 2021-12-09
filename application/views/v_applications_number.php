<div class="applications-number">
	<? if (date('Ymd') < date($start[2] . $start[1] . $start[0])
	|| date('Ymd') >= date($finish[2] . $finish[1] . $finish[0])): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<div class="matriculants">
			<h2 class="text-center"><?= $matriculants_page_title . ' (' . $start[2] . 'г.)' ?></h2>

			<? if ($matriculants_count_intramural > 0): ?>
				<h4 class="text-center">Очное отделение</h4>

				<? foreach ($matriculants_intramural as $direction => $costs_kind): ?>
					<? if (count($costs_kind['budget']) + count($costs_kind['by_contract']) > 0): ?>
						<h4 class="text-center direction"><?= $direction ?></h4>

						<? $n = 1 ?>
						<? if (count($costs_kind['budget']) > 0): ?>
							<p>Бюджет</p>

							<div class="table-responsive">
								<table class="table table-bordered table-condensed">
									<tr>
										<th>№ п/п</th>
										<th>Абитуриент</th>
										<th>Профиль</th>
										<th>Документ</th>
										<th>Условия поступления</th>
									</tr>

									<? foreach ($costs_kind['budget'] as $matriculant): ?>
										<tr>
											<td class="text-center"><?= $n++ ?></td>
											<td>
												<?= $matriculant->family . ' ' . $matriculant->name . ' ' . $matriculant->patronymic ?>
											</td>
											<td class="text-center">
												<?= $matriculant->section->short ?>
											</td>
											<td class="text-center">
												<?= $matriculants_docs_kind[$matriculant->doc_kind] ?>
											</td>
											<td class="text-center">
												<?= $matriculants_conditions[$matriculant->admission_conditions] ?>
											</td>
										</tr>
									<? endforeach ?>
								</table>
							</div>
						<? endif ?>

						<? if (count($costs_kind['by_contract']) > 0): ?>
							<p>Полное возмещение затрат</p>
							<div class="table-responsive">
								<table class="table table-bordered table-condensed">
									<tr>
										<th>№ п/п</th>
										<th>Абитуриент</th>
										<th>Профиль</th>
										<th>Документ</th>
										<th>Условия поступления</th>
									</tr>

									<? foreach ($costs_kind['by_contract'] as $matriculant): ?>
										<tr>
											<td class="text-center"><?= $n++ ?></td>
											<td>
												<?= $matriculant->family . ' ' . $matriculant->name . ' ' . $matriculant->patronymic ?>
											</td>
											<td class="text-center">
												<?= $matriculant->section->short ?>
											</td>
											<td class="text-center">
												<?= $matriculants_docs_kind[$matriculant->doc_kind] ?>
											</td>
											<td class="text-center">
												<?= $matriculants_conditions[$matriculant->admission_conditions] ?>
											</td>
										</tr>
									<? endforeach ?>
								</table>
							</div>
						<? endif ?>

						<hr>
					<? endif ?>
				<? endforeach ?>
			<? endif ?>

			<? if ($matriculants_count_extramural > 0): ?>
				<h4 class="text-center">Заочное отделение</h4>

				<? foreach ($matriculants_extramural as $direction => $costs_kind): ?>
					<? if (count($costs_kind['by_contract']) > 0): ?>
						<h4 class="text-center direction"><?= $direction ?></h4>

						<? $n = 1 ?>
						<div class="table-responsive">
							<table class="table table-bordered table-condensed">
								<tr>
									<th>№ п/п</th>
									<th>Абитуриент</th>
									<th>Профиль</th>
									<th>Документ</th>
									<th>Условия поступления</th>
								</tr>

								<? foreach ($costs_kind['by_contract'] as $matriculant): ?>
									<tr>
										<td class="text-center"><?= $n++ ?></td>
										<td>
											<?= $matriculant->family . ' ' . $matriculant->name . ' ' . $matriculant->patronymic ?>
										</td>
										<td class="text-center">
											<?= $matriculant->section->short ?>
										</td>
										<td class="text-center">
											<?= $matriculants_docs_kind[$matriculant->doc_kind] ?>
										</td>
										<td class="text-center">
											<?= $matriculants_conditions[$matriculant->admission_conditions] ?>
										</td>
									</tr>
								<? endforeach ?>
							</table>
						</div>

						<hr>
					<? endif ?>
				<? endforeach ?>
			<? endif ?>

			<? if ($matriculants_count_int_ext > 0): ?>
				<h4 class="text-center">Очно-заочное отделение</h4>

				<? foreach ($matriculants_int_ext as $direction => $costs_kind): ?>
					<? if (count($costs_kind['by_contract']) > 0): ?>
						<h4 class="text-center direction"><?= $direction ?></h4>

						<? $n = 1 ?>
						<div class="table-responsive">
							<table class="table table-bordered table-condensed">
								<tr>
									<th>№ п/п</th>
									<th>Абитуриент</th>
									<th>Профиль</th>
									<th>Документ</th>
									<th>Условия поступления</th>
								</tr>

								<? foreach ($costs_kind['by_contract'] as $matriculant): ?>
									<tr>
										<td class="text-center"><?= $n++ ?></td>
										<td>
											<?= $matriculant->family . ' ' . $matriculant->name . ' ' . $matriculant->patronymic ?>
										</td>
										<td class="text-center">
											<?= $matriculant->section->short ?>
										</td>
										<td class="text-center">
											<?= $matriculants_docs_kind[$matriculant->doc_kind] ?>
										</td>
										<td class="text-center">
											<?= $matriculants_conditions[$matriculant->admission_conditions] ?>
										</td>
									</tr>
								<? endforeach ?>
							</table>
						</div>

						<hr>
					<? endif ?>
				<? endforeach ?>
			<? endif ?>
		</div>


		<h2 class="text-center"><?= $page_title . ' (' . $year . 'г.)' ?></h2>

		<? if (count($intramural) > 0): ?>
			<h4 class="text-center">Очная форма обучения</h4>

			<div class="table table-responsive">
				<table class="table-responsive table-bordered table-condensed">
					<tr>
						<th width="40%">Направление подготовки</th>
						<th width="15%">КЦП (бюджетные места)</th>
						<th width="15%">Количество мест по договорам с оплатой стоимости обучения</th>
						<th width="15%">Общее количество мест</th>
						<th width="15%">Количество поданных заявлений</th>
					</tr>

					<? $total = 0 ?>
					<? $budget = 0 ?>
					<? $by_contract = 0 ?>
					<? $current_count = 0 ?>

					<? foreach ($intramural as $speciality): ?>
						<tr>
							<td><?= $speciality->direction->direction . ' (' . $speciality->direction->code . ')' ?></td>
							<td class="text-center"><?= ($speciality->budget == 0 ? '&mdash;' : $speciality->budget) ?></td>
							<td class="text-center"><?= ($speciality->by_contract == 0 ? '&mdash;' : $speciality->by_contract) ?></td>
							<td class="text-center"><strong><?= $speciality->budget + $speciality->by_contract ?></strong></td>
							<!--<td class="text-center"><strong><? /*=($speciality->current_count == 0 ? '&mdash;' : $speciality->current_count)*/ ?></strong></td>-->
							<? $count = DB::select(array('COUNT("matriculants.id")', 'current_count'))
								->from('matriculants')
								->join('sections')->on('sections.id', '=', 'matriculants.section_id')
								->join('directions')->on('directions.id', '=', 'sections.direction_id')
								->where('sections.direction_id', '=', $speciality->direction_id)
								->and_where('matriculants.year', '=', $year)
								->execute()
								->get('current_count') ?>
							<td class="text-center"><strong><?= ($count > 0 ? $count : '&mdash;') ?></strong></td>
						</tr>

						<? $budget += $speciality->budget ?>
						<? $by_contract += $speciality->by_contract ?>
						<? $total += $speciality->budget + $speciality->by_contract ?>
						<? /* $current_count += $speciality->current_count */ ?>
						<? $current_count += $count ?>
					<? endforeach ?>

					<tr>
						<td class="text-center">Всего</td>
						<td class="text-center"><?= ($budget == 0 ? '&mdash;' : $budget) ?></td>
						<td class="text-center"><?= ($by_contract == 0 ? '&mdash;' : $by_contract) ?></td>
						<td class="text-center text-danger"><strong><?= $total ?></strong></td>
						<td class="text-center text-danger"><strong><?= ($current_count > 0 ? $current_count : '&mdash;') ?></strong>
						</td>
					</tr>
				</table>
			</div>
		<? endif ?>

		<? if (count($extramural) > 0): ?>
			<h4 class="text-center">Заочная форма обучения</h4>

			<div class="table table-responsive">
				<table class="table-responsive table-bordered table-condensed">
					<tr>
						<th width="60%">Направление подготовки</th>
						<th width="20%">Количество мест</th>
						<th width="20%">Количество поданных заявлений</th>
					</tr>

					<? $total = 0 ?>
					<? $current_count = 0 ?>

					<? foreach ($extramural as $speciality): ?>
						<tr>
							<td><?= $speciality->direction->direction . ' (' . $speciality->direction->code . ')' ?></td>
							<td class="text-center"><strong><?= $speciality->by_contract ?></strong></td>
							<? $count = DB::select(['COUNT("matriculants.id")', 'current_count'])
								->from('matriculants')
								->join('sections')->on('sections.id', '=', 'matriculants.section_id')
								->join('directions')->on('directions.id', '=', 'sections.direction_id')
								->where('directions.id', '=', $speciality->direction_id)
								->and_where('matriculants.year', '=', $year)
								->execute()
								->get('current_count') ?>
							<td class="text-center"><strong><?= ($count > 0 ? $count : '&mdash;') ?></strong></td>
						</tr>

						<? $total += $speciality->by_contract ?>
						<? /* $current_count += $speciality->current_count */ ?>
						<? $current_count += $count ?>
					<? endforeach ?>

					<tr>
						<td class="text-center">Всего</td>
						<td class="text-center text-danger"><strong><?= $total ?></strong></td>
						<td class="text-center text-danger"><strong><?= ($current_count > 0 ? $current_count : '&mdash;') ?></strong>
						</td>
					</tr>
				</table>
			</div>
		<? endif ?>

		<? if (count($int_ext) > 0): ?>
			<h4 class="text-center">Очно-заочная форма обучения</h4>

			<div class="table table-responsive">
				<table class="table-responsive table-bordered table-condensed">
					<tr>
						<th width="60%">Направление подготовки</th>
						<th width="20%">Количество мест</th>
						<th width="20%">Количество поданных заявлений</th>
					</tr>

					<? $total = 0 ?>
					<? $current_count = 0 ?>

					<? foreach ($int_ext as $speciality): ?>
						<tr>
							<td><?= $speciality->direction->direction . ' (' . $speciality->direction->code . ')' ?></td>
							<td class="text-center"><strong><?= $speciality->by_contract ?></strong></td>
							<? $count = DB::select(['COUNT("matriculants.id")', 'current_count'])
								->from('matriculants')
								->join('sections')->on('sections.id', '=', 'matriculants.section_id')
								->join('directions')->on('directions.id', '=', 'sections.direction_id')
								->where('directions.id', '=', $speciality->direction_id)
								->and_where('matriculants.year', '=', $year)
								->execute()
								->get('current_count') ?>
							<td class="text-center"><strong><?= ($count > 0 ? $count : '&mdash;') ?></strong></td>
						</tr>

						<? $total += $speciality->by_contract ?>
						<? /* $current_count += $speciality->current_count */ ?>
						<? $current_count += $count ?>
					<? endforeach ?>

					<tr>
						<td class="text-center">Всего</td>
						<td class="text-center text-danger"><strong><?= $total ?></strong></td>
						<td class="text-center text-danger"><strong><?= ($current_count > 0 ? $current_count : '&mdash;') ?></strong>
						</td>
					</tr>
				</table>
			</div>
		<? endif ?>
	<? endif ?>

  <?/* if (count($intramural) + count($extramural) + count($int_ext) == 0): */?><!--
    <h4 class="text-center" style="margin: 3em 0">Приёмная кампания ещё не началась</h4>
  --><?/* endif */?>
</div>

<script>
	$(document).ready(function () {
		$('table:even').addClass('bg-success').addClass('text-success');
		$('table:odd').addClass('bg-info').addClass('text-info');
	});
</script>