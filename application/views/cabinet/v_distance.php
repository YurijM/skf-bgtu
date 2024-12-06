<div class="literature col-xs-12">
	<? if ($username == 'Учебный отдел'): ?>
		<div class="col-xs-12 text-center">
			<?= HTML::anchor('cabinet/distance/addlesson', 'Добавить занятие', ['class' => 'btn-add-doc btn btn-primary']) ?>
		</div>
	<? endif ?>

	<?= $addLesson ?>
	<?= $listGroups ?>

	<div class="list-lessons col-xs-12"></div>
</div>
