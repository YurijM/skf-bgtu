<div class="educational-standard row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
		<div class="table table-responsive">
			<table class="table-responsive table-bordered table-condensed" itemprop="graduateJob">
				<tr>
					<th>Наименование аправления подготовки</th>
					<th>Год</th>
					<th>Уровень образования</th>
					<th width="25%">О применяемых федеральных государственных образовательных стандартах с приложением их копий</th>
					<th width="25%">Об утвержденных образовательных стандартах с приложением образовательных стандартов в форме электронного документа</th>
				</tr>
				<tr>
					<td rowspan="2">08.03.01 Строительство</td>
					<td class="text-center">2015</td>
					<td class="text-center">высшее образование (бакалавриат)</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'so-08.03.01-2015.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td class="text-center">2017</td>
					<td class="text-center">высшее образование (бакалавриат)</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'so-08.03.01-2017.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td rowspan="2">09.03.01 Информатика и вычислительная техника</td>
					<td class="text-center">2016</td>
					<td class="text-center">высшее образование (бакалавриат)</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'it-09.03.01-2016.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td class="text-center">2017</td>
					<td class="text-center">высшее образование (бакалавриат)</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'it-09.03.01-2017.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td rowspan="2">38.03.01 Экономика</td>
					<td class="text-center">2015</td>
					<td class="text-center">высшее образование (бакалавриат)</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'ek-38.03.01-2015.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td class="text-center">2020</td>
					<td class="text-center">высшее образование (бакалавриат)</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'ek-38.03.01-2020.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td rowspan="2">38.03.02 Менеджмент</td>
					<td class="text-center">2016</td>
					<td class="text-center">высшее образование (бакалавриат)</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'mn-38.03.02-2016.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td class="text-center">2020</td>
					<td class="text-center">высшее образование (бакалавриат)</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'mn-38.03.02-2020.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td>10.02.05 Обеспечение информационной безопасности автоматизированных систем</td>
					<td class="text-center">2016</td>
					<td class="text-center">среднее профессиональное образование</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'oib-10.02.05.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td>08.01.07 Мастер общестроительных работ</td>
					<td class="text-center">2018</td>
					<td class="text-center">среднее профессиональное образование</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'mor-08.01.07.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td>08.02.11 Управление, эксплуатация и обслуживание многоквартирного дома</td>
					<td class="text-center">2016</td>
					<td class="text-center">среднее профессиональное образование</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'ueo-08.02.11.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
			</table>
		</div>
	</div>
</div>
