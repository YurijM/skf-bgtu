<div class="governance row">
	<h2 class="text-center"><?= $page_title ?></h2>
	<?= $personnel_info ?>
	<?= $employees ?>
	<?//= $departments ?>

	<? foreach ($departments as $department): ?>
		<h4 class="text-center">
			<?= HTML::anchor('/sveden/departments/department/'.$department->id, 'Кафедра "'.$department->department.'"') ?>
		</h4>
	<? endforeach ?>

	<h5 class="text-center" style="margin-top: 1.5em" itemprop="rucovodstvoFil">
		Филиалов нет
	</h5>
</div>