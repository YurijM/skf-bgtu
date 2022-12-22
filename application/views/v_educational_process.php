<div class="educational-process row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<!-- Левая колонка -->
	<div class="left-col col-sm-6 col-xs-12">
		<div class="data col-xs-12 bg-info text-info">
			<h4 class="text-center" style="margin-bottom: 1em;">Учебный отдел</h4>

			<div class="col-xs-12">
				<div class="col-md-3 col-sm-4 col-xs-5 text-right">
					<strong>график работы:</strong>
				</div>
				<div class="col-md-9 col-sm-8 col-xs-7">
					понедельник - суббота с <strong>08<sup>00</sup></strong> до <strong>15<sup>30</sup></strong>,<br>
					перерыв с <strong>12<sup>00</sup></strong> до <strong>12<sup>30</sup></strong>
				</div>
			</div>

			<div class="col-xs-12">
				<div class="col-md-3 col-sm-4 col-xs-5 text-right">
					<strong>сотрудники:</strong>
				</div>
			</div>

			<? foreach ($depot as $person): ?>
				<div class="col-xs-12">
					<div class="col-lg-5 col-xs-6 text-right">
						<?= $person->post ?>:
					</div>
					<div class="col-lg-7 col-xs-6">
						<strong><?= $person->person ?></strong>
					</div>
				</div>
			<? endforeach ?>
		</div>
	</div>

	<!-- Правая колонка -->
	<div class="col-sm-6 col-xs-12">
		<div class="data col-xs-12 bg-info text-info">
			<h4 class="text-center" style="margin-bottom: 1em;">Расписание</h4>

			<div class="col-xs-12" style="margin-top:-5px;">
				<h5 class="text-center">отделения</h5>

				<div class="col-xs-3 text-center">
					<strong>очное</strong>
				</div>
				<div class="col-xs-3 text-center">
					<strong>заочное</strong>
				</div>
				<div class="col-xs-3 text-center">
					<strong>очно-заочное</strong>
				</div>
				<div class="col-xs-3 text-center">
					<strong>СПО</strong>
				</div>
			</div>

			<div class="col-xs-3 text-center">
				<? foreach ($schedule_exams_fulltime as $schedule): ?>
					<div class="col-xs-12 text-center">
						<?= HTML::anchor(
							$dir_docs_schedule . $schedule->doc_file,
							'Санитарно-эпидемиологическое заключение' ,
							['target' => '_blank']
						) ?>
					</div>
				<? endforeach ?>
			</div>

			<div class="col-xs-3 text-center">
				<? foreach ($schedule_exams_distance as $schedule): ?>
					<div class="col-xs-12 text-center">
						<?= HTML::anchor(
							$dir_docs_schedule . $schedule->doc_file,
							$schedule->schedule,
							['target' => '_blank']
						) ?>
					</div>
				<? endforeach ?>
			</div>

			<div class="col-xs-3 text-center">
				<? foreach ($schedule_exams_parttime as $schedule): ?>
					<div class="col-xs-12 text-center">
						<?= HTML::anchor(
							$dir_docs_schedule . $schedule->doc_file,
							$schedule->schedule,
							['target' => '_blank']
						) ?>
					</div>
				<? endforeach ?>
			</div>

			<div class="col-xs-3 text-center">
				<? foreach ($schedule_exams_middle as $schedule): ?>
					<div class="col-xs-12 text-center">
						<?= HTML::anchor(
							$dir_docs_schedule . $schedule->doc_file,
							$schedule->schedule,
							['target' => '_blank']
						) ?>
					</div>
				<? endforeach ?>
			</div>
		</div>
	</div>
</div>

<script>
	//  $(document).ready(function() {
	$(window).load(function () {
		if (screen.width >= 768)
			setHeight();
	});

	function setHeight() {
		heights = [];

		$('.data').each(function () {
			heights.push($(this).height());
		});

		height = Math.max.apply(null, heights);

		$('.data').css('min-height', height + 25);
	};
</script>