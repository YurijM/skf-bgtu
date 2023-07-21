<div class="applications-number">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= $year - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $year ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<div class="matriculants">
			<h2 class="text-center"><?= $page_title . ' (' . $year . 'г.)' ?></h2>

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
					<? if (count($costs_kind['budget']) + count($costs_kind['by_contract']) > 0): ?>
						<h4 class="text-center direction"><?= $direction ?></h4>


						<? if (count($costs_kind['budget']) > 0): ?>
							<p>Бюджет</p>

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
					<? endif ?>
				<? endforeach ?>
			<? endif ?>
		</div>
	<? endif ?>

	<? /* if (count($intramural) + count($extramural) + count($int_ext) == 0): */ ?><!--
    <h4 class="text-center" style="margin: 3em 0">Приёмная кампания ещё не началась</h4>
  --><? /* endif */ ?>
</div>

<script>
	$(document).ready(function () {
		$('table:even').addClass('bg-success').addClass('text-success');
		$('table:odd').addClass('bg-info').addClass('text-info');
	});
</script>