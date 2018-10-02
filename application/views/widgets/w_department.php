<div class="row">
	<? if (count($personnel) == 0): ?>
		<p>Нет</p>
	<? else: ?>
		<? foreach ($personnel as $employee): ?>
			<div class="<?= ($mode == 'normal' ? 'col-md-3 col-sm-4 col-xs-12' : 'col-md-4') ?>">
				<div class="col-xs-12 thumbnail">
					<div class="caption well col-xs-12" style="<?= ($mode == 'normal' ? 'font-size:0.9em;' : '').
					($employee->id == $head ? 'background-color:#F2DEDE' : '') ?>">
						<div class="col-xs-4">
							<?= HTML::image($dir_img_personnel . $employee->photo,	[
									'class' => 'img img-responsive img-rounded center-block',
									'alt' => $employee->family . ' ' . $employee->name . ' ' . $employee->patronymic,
									'style' => ($mode == 'normal' ? 'max-height:10em;' : '')
								]) ?>

							<div class="details col-xs-12 text-center small">
								<?= HTML::anchor('#employee-' . $employee->id, '(подробнее)', ['data-toggle' => 'modal',
									'data-target' => '#employee-' . $employee->id]) ?>
							</div>
						</div>

						<div class="col-xs-8 text-center">
							<div class="fio col-xs-12" itemprop="fio">
								<strong><?= $employee->family ?></strong><br>
								<strong><?= $employee->name . ' ' . $employee->patronymic ?></strong><br>
							</div>

							<? $degrees = $employee->degrees->find_all() ?>
							<? $degree = '' ?>
							<? foreach ($degrees as $item): ?>
								<? $degree .= ($degree == '' ? '' : ', ') . trim($item->degree) ?>
							<? endforeach ?>

							<div class="col-xs-12" itemprop="Degree">
								<?= $degree.($degree != '' ? ', ' : '').'<span itemprop="Post">'.$employee->post->post.'</span>' ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<? endforeach ?>

		<div class="remark col-xs-12 bg-info text-primary text-center">
			<i class="fa fa-square fa-lg" style="color: #F2DEDE"></i>&nbsp;&nbsp;-&nbsp;&nbsp;заведующий кафедрой
		</div>
	<? endif ?>
</div>

<script>
	$(window).load(function () {
		setHeight();

		function setHeight() {
			var heights = [];

			$('.governance .thumbnail .caption').each(function () {
				heights.push($(this).height());
			});

			var height = Math.max.apply(null, heights) + 10;

			$('.governance .thumbnail .caption').css('height', height);
			$('.governance .thumbnail').css('height', height + 10);
		}
	});
</script>
