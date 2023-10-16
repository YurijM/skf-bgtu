<div class="educational-standard row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="col-sm-offset-1 col-sm-10 col-xs-12">
		<div class="table table-responsive">
			<table class="table-responsive table-bordered table-condensed" itemprop="graduateJob">
				<tr>
					<th>Наименование направления подготовки</th>
					<th>Год</th>
					<th>Уровень образования</th>
					<th style="width: 20%;">О применяемых федеральных государственных образовательных стандартах с приложением их копий</th>
					<th style="width: 20%;">Об утвержденных образовательных стандартах с приложением образовательных стандартов в форме электронного документа</th>
				</tr>
				<tr>
					<td>08.03.01 Строительство</td>
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
					<td>09.03.01 Информатика и вычислительная техника</td>
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
					<td>38.03.01 Экономика</td>
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
					<td>08.01.27 Мастер общестроительных работ</td>
					<td class="text-center">2022</td>
					<td class="text-center">среднее профессиональное образование</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'mor-08.01.27.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td>08.02.14 Эксплуатация и обслуживание многоквартирного дома</td>
					<td class="text-center">2023</td>
					<td class="text-center">среднее профессиональное образование</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'eod-08.02.14.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td>07.02.01 Архитектура</td>
					<td class="text-center">2014</td>
					<td class="text-center">среднее профессиональное образование</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'ar-07.02.01.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank', 'itemprop' => 'eduFedDoc']
						) ?>
					</td>
					<td class="text-center">Не предусмотрен</td>
				</tr>
				<tr>
					<td>38.02.01 Экономика и бухгалтерский учёт (по отраслям)</td>
					<td class="text-center">2018</td>
					<td class="text-center">среднее профессиональное образование</td>
					<td class="text-center">
						<?= Html::anchor(
							$dir_docs_educational_standard . 'eo-38.02.01.pdf',
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
