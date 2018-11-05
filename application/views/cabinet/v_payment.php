<h4 class="text-center text-muted">
	Оплата
</h4>
<div class="table" style="<?= $stylePayment ?>">
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
