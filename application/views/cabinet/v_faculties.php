<div class="faculty col-xs-12">
	<h3>Направления</h3>
	<ul>
		<? foreach ($faculties as $faculty): ?>
			<li onclick="loadLiteratureByFaculty(<?= $faculty['id'] ?>)">
				<?= $faculty['faculty']
					. ($faculty['count'] > 0 ? ' - ' . $faculty['count'] : '') ?>
			</li>
		<? endforeach ?>
	</ul>
</div>
