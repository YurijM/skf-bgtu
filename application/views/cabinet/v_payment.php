<div class="text-center text-muted">
	<h4>Оплата</h4>
	<span>(данные на <?= $date ?>)</span>
</div>

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
				<td class="text-right <?= $pay->cost > 0 ? 'text-danger' : '' ?>">
					<b><?= $pay->cost == 0 ? '' : $pay->cost ?></b>
				</td>
				<td class="text-right <?= $pay->pay > 0 ? 'text-success' : '' ?>">
					<b><?= $pay->pay == 0 ? '' : $pay->pay ?></b>
				</td>
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
	'квитанция на оплату',
	[
		'class' => 'text-center',
		'target' => '_blank',
		'style' => 'display: block; font-size: .85em; text-decoration: underline'
	]
) ?>
<?= HTML::anchor('https://online.sberbank.ru/CSAFront/index.do?#/payOrderPaymentLogin?ReqId=1368927834384&ST=ufs.billing]',
	'Ссылка для быстрого перехода в Сбербанк онлайн с ноутбуков и стационарных ПК для оплаты за обучение',
	[
		'class' => 'text-center',
		'target' => '_blank',
		'style' => 'display: block; font-size: .85em; text-decoration: underline'
	]
) ?>
