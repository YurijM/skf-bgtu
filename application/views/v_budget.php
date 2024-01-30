<div class="financial-activity row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<h4 class="text-center">Информация об объеме образовательной деятельности</h4>

	<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
		<div class="table table-responsive">
			<table class="table-responsive table-bordered table-condensed" itemprop="graduateJob">
				<tr>
					<th colspan="5">Объем образовательной деятельности, финансовое обеспечение которой осуществляется</th>
				</tr>
				<tr>
					<th>Год</th>
					<th>за счёт бюджетных ассигнований федерального бюджета (тыс. руб.)</th>
					<th>за счёт бюджетов субъектов Российской Федерации (тыс. руб.)</th>
					<th>за счёт местных бюджетов (тыс. руб.)</th>
					<th>по договорам об образовании за счет средств физических и (или) юридических лиц (тыс. руб.)</th>
				</tr>
				<tr>
					<td class="text-center">2022</td>
					<td class="text-center">10826.7</td>
					<td class="text-center">0</td>
					<td class="text-center">0</td>
					<td class="text-center">27838.4</td>
				</tr>
				<tr>
					<td class="text-center">2023</td>
					<td class="text-center">12857.4</td>
					<td class="text-center">0</td>
					<td class="text-center">0</td>
					<td class="text-center">28657.7</td>
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
					<td class="text-center">2022</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_financial_activity . 'dohod.pdf',
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
Дата, время: 23.03.2023 10:05
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 4A5CD56EE43BA57E4F83E48C48420AD83'
				]
			) ?>
			<?= Html::anchor(
				$dir_docs_financial_activity . 'plan_fhd.pdf',
				'План финансово-хозяйственной деятельности СКФ БГТУ им.В.Г.Шухова',
				['target' => '_blank', 'itemprop' => 'finRas']
			) ?>
		</p>
	</div>

	<div class="col-xs-12 text-center" style="margin-top: 1em">
		<h4>
			Сведения о ФГБОУ ВО БГТУ им.В.Г.Шухова на официальном сайте для размещения информации о государственных (муниципальных) учреждениях
		</h4>

		<p>
			<?= Html::anchor(
				'https://bus.gov.ru/agency/134142',
				'Ссылка на информацию, размещаемую на сайте http://bus.gov.ru',
				['target' => '_blank', 'itemprop' => 'finRas']
			) ?>
		</p>
	</div>
</div>
