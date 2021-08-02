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
	<h5 class="text-center">
		количество бюджетных мест в пределах квоты целевого приема:  информатика – 3, строительство – 3
	</h5>
	<h5 class="text-center">
		количество бюджетных мест по общему конкурсу: строительство – 24, информатика – 19
	</h5>

	<? if(count($list) > 0): ?>
		<?
			$n = 1;
			$direction = $list[0]->section->direction->direction;
			$education = $list[0]->section->direction->education;
			$cost_kind = $list[0]->cost_kind;
			$admission_condition = $list[0]->admission_conditions;
		?>

		<h2 class="text-center" style="color: #000080"><?= $direction ?></h2>
		<h3 class="text-center" style="color: #00F"><?= $education_forms[$education] ?></h3>
		<h5 class="text-center">
			<?= $admission_conditions[$admission_condition] ?>
			(<?=  $cost_kinds[$cost_kind] ?>)
		</h5>

		<div class="table-responsive table-width">
			<table class="table table-bordered table-condensed bg-info">
				<tr>
					<th style="width: 3%">№ п/п</th>
					<th style="width: 27%">Поступающий</th>
					<th style="width: 5%">Сумма баллов</th>
					<th style="width: 5%">Согласие получено</th>
					<th style="width: 60%">Примечание</th>
				</tr>

				<? foreach ($list	as $item): ?>
					<? if($item->section->direction->direction != $direction): ?>
						<?
							$n = 1;
							$direction = $item->section->direction->direction;
							$education = $item->section->direction->education;
							$cost_kind = $item->cost_kind;
							$admission_condition = $item->admission_conditions;
						?>
						</table></div>

						<h2 class="text-center" style="color: #000080"><?= $direction ?></h2>
						<h3 class="text-center" style="color: #00F"><?= $education_forms[$education] ?></h3>
						<h5 class="text-center">
							<?= $admission_conditions[$admission_condition] ?>
							(<?=  $cost_kinds[$cost_kind] ?>)
						</h5>

						<div class="table-responsive table-width">
							<table class="table table-bordered table-condensed bg-info">
								<tr>
									<th style="width: 3%">№ п/п</th>
									<th style="width: 27%">Поступающий</th>
									<th style="width: 5%">Сумма баллов</th>
									<th style="width: 5%">Согласие получено</th>
									<th style="width: 60%">Примечание</th>
								</tr>
					<? endif ?>

					<? if($item->section->direction->education != $education): ?>
						<?
							$n = 1;
							$education = $item->section->direction->education;
							$cost_kind = $item->cost_kind;
							$admission_condition = $item->admission_conditions;
						?>
						</table></div>

						<h3 class="text-center" style="color: #00F"><?= $education_forms[$education] ?></h3>
						<h5 class="text-center">
							<?= $admission_conditions[$admission_condition] ?>
							(<?=  $cost_kinds[$cost_kind] ?>)
						</h5>

						<div class="table-responsive table-width">
							<table class="table table-bordered table-condensed bg-info">
								<tr>
									<th style="width: 3%">№ п/п</th>
									<th style="width: 27%">Поступающий</th>
									<th style="width: 5%">Сумма баллов</th>
									<th style="width: 5%">Согласие получено</th>
									<th style="width: 60%">Примечание</th>
								</tr>
					<? endif ?>

					<? if($item->cost_kind != $cost_kind): ?>
						<?
							$n = 1;
							$cost_kind = $item->cost_kind;
							$admission_condition = $item->admission_conditions;
						?>
						</table></div>

						<h5 class="text-center">
							<?= $admission_conditions[$admission_condition] ?>
							(<?=  $cost_kinds[$cost_kind] ?>)
						</h5>

						<div class="table-responsive table-width">
							<table class="table table-bordered table-condensed bg-info">
								<tr>
									<th style="width: 3%">№ п/п</th>
									<th style="width: 27%">Поступающий</th>
									<th style="width: 5%">Сумма баллов</th>
									<th style="width: 5%">Согласие получено</th>
									<th style="width: 60%">Примечание</th>
								</tr>
					<? endif ?>

					<? if($item->admission_conditions != $admission_condition): ?>
						<?
							$n = 1;
							$admission_condition = $item->admission_conditions;
						?>

						</table></div>

						<h5 class="text-center">
							<?= $admission_conditions[$admission_condition] ?>
							(<?=  $cost_kinds[$cost_kind] ?>)
						</h5>

						<div class="table-responsive table-width">
							<table class="table table-bordered table-condensed bg-info">
								<tr>
									<th style="width: 3%">№ п/п</th>
									<th style="width: 27%">Поступающий</th>
									<th style="width: 5%">Сумма баллов</th>
									<th style="width: 5%">Согласие получено</th>
									<th style="width: 60%">Примечание</th>
								</tr>
					<? endif ?>

					<tr>
						<td class="text-center"><?= $n++ ?></td>
						<td class="text-center"><?= $item->insurance_number ?></td>
						<td class="text-center">
							<?= $item->points_1 + $item->points_2 + $item->points_3 + $item->points_4 + $item->test + $item->achievement ?>
						</td>
						<td class="text-center">
							<?= $item->consent == 0 ? '' : '&check;' ?>
						</td>
						<td>
							<?= $item->remark ?>
						</td>
					</tr>
				<? endforeach ?>
			</table>
		</div>
	<? endif ?>
</div>
