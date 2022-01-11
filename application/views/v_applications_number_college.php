<div class="applications-number">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= $year - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $year ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<h2 class="text-center"><?= $page_title . ' (' . $year . 'г.)' ?></h2>

		<? if (count($education_forms) > 0): ?>
			<div class="table table-responsive">
				<table class="table-responsive table-bordered table-condensed bg-info">
					<tr>
						<th>Код</th>
						<th>Специальность / Профессия</th>
						<th>Форма обучения</th>
						<th width="5%">Общее количество мест</th>
						<th width="5%">Количество поданных заявлений</th>
					</tr>

					<? foreach ($numbers as $number): ?>
						<tr>
							<td class="text-center">
								<?= $number->direction->code ?>
							</td>
							<td>
								<?= $number->direction->direction ?>
							</td>
							<td class="text-center">
								<?= $education_forms[$number->direction->education] ?>
							</td>
							<td class="text-center">
								<?= $number->count ?>
							</td>
							<td class="text-center">
								<?= $places[$number->direction->id] > 0 ? $places[$number->direction->id] : '&mdash;' ?>
							</td>
						</tr>
					<? endforeach ?>
				</table>
			</div>
		<? endif ?>

		<div class="matriculants">
			<h2 class="text-center">
				Списки на зачисление (<?= $year ?>г.)
			</h2>

			<? if ($is_list_empty): ?>
				<h4 class="text-center">
					Заявления ещё не подавались
				</h4>
			<? endif ?>

			<? $education = '' ?>
			<? foreach ($education_forms as $form => $title): ?>
				<? foreach ($forms[$form] as $direction): ?>
					<? if (count($list[$direction->id]) > 0): ?>
						<? if ($education != $form): ?>
							<h4 class="text-center">
								<?= $title ?>
							</h4>

							<? $education = $form ?>
						<? endif ?>

						<? $n = 1 ?>
						<h4 class="text-center direction">
							<?= $direction->direction ?>
						</h4>

						<div class="row">
							<div class="col-xs-12 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 col-sm-10 col-md-8
							col-lg-6">
								<div class="table-responsive">
									<table class="table table-bordered table-condensed bg-info">
										<tr>
											<th width="3%">№ п/п</th>
											<th>Абитуриент</th>
											<th width="7%">Документ</th>
										</tr>
										<? foreach ($list[$direction->id] as $person): ?>
											<tr>
												<td class="text-center"><?= $n++ ?></td>
												<td>
													<?= $person->family . ' ' . $person->name . ' ' . $person->patronymic ?>
												</td>
												<td class="text-center">
													<?= $docs_kind[$person->doc_kind] ?>
												</td>
											</tr>
										<? endforeach ?>
									</table>
								</div>
							</div>
						</div>
					<? endif ?>
				<? endforeach ?>
			<? endforeach ?>
		</div>
	<? endif ?>
</div>
    