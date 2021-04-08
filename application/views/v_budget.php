<div class="financial-activity row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<h4 class="text-center">Информация об объеме образовательной деятельности</h4>

	<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
		<div class="table table-responsive">
			<table class="table-responsive table-bordered table-condensed" itemprop="graduateJob">
				<tr>
					<th colspan="4">Объем образовательной деятельности, финансовое обеспечение которой осуществляется</th>
				</tr>
				<tr>
					<th>за счёт бюджетных ассигнований федерального бюджета (тыс. руб.)</th>
					<th>за счёт бюджетов субъектов Российской Федерации (тыс. руб.)</th>
					<th>за счёт местных бюджетов (тыс. руб.)</th>
					<th>по договорам об образовании за счет средств физических и (или) юридических лиц (тыс. руб.)</th>
				</tr>
				<tr>
					<td class="text-center">4815,6</td>
					<td class="text-center">0</td>
					<td class="text-center">0</td>
					<td class="text-center">17401,5</td>
				</tr>
			</table>
		</div>
	</div>

	<h4 class="col-xs-12 text-center">Информация о поступлении и расходовании финансовых и материальных средств</h4>

	<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
		<div class="table table-responsive">
			<table class="table-responsive table-bordered table-condensed" style="margin: auto" itemprop="graduateJob">
				<tr>
					<th>Год</th>
					<th>Поступившие финансовые и материальные средства</th>
					<th>Расходованные финансовые и материальные средств</th>
				</tr>
				<tr>
					<td class="text-center">2019</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_financial_activity . 'prihod.pdf',
							'Поступившие средства',
							['target' => '_blank', 'itemprop' => 'finRas']
						) ?>
					</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_financial_activity . 'rashod.pdf',
							'Расходованные средства',
							['target' => '_blank', 'itemprop' => 'finRas']
						) ?>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="col-xs-12 text-center">
		<h4>
			План финансово-хозяйственной деятельности образовательной организации планового года
		</h4>

		<p>
			<?= HTML::image(
				$dir_img . 'signature.png',
				[
					'style' => 'max-width: 1em',
					'title' => 'Файл подписан простой электронной подписью
Дата, время: 05.04.2021 09:20
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs_financial_activity . 'plan_fhd.pdf',
				'План финансово-хозяйственной деятельности СКФ БГТУ им.В.Г.Шухова',
				['target' => '_blank', 'itemprop' => 'finRas']
			) ?>
		</p>
	</div>
</div>
