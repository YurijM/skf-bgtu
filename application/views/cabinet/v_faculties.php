<div class="faculty col-xs-12">
	<h3>Направления</h3>

	<h5>ВУЗ</h5>
	<ul>
		<? foreach ($faculties_higher as $faculty): ?>
			<li onclick="loadLiteratureByFaculty(<?= $faculty['id'] ?>)">
				<?= $faculty['faculty']
				. ($faculty['count'] > 0 ? ' - ' . $faculty['count'] : '') ?>
			</li>
		<? endforeach ?>
	</ul>

	<h5>СПО</h5>
	<ul>
		<? foreach ($faculties_specialty as $faculty): ?>
			<li onclick="loadLiteratureByFaculty(<?= $faculty['id'] ?>)">
				<?= $faculty['faculty']
				. ($faculty['count'] > 0 ? ' - ' . $faculty['count'] : '') ?>
			</li>
		<? endforeach ?>
	</ul>
</div>
