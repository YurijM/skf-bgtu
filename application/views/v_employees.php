<div class="employees row">
	<h2 class="text-center"><?= $page_title ?></h2>
	<?= $personnel_info ?>
	<?= $employees ?>
	<?//= $departments ?>

	<? foreach ($departments as $department): ?>
		<h4 class="text-center">
			<?= HTML::anchor('/sveden/departments/department/'.$department->id, 'Кафедра "'.$department->department.'"') ?>
		</h4>
	<? endforeach ?>

	<p class="text-center" itemprop="rucovodstvoFil">
		<strong>Филиалов нет</strong>
	</p>
</div>