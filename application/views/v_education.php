<div class="education row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<h5 class="text-center">
		Информация о сроке действия государственной аккредитации образовательной программы, о языках, на которых
		осуществляется образование (обучение)
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="eduAccred">
			<tr>
				<th rowspan="2" width="10%">Код специальности, направления подготовки</th>
				<th rowspan="2" width="30%">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2" width="20%">Уровень образования</th>
				<th colspan="2">Нормативный срок обучения</th>
				<th rowspan="2" width="20%">
					Срок действия государственной аккредитации образовательной программы (при наличии государственной
					аккредитации)
				</th>
				<th rowspan="2">Язык, на котором осуществляется обучение</th>
			</tr>
			<tr>
				<th width="10%">Очная форма обучения</th>
				<th width="10%">Заочная форма обучения</th>
			</tr>
			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">до 25.02.2025г.</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">до 25.02.2025г.</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">до 25.02.2025г.</td>
				<td class="text-center">русский</td>
			</tr>
			<tr>
				<td class="text-center">38.03.02</td>
				<td>Менеджмент</td>
				<td class="text-center">Высшее образование - бакалавриат</td>
				<td class="text-center">4 года</td>
				<td class="text-center">5 лет</td>
				<td class="text-center">до 25.02.2025г.</td>
				<td class="text-center">русский</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center" itemprop="eduOp">
		Информация по образовательным программам
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="opMain">
			<tr>
				<th width="7%">Код специальности, направления подготовки</th>
				<th width="30%">Наименование профессии, специальности, направления подготовки</th>
				<th width="8%" itemprop="educationPlan">Учебный план</th>
				<th width="10%">Характеристика образовательной программы</th>
				<th width="10%" itemprop="educationAnnotation">Аннотация к образовательной программе</th>
				<th width="10%" itemprop="educationShedule">Календарный учебный график</th>
				<th width="18%" itemprop="methodology">Учебные материалы, разработанные для обеспечения образовательного
					процесса
				</th>
				<th width="7">Практики</th>
			</tr>
			<tr>
				<td class="text-center">08.03.01</td>
				<td>Строительство</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_sz.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="4" class="text-center">
					<?= Html::anchor($dir_docs_education . 'graf_2018_19.pdf', 'календарный учебный график', ['target' => '_blank']) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 's_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">09.03.01</td>
				<td>Информатика и вычислительная техника</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_iz.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'i_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01</td>
				<td>Экономика</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
					<?= Html::anchor(
						$dir_docs_education . 'up_ez.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'um_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'style' => 'margin-bottom: 5px', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'e_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
			<tr>
				<td class="text-center">38.03.02</td>
				<td>Менеджмент</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'up_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'hop_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'annot_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td></td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education . 'practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center" itemprop="internationalDog">
		Заключенные и планируемые к заключению договоры с иностранными и (или) международными организациями по
		вопросам образования и науки
	</h5>
	<p style="margin-bottom: 1.5em">
		На данный момент не заключались договоры с иностранными и (или) международными организациями по вопросам
		образования и науки.
	</p>

	<h5 class="text-center">
		Информация о численности обучающихся за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов
		Российской Федерации, местных бюджетов, по договорам об образовании за счет средств физических и (или)
		юридических лиц
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered">
			<tr>
				<th rowspan="2">Код специальности, направления подготовки</th>
				<th rowspan="2">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2">Уровень образования</th>
				<th rowspan="2">Форма обучения</th>
				<th colspan="4">Численность обучающихся за счет (количество человек)</th>
			</tr>
			<tr>
				<th>бюджетных ассигнований федерального бюджета</th>
				<th>бюджетов субъектов Российской Федерации</th>
				<th>местных бюджетов</th>
				<th>средств физических и (или) юридических лиц</th>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">08.03.01</td>
				<td class="text-center" rowspan="2">Строительство</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">Очная</td>
				<td class="text-center">19</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">115</td>
			</tr>
			<tr>
				<td class="text-center">Заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">130</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">38.03.01</td>
				<td class="text-center" rowspan="2">Экономика</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">Очная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">58</td>
			</tr>
			<tr>
				<td class="text-center">Заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">77</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">09.03.01</td>
				<td class="text-center" rowspan="2">Информатика и вычислительная техника</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">Очная</td>
				<td class="text-center">7</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">18</td>
			</tr>
			<tr>
				<td class="text-center">Заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">18</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center">
		Информация о результатах приема по каждой профессии, специальности среднего профессионального образования
		(при наличии вступительных испытаний), каждому направлению подготовки или специальности высшего образования
		с различными условиями приема (на места, финансируемые за счет бюджетных ассигнований федерального бюджета,
		бюджетов субъектов Российской Федерации, местных бюджетов, по договорам об образовании за счет средств
		физических и (или) юридических лиц)
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="eduChislen">
			<tr>
				<th rowspan="2">Код специальности, направления подготовки</th>
				<th rowspan="2">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2">Уровень образования</th>
				<th rowspan="2">Форма обучения</th>
				<th colspan="4">Результаты приема обучающихся за счет (количество человек)</th>
				<th rowspan="2">Средняя сумма набранных баллов по всем вступительным испытаниям</th>
			</tr>
			<tr>
				<th itemprop="numberBFpriem">бюджетных ассигнований федерального бюджета</th>
				<th itemprop="numberBRpriem">бюджетов субъектов Российской Федерации</th>
				<th itemprop="numberBMpriem">местных бюджетов</th>
				<th itemprop="numberPpriem">средств физических и (или) юридических лиц</th>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">08.03.01</td>
				<td class="text-center" rowspan="2">Строительство</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">7</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">21</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">60</td>
				<td class="text-center">192.2</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">38.03.01</td>
				<td class="text-center" rowspan="2">Экономика</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">30</td>
				<td class="text-center">180.2</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">09.03.01</td>
				<td class="text-center" rowspan="2">Информатика и вычислительная техника</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">2</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">1</td>
				<td class="text-center">0</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">11</td>
				<td class="text-center">189.7</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center">
		Информация о результатах перевода, восстановления и отчисления
	</h5>
	<div class="table table-responsive">
		<table class="table-responsive table-condensed table-bordered" itemprop="eduPriem">
			<tr>
				<th rowspan="2">Код специальности, направления подготовки</th>
				<th rowspan="2">Наименование профессии, специальности, направления подготовки</th>
				<th rowspan="2">Уровень образования</th>
				<th rowspan="2">Форма обучения</th>
				<th colspan="4">Численность обучающихся, чел</th>
			</tr>
			<tr>
				<th itemprop="numberOutPerevod">переведено в другие образовательные организации</th>
				<th>переведено из других образовательных организаций</th>
				<th itemprop="numberResPerevod">восстановлено</th>
				<th>отчислено</th>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">08.03.01</td>
				<td class="text-center" rowspan="2">Строительство</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">4</td>
				<td class="text-center">7</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">38.03.01</td>
				<td class="text-center" rowspan="2">Экономика</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">0</td>
				<td class="text-center">1</td>
				<td class="text-center">0</td>
				<td class="text-center">2</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">2</td>
				<td class="text-center">3</td>
			</tr>
			<tr>
				<td class="text-center" rowspan="2">09.03.01</td>
				<td class="text-center" rowspan="2">Информатика и вычислительная техника</td>
				<td class="text-center" rowspan="2">Высшее образование - бакалавриат</td>
				<td class="text-center">очная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">1</td>
			</tr>
			<tr>
				<td class="text-center">заочная</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
			</tr>
		</table>
	</div>

	<h5 class="text-center">Методические и иные документы для обеспечения образовательного процесса:</h5>

	<ul type="disc">
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_zach_kn.pdf',
				'Положение о порядке выдачи и ведения зачетной книжки, студенческого билета обучающегося',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_pr_att.pdf',
				'Положение о порядке организации и проведения промежуточной аттестации обучающихся',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_min_obiuem.pdf',
				'Положение об установлении минимального объема контактной работы обучающихся с преподавателем, а также максимального объема занятий лекционного и семинарского типов при организации образовательного процесса',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_sam_rab.pdf',
				'Положение об организации самостоятельной работы студентов',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_kurs_rab.pdf',
				'Положение о выполнении и защите курсовых работ (проектов)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_obraz_prog.pdf',
				'Положение о порядке разработки и утверждения образовательных программ',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_tek_kontr.pdf',
				'Положение о порядке организации и проведения текущего контроля успеваемости',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_ind_graf.pdf',
				'Положение об индивидуальном  графике и индивидуальном учебном плане обучения студентов',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'practica.pdf',
				'Положение о практике обучающихся, осваивающих основные профессиональные образовательные программы высшего образования',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'ball_reiting.pdf',
				'Положение о балльно-рейтинговой системе контроля и оценки результатов учебной деятельности студентов',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'avt_kurs.pdf',
				'Положение о порядке реализации авторских учебных курсов в Белгородском государственном технологическом университете им.В.Г.Шухова (Приложения)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_st.pdf',
				'Положение о стипендиальном обеспечении и других формах материальной поддержки студентов, аспирантов, слушателей подготовительного факультета, обучающихся по очной форме обучения за счет бюджетных ассигнований федерального бюджета',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'matpom.pdf',
				'Положение об оказании материальной поддержки обучающимся по программам высшего образования - программам бакалавриата, программам специалитета, программам магистратуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'st_kom.pdf',
				'Положение о стипендиальных комиссиях университета',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_vkr.pdf',
				'Положение о выпускной квалификационной работе',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_recenz_vkr.pdf',
				'Положение о порядке рецензирования выпускных квалификационных работ',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'proverka_rabot.pdf',
				'Положение о проведении проверки электронных версий выпускных квалификационных работ на заимствование',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_it_att.pdf',
				'Положение о порядке проведения итоговой аттестации по образовательным программам высшего образования – программам бакалавриата, программам специалитета и программам магистратуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_gos_it_att.pdf',
				'Положение о порядке проведения государственной итоговой аттестации по образовательным программам высшего образования – программам бакалавриата, программам специалитета и программам магистратуры',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_foc.pdf',
				'Положение о порядке формирования фонда оценочных средств для проведения текущей, промежуточной аттестации по дисциплинам, практикам и государственной итоговой аттестации обучающихся',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'razv_obuch.pdf',
				'Положение о применении технологий развивающего обучения на основе активных и интерактивных форм проведения занятий',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'el_resurs.pdf',
				'Положение об изучении дисциплин с применением электронных информационных ресурсов(Приложение)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_inv.pdf',
				'Положение об обучении студентов с ограниченными возможностями здоровья и студентов-инвалидов',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_perevod_vus.pdf',
				'Положение о порядке перевода обучающихся в другую организацию, осуществляющую образовательную деятельность по образовательным программам высшего образования',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_per_otch.pdf',
				'Положение о порядке обучения, перевода, отчисления и предоставления академических отпусков обучающимся в БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'att_komiss.pdf',
				'Положение об аттестационных комиссиях Белгородского государственного технологического университета им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pov_kvalif.pdf',
				'Положение о повышении квалификации профессорско-преподавательского состава Белгородского государственного технологического университета им.В.Г.Шухова',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pologenie_perevod_bespl.pdf',
				'О порядке перехода с платного обучения на бесплатное',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'perevod_com.pdf',
				'Положение о комиссии по вопросам перевода с платного обучения на бесплатное',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'raz_form_obuch.pdf',
				'Положение об организации образовательной деятельности по образовательным программам при сочетании различных форм обучения, при использовании сетевой формы их реализации',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'from_rp.pdf',
				'Об утверждении формы рабочей программы дисциплины (Приложение)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'disc_vibor.pdf',
				'Порядок формирования и реализации учебных дисциплин по выбору обучающихся',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_extern.pdf',
				'Положение о порядке зачисления, прохождения промежуточной и государственной итоговой аттестации лиц в качестве экстернов (Приложения)',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_elect_disc.pdf',
				'Положение о порядке организации осовоения элективных, факультативных и специализированных адаптационных дисциплин',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_fk.pdf',
				'Положение о порядке реализации дисциплин по физической культуре и спорту для отдельных категорий обучающихся',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor(
				$dir_docs_education . 'pol_eos.pdf',
				'Положение о реализации процесса "Об электронно-образовательной среде СКФ БГТУ им.В.Г.Шухова"',
				['target' => '_blank']
			) ?>;
		</li>
		<li>
			<?= Html::anchor('/scientificactivity', 'Итоги научной деятельности ППС') ?>;
		</li>
	</ul>
</div>
