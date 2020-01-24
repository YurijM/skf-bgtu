<div class="grants row" itemprop="grant">
	<h2 class="text-center"><?= $page_title ?></h2>

	<ul type="disc">
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_03092019.pdf',
				'Приказ №4/257 от 03.09.19 "Об установлении размера стипендии обучающимся"',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'prikaz_st_komis_30082019.pdf',
				'Приказ №2/25-УК от 30.08.19 "О составе стипендиальной комиссии университета"',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'pol_st_kom.pdf',
				'Положение о стипендиальной комиссии образовательной организации',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'dop_pol_st.pdf',
				'Положение об оказании материальной поддержки обучающимся по программам высшего образования – программам бакалавриата, программам специалитета, программам аспирантуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_stipend . 'pol_st.pdf',
				'Положение о стипендиальном обеспечении и других формах материальной поддержки студентов, аспирантов, слушателей подготовительного факультета, обучающихся по очной форме обучения за счет бюджетных ассигнований федерального бюджета',
				['target' => '_blank']
			) ?>;
		</li>
	</ul>

	<h4 class="text-center">Информация о стипендиях</h4>
	<div class="table table-responsive">
		<table class="table-responsive table-bordered table-condensed" itemprop="typeGrant">
			<tr>
				<th width="50%">Вид стипендии</th>
				<th width="25%">
					Тип нормативного правового акта, регламентирующего стипендиальное обеспечение
				</th>
				<th width="25%">
					Нормативный правовой акт, регламентирующий стипендиальное обеспечение
				</th>
			</tr>
			<tr>
				<td>
					Государственная академическая стипендия
				</td>
				<td class="text-center">
					Приказ (локальный)
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_stipend . 'prikaz_st_03092019_4_257_1.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td>
					Государственная социальная стипендия
				</td>
				<td class="text-center">
					Приказ (локальный)
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_stipend . 'prikaz_st_03092019_4_257_2.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td>
					Стипендия Президента РФ
				</td>
				<td class="text-center">
					Приказ (федеральный)
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_stipend . 'prikaz_st_28082017_842_3.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td>
					Стипендия Правительства РФ
				</td>
				<td class="text-center">
					Приказ (федеральный)
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_stipend . 'prikaz_st_28082017_842_4.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td>
					Стипендия Президента РФ (по приоритетным направлениям модернизации и технологического развития
					российской экономики)
				</td>
				<td class="text-center">
					Приказ (федеральный)
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_stipend . 'prikaz_st_12032018_171_5.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td>
					Стипендия Правительства РФ (по приоритетным направлениям модернизации и технологического развития
					российской экономики)
				</td>
				<td class="text-center">
					Приказ (федеральный)
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_stipend . 'prikaz_st_12032018_172_6.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center">
		Информация о наличии общежития, интерната, количество жилых помещений в общежитии, интернате для иногородних
		обучающихся
	</h4>
	<p class="text-center" style="margin-bottom: 1em" itemprop="hostelInfo">
		Общежитие не предоставляется.
	</p>

	<h4 class="text-center">Информация о трудоустройстве выпускников</h4>
	<div class="table table-responsive">
		<table class="table-responsive table-bordered table-condensed" itemprop="graduateJob">
			<tr>
				<th rowspan="2">Код специальности/ направления подготовки</th>
				<th rowspan="2">Наименование профессии, специальности, направления подготовки</th>
				<th colspan="2">2018-2019 учебный год</th>
				<th colspan="2">2017-2018 учебный год</th>
				<th colspan="2">2016-2017 учебный год</th>
			</tr>
			<tr>
				<th>Количество выпускников</th>
				<th>Количество трудоустроенных выпускников</th>
				<th>Количество выпускников</th>
				<th>Количество трудоустроенных выпускников</th>
				<th>Количество выпускников</th>
				<th>Количество трудоустроенных выпускников</th>
			</tr>
			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td class="text-center">14</td>
				<td class="text-center">10</td>
				<td class="text-center">29</td>
				<td class="text-center">25</td>
				<td class="text-center">32</td>
				<td class="text-center">28</td>
			</tr>
			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника</td>
				<td class="text-center">6</td>
				<td class="text-center">4</td>
				<td class="text-center">8</td>
				<td class="text-center">7</td>
				<td class="text-center">6</td>
				<td class="text-center">5</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td class="text-center">10</td>
				<td class="text-center">8</td>
				<td class="text-center">23</td>
				<td class="text-center">18</td>
				<td class="text-center">27</td>
				<td class="text-center">23</td>
			</tr>
		</table>
	</div>
</div>
