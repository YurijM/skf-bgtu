<div class="governance row">
	<h4 class="text-center">Руководство</h4>

	<? foreach ($governance as $item): ?>
		<div
			class="<?= ($mode == 'normal' ? 'col-md-4 col-sm-6 col-xs-12' : 'col-md-6') ?>"
			<?= ($item->itemprop !== '' ? 'itemprop=' . $item->itemprop : '') ?>
		>
			<div class="col-xs-12 thumbnail">
				<div class="caption well col-xs-12" <?= ($mode == 'normal' ? 'style="font-size:0.9em"' : '') ?>>
					<div class="col-xs-4">
						<?= HTML::image($dir_img_personnel . $item->personnel->photo, ['class' => 'img img-responsive img-rounded
					center-block', 'alt' => $item->post, 'style' => ($mode == 'normal' ? 'max-height:13em;' : '')]) ?>

						<div class="details col-xs-12 text-center small">
							<?= HTML::anchor('#employee-'.$item->personnel->id, '(подробнее)', ['data-toggle' => 'modal', 'data-target' =>
							'#employee-'.$item->personnel->id]) ?>
						</div>
					</div>

					<div class="col-xs-8">
						<div class="post col-xs-12 text-center" itemprop="post">
							<strong><?= $item->post ?></strong>
						</div>

						<div class="fio col-xs-12" itemprop="fio">
							<strong><?= $item->personnel->family ?></strong><br>
							<strong><?= $item->personnel->name . ' ' . $item->personnel->patronymic ?></strong><br>
						</div>

						<? $degrees = $item->personnel->degrees->find_all() ?>
						<? $degree = '' ?>
						<? foreach ($degrees as $d): ?>
							<? $degree .= ($degree == '' ? '' : ', ') . trim($d->degree) ?>
						<? endforeach ?>

						<div class="col-xs-12">
							<?= $degree ?>
						</div>

						<div class="col-xs-12" itemprop="telephone" style="margin: .25em">
              <em>тлф. <?= $item->phone ?></em>
						</div>

						<div class="col-xs-12" itemprop="email">
							<em>e-mail: <?= $item->email ?></em>
						</div>
					</div>
				</div>
			</div>
		</div>
	<? endforeach ?>
</div>

<script>
	$(window).load(function() {
		setHeight();

		function setHeight() {
			var gov_heights = [];

			$('.governance .thumbnail .caption').each(function () {
				gov_heights.push($(this).height());
			});

			var gov_height = Math.max.apply(null, gov_heights) + 10;

			$('.governance .thumbnail .caption').css('height', gov_height);
			$('.governance .thumbnail').css('height', gov_height + 10);
		}
	});
</script>
