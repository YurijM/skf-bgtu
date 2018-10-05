<div class="personnel col-xs-12 <?= $user->contract == '0' ? 'col-md-offset-3 col-md-6' : 'col-md-5' ?>">
	<div class="table">
		<table class="table-responsive">
			<? if ($user->contract != '0'): ?>
				<tr>
					<th>Договор №</th>
					<td><?= $user->contract ?></td>
				</tr>
			<? endif ?>
			<tr>
				<th width="35%">Зачётная книжка №</th>
				<td><?= $user->num_test_book ?></td>
			</tr>
			<tr>
				<th>Группа</th>
				<td><?= $user->group ?></td>
			</tr>
			<tr>
				<th>Форма обучения</th>
				<td><?= $user->learning ?></td>
			</tr>
			<tr>
				<th>Направление</th>
				<td><?= $user->faculty ?></td>
			</tr>
			<tr>
				<th>Профиль</th>
				<td><?= $user->speciality ?></td>
			</tr>
			<tr>
				<th></th>
				<td>
					<?=HTML::anchor('/educationalprocess', 'Расписание', ['class' => 'btn btn-sm btn-primary', 'target' => '_blank']) ?>
				</td>
			</tr>
		</table>
	</div>

	<hr class="hidden-md hidden-lg">
</div>

<div class="payment <?= $user->contract == '0' ? 'hidden' : '' ?> col-xs-12 col-md-7">
	<h4 class="text-center text-muted">
		Оплата
	</h4>
	<div class="table">
		<table class="table-responsive table-bordered">
			<tr>
				<th>Операция</th>
				<th>Начисление</th>
				<th>Оплата</th>
				<th>Дата операции</th>
			</tr>
			<? $total = 0 ?>
			<? foreach ($payment as $pay): ?>
				<tr>
					<td><?= $pay->comment ?></td>
					<td class="text-right"><?= $pay->cost ?></td>
					<td class="text-right"><?= $pay->pay ?></td>
					<td class="text-center"><?= $pay->datepay ?></td>
				</tr>
				<? $total += ($pay->cost - $pay->pay) ?>
			<? endforeach ?>
		</table>
	</div>

	<h6 class="text-center <?= $total > 0 ? 'text-danger' : ($total < 0 ? 'text-info' : 'text-success') ?>">
		<?= $total > 0
			? 'Долг по оплате ' . $total . ' руб.'
			: ($total < 0
				? 'Переплата ' . abs($total) . ' руб.'
				: 'Задолженности по оплате нет') ?>
	</h6>
	<?= HTML::anchor($dirDocs . 'kvitanciya_na_oplatu.pdf',
		'(квитанция на оплату)',
		[
			'class' => 'text-center',
			'target' => '_blank',
			'style' => 'display: block; font-size: .85em; text-decoration: underline'
		]
	) ?>
</div>

<div class="col-xs-12 text-center">
	<hr>
	<?= HTML::anchor('http://e.lanbook.com', HTML::image($dirImg . 'lan.jpg'), ['target' => '_blank']) ?>
	<?= HTML::anchor('http://www.iprbookshop.ru', HTML::image($dirImg . 'iprbooks.jpg'), ['target' => '_blank']) ?>
	<?= HTML::anchor('https://biblio-online.ru', HTML::image($dirImg . 'yuwrite.jpg'), ['target' => '_blank']) ?>
	<?= HTML::anchor('https://elib.bstu.ru', HTML::image($dirImg . 'readingroom.jpg'), ['target' => '_blank']) ?>
</div>

