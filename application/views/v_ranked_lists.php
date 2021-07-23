<style>
	.table-width {
		margin: 0 auto;
		width: 99%;
	}

	@media (min-width: 576px) {
		.table-width {
			width: 95%;
		}
	}

	@media (min-width: 768px) {
		.table-width {
			width: 75%;
		}
	}

	@media (min-width: 992px) {
		.table-width {
			width: 60%;
		}
	}

	@media (min-width: 1200px) {
		.table-width {
			width: 50%;
		}
	}
</style>

<div class="matriculants">
	<h2 class="text-center"><?= $page_title . ' (' . $year . 'г.)' ?></h2>

	<? foreach ($directions as $direction): ?>
		<? $is_empty = true ?>
		<? for ($i = 0; $i < count($direction['lists']); $i++): ?>
			<? if (count($direction['lists'][$i]['list']) > 0): ?>
				<? $is_empty = false;
				break; ?>
			<? endif ?>
		<? endfor ?>

		<? if (!$is_empty): ?>
			<h3 class="text-center" style="color: #00F">
				<?= $direction['direction'] ?>
			</h3>

			<? for ($i = 0; $i < count($direction['lists']); $i++): ?>
				<? $item = $direction['lists'][$i] ?>

				<h4 class="text-center">
					<?= $item['title'] ?>
				</h4>
				<? if ($item['subtitle']): ?>
					<p><?= $item['subtitle'] ?></p>
				<? endif ?>

				<? if (count($item['list']) > 0): ?>
					<? $n = 1 ?>
					<div class="table-responsive table-width">
						<table class="table table-bordered table-condensed bg-info">
							<tr>
								<th width="3%">№ п/п</th>
								<th width="27%">Поступающий</th>
								<th width="5%">Сумма баллов</th>
								<th width="5%">Согласие получено</th>
								<th width="60%">Примечание</th>
							</tr>

							<? foreach ($item['list'] as $list): ?>
								<tr>
									<td class="text-center"><?= $n++ ?></td>
									<td class="text-center">
										<?= $list->insurance_number ?>
									</td>
									<td class="text-center">
										<?= $list->points_1 + $list->points_2 + $list->points_3 + $list->points_4 + $list->test + $list->achievement ?>
									</td>
									<td class="text-center">
										<b><?= $list->consent == 0 ? '' : '&check;' ?></b>
									</td>
									<td>
										<?= $list->remark ?>
									</td>
								</tr>
							<? endforeach ?>
						</table>
					</div>
				<? else: ?>
					<h4 class="text-center" style="color: #00F">Нет</h4>
				<? endif ?>
			<? endfor ?>
		<? endif ?>
	<? endforeach ?>
</div>

