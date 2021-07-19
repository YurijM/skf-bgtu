<div class="matriculants">
		<h2 class="text-center"><?= $matriculants_page_title . ' (' . $year . 'г.)' ?></h2>

		<? if ($matriculants_count_intramural > 0): ?>
			<h4 class="text-center">
				Поступающие в рамках особой квоты
			</h4>

					<? $n = 1 ?>
						<div class="table-responsive">
							<table class="table table-bordered table-condensed bg-info">
								<tr>
									<th>№ п/п</th>
									<th>Поступающий</th>
									<th>Сумма баллов</th>
									<th>Согласие получено</th>
									<th>Примечание</th>
								</tr>

								<? foreach ($list0 as $list): ?>
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

  <? if (count($intramural) + count($extramural) + count($int_ext) == 0): ?>
    <h4 class="text-center" style="margin: 3em 0">Приёмная кампания ещё не началась</h4>
  <? endif ?>
</div>
    