<div class="magazine row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="col-xs-12 text-center" style="margin-bottom: 1em">
		<?= HTML::image(
			$dir_img . 'signature.png',
			[
				'style' => 'max-width: 1em',
				'title' => 'Файл подписан простой электронной подписью
Дата, время: 01.09.2021 11:25
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723'
			]
		) ?>
		<?= HTML::anchor(
			$dir_docs_university_science . 'pol_un_nauka.pdf',
			'Положение о сборнике научных статей «Университетская наука»',
			['target' => '_blank']
		) ?>
	</div>

	<?= HTML::anchor(
		$dir_docs_university_science . 'requirement.pdf',
		'Требования',
		['class' => 'col-sm-4 col-xs-12 text-center', 'target' => '_blank']
	) ?>

	<?= HTML::anchor(
		$dir_docs_university_science . 'information_mail_2022.pdf',
		'Информационное письмо',
		['class' => 'col-sm-4 col-xs-12 text-center', 'target' => '_blank']
	) ?>

	<?= HTML::anchor(
		$dir_docs_university_science . 'payment.pdf',
		'Оплата',
		['class' => 'col-sm-4 col-xs-12 text-center', 'target' => '_blank']
	) ?>

	<h3 class="col-xs-12 text-center">Архив журналов</h3>

	<? foreach ($magazine as $item): ?>
		<div class="<?= ($mode == 'normal' ? 'col-md-3 col-sm-4 col-xs-6' : 'col-sm-3 col-xs-6') ?>">
			<div class="thumbnail text-center">
				<?= HTML::anchor(
					$dir_docs_university_science . $item->doc_file,
					HTML::image(
						$dir_img_university_science . $item->img_file,
						['class' => 'img img-rounded', 'alt' => 'Университетская наука']
					),
					['title' => '№' . $item->number . ' ' . $item->year . 'г.', 'target' => '_blank']
				) ?>

				<div class="caption <?= ($mode == 'normal' ? 'small' : '') ?>" style="font-weight:bold; <?= ($mode == 'normal' ? 'min-height: 75px; max-height: 75px;' : 'min-height: 175px; max-height: 175px;') ?>">
					<span class="text-primary"><?= '№' . $item->number . ' ' . $item->year . 'г.' ?></span>
				</div>
			</div>
		</div>
	<? endforeach ?>
</div>
