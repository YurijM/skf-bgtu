<style>
	.table-width {
		margin: 0 auto;
		width: 90%;
	}

	@media (min-width: 576px) {
		.table-width {
			width: 75%;
		}
	}

	@media (min-width: 768px) {
		.table-width {
			width: 50%;
		}
	}

	@media (min-width: 992px) {
		.table-width {
			width: 30%;
		}
	}

	@media (min-width: 1200px) {
		.table-width {
			width: 25%;
		}
	}
</style>

<div class="matriculants">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
		<h2 class="text-center"><?= $page_title . ' (' . $start[2] . 'г.)' ?></h2>

		<? if(count($list) > 0): ?>
			<?
				$n = 1;
				$direction = '';
				$education = -1;
				$first_table = true;
				$new_table = false;
			?>

			<? foreach ($list	as $item): ?>
				<? if($item->direction->education != $education): ?>
					<?
						$n = 1;
						$education = $item->direction->education;
						$direction = $item->direction->direction;

						$new_table = true;

						if ($first_table) {
							$first_table = false;
						} else {
							echo '</table></div>';
						}
					?>

					<h2 class="text-center" style="color: #000080"><?= $educations[$education] ?></h2>
					<h3 class="text-center" style="color: #05F"><?= $direction ?></h3>

				<? elseif($item->direction->direction != $direction): ?>
					<?
						$n = 1;
						$direction = $item->direction->direction;

						$new_table = true;
					?>

					</table></div>

					<h3 class="text-center" style="color: #05F"><?= $direction ?></h3>
				<? endif ?>

				<? if ($new_table): ?>
					<? $new_table = false ?>

					<div class="table-responsive table-width">
						<table class="table table-bordered table-condensed bg-info">
							<tr>
								<th style="width: 15%">№ п/п</th>
								<th style="width: 60%">СНИЛС поступающего</th>
								<th style="width: 25%">Средний балл аттестата</th>
							</tr>
				<? endif ?>

				<tr>
					<td class="text-center"><?= $n++ ?></td>
					<td class="text-center"><?= $item->insurance_number ?></td>
					<td class="text-center">
						<?= $item->points ?>
					</td>
				</tr>
			<? endforeach ?>

			</table></div>
		<? endif ?>
	<? endif ?>
</div>
