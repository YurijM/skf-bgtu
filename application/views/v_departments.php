<div class="governance row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<?= $personnel_info ?>

	<h4 class="text-center">
		<?= HTML::anchor('/sveden/governance', 'Руководство', ['style' => 'color: inherit; text-decoration: underline']) ?>
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
</div>