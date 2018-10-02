<div class="governance row">
	<h2 class="text-center"><?= $page_title ?></h2>
	<?= $personnel_info ?>
	<?= $governance ?>
	<?//= $departments ?>

	<? foreach ($departments as $department): ?>
		<h4 class="text-center">
			<?= HTML::anchor('/sveden/departments/department/'.$department->id, 'Кафедра "'.$department->department.'"') ?>
		</h4>
	<? endforeach ?>
</div>