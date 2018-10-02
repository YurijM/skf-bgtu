<div class="literature col-xs-12">
	<? if ($kind == 1): ?>
		<div class="col-xs-12 text-center">
			<?= HTML::anchor('cabinet/literature/adddoc', 'Добавить документ', ['class' => 'btn-add-doc btn btn-primary']) ?>
		</div>
	<? endif ?>

	<?= $addDoc ?>
	<?= $listFaculties ?>

	<div class="list-literature col-xs-12">
		<?= $listLiterature ?>
	</div>
</div>
