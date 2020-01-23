<div class="governance row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<?= $personnel_info ?>

	<h4 class="text-center">
		<?= HTML::anchor('/sveden/employees', 'Руководство') ?>
	</h4>
	<? foreach ($departments as $department): ?>
		<? if ($department->id == $id): ?>
			<h4 class="text-center" style="margin: 1em 0 .5em">Кафедра "<?= $department->department ?>"</h4>
			<?= $personnel ?>
		<? else: ?>
			<h4 class="text-center">
				<?= HTML::anchor('/sveden/departments/department/'.$department->id, 'Кафедра "'.$department->department.'"') ?>
			</h4>
		<? endif ?>
	<? endforeach ?>

	<h5 class="text-center" style="margin-top: 1.5em" itemprop="rucovodstvoFil">
		Филиалов нет
	</h5>
</div>