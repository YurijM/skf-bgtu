<div class="matriculants">
	<h2 class="text-center"><?= $page_title . ' (' . $year . 'г.)' ?></h2>

	<h4 class="text-center">
		Поступающие в рамках особой квоты
	</h4>

	<? if (count($list0) > 0): ?>
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
						<td class="text-center">
							<?= $list->insurance_number ?>
						</td>
						<td class="text-center">
							<?= $list->points_1 + $list->points_2 + $list->points_3 + $list->points_4 + $list->test + $list->achievement ?>
						</td>
						<td class="text-center">
							<?= $list->consent == 0 ? 'нет' : 'да' ?>
						</td>
						<td class="text-center">
							<?= $list->remark ?>
						</td>
					</tr>
				<? endforeach ?>
			</table>
		</div>
	<? else: ?>
		<h4 class="text-center" style="color: #00F">Нет</h4>
	<? endif ?>

	<h4 class="text-center">
		Поступающие в рамках целевого набора
	</h4>
	<p>
		(количество мест в пределах квоты целевого приема по направлению: информатика – 3, строительство -3)
	</p>

	<? if (count($list1) > 0): ?>
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

				<? foreach ($list1 as $list): ?>
					<tr>
						<td class="text-center"><?= $n++ ?></td>
						<td class="text-center">
							<?= $list->insurance_number ?>
						</td>
						<td class="text-center">
							<?= $list->points_1 + $list->points_2 + $list->points_3 + $list->points_4 + $list->test + $list->achievement ?>
						</td>
						<td class="text-center">
							<?= $list->consent == 0 ? 'нет' : 'да' ?>
						</td>
						<td class="text-center">
							<?= $list->remark ?>
						</td>
					</tr>
				<? endforeach ?>
			</table>
		</div>
	<? else: ?>
		<h4 class="text-center" style="color: #00F">Нет</h4>
	<? endif ?>

	<h4 class="text-center">
		Поступающие в рамках общего конкурса
	</h4>
	<p>
		(количество мест по общему конкурсу: строительство – 24, информатика – 19)
	</p>

	<? if (count($list2) > 0): ?>
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

				<? foreach ($list2 as $list): ?>
					<tr>
						<td class="text-center"><?= $n++ ?></td>
						<td class="text-center">
							<?= $list->insurance_number ?>
						</td>
						<td class="text-center">
							<?= $list->points_1 + $list->points_2 + $list->points_3 + $list->points_4 + $list->test + $list->achievement ?>
						</td>
						<td class="text-center">
							<?= $list->consent == 0 ? 'нет' : 'да' ?>
						</td>
						<td class="text-center">
							<?= $list->remark ?>
						</td>
					</tr>
				<? endforeach ?>
			</table>
		</div>
	<? else: ?>
		<h4 class="text-center" style="color: #00F">Нет</h4>
	<? endif ?>
</div>
    