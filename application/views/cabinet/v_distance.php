<div class="literature col-xs-12">
	<? if ($username == 'Шумилова Е.Ю.'): ?>
		<div class="col-xs-12 text-center">
			<?= HTML::anchor('cabinet/distance/addlesson', 'Добавить занятие', ['class' => 'btn-add-doc btn btn-primary']) ?>
		</div>
	<? endif ?>

	<?= $addLesson ?>
	<?= $listGroups ?>

	<div class="list-lessons col-xs-12"></div>
</div>
