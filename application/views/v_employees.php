<div class="education row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<h4 class="text-center">
		Информация о руководителе образовательной организации
	</h4>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed bg-info text-info">
			<tr>
				<th>№ п/п</th>
				<th>Фамилия, имя, отчество</th>
				<th>Должность руководителя</th>
				<th>Контактные телефоны</th>
				<th>Адрес электронной почты</th>
			</tr>
			<tr>
				<td class="text-center">1</td>
				<td class="text-center">Курбатов Владимир Леонидович</td>
				<td class="text-center">Первый заместитель директора</td>
				<td class="text-center">8 (87922) 5-53-97</td>
				<td class="text-center">kurbatov_bgtu@list.ru</td>
			</tr>
		</table>
	</div>

	<h4 class="text-center">
		Информация о руководителях филиалов образовательной организации
	</h4>
	<p>
		У образовательной организации нет филиалов.
	</p>

	<h4 class="text-center">
		Информация о персональном составе педагогических работников каждой реализуемой образовательной программы
	</h4>

	<tr>
		<div class="table-responsive col-sm-offset-2 col-sm-8">
			<table class="table table-bordered table-condensed bg-info text-info">
				<tr>
					<th>
						Код профессии, специальности, направления подготовки, научной специальности, шифр группы научных специальностей
					</th>
					<th>
						Образовательная программа, направленность, профиль, шифр и наименование научной специальности
					</th>
					<th>
						Уровень образования
					</th>
					<th>
						Информация о ППС
					</th>
				</tr>
				<tr>
					<td class="text-center" style="vertical-align: middle">08.03.01</td>
					<td class="text-center" style="vertical-align: middle">Строительство</td>
					<td class="text-center" style="vertical-align: middle">Высшее образование - бакалавриат</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_08.03.01.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				</tr>
				<tr>
					<td class="text-center" style="vertical-align: middle">09.03.01</td>
					<td class="text-center" style="vertical-align: middle">Информатика и вычислительная техника</td>
					<td class="text-center" style="vertical-align: middle">Высшее образование - бакалавриат</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_09.03.01.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				</tr>
				<tr>
					<td class="text-center" style="vertical-align: middle">38.03.01</td>
					<td class="text-center" style="vertical-align: middle">Экономика</td>
					<td class="text-center" style="vertical-align: middle">Высшее образование - бакалавриат</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_38.03.01.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				</tr>
				<tr>
					<td class="text-center" style="vertical-align: middle">08.01.27</td>
					<td class="text-center" style="vertical-align: middle">Мастер общестроительных работ</td>
					<td class="text-center" style="vertical-align: middle">Среднее профессиональное образование</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_08.03.01.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				</tr>
				<tr>
					<td class="text-center" style="vertical-align: middle">08.02.14</td>
					<td class="text-center" style="vertical-align: middle">Эксплуатация и обслуживание многоквартирного дома</td>
					<td class="text-center" style="vertical-align: middle">Среднее профессиональное образование</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_08.02.14.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				</tr>
				<tr>
					<td class="text-center" style="vertical-align: middle">10.02.05</td>
					<td class="text-center" style="vertical-align: middle">Обеспечение информационной безопасности автоматизированных систем</td>
					<td class="text-center" style="vertical-align: middle">Среднее профессиональное образование</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_10.02.05.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				</tr>
				<tr>
					<td class="text-center" style="vertical-align: middle">38.02.01</td>
					<td class="text-center" style="vertical-align: middle">Экономика и бухгалтерский учет (по отраслям)</td>
					<td class="text-center" style="vertical-align: middle">Среднее профессиональное образование</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_38.02.01.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				</tr>
				<tr>
					<td class="text-center" style="vertical-align: middle">07.02.01</td>
					<td class="text-center" style="vertical-align: middle">Архитектура</td>
					<td class="text-center" style="vertical-align: middle">Среднее профессиональное образование</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_07.02.01.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				<tr>
					<td class="text-center" style="vertical-align: middle">46.01.03</td>
					<td class="text-center" style="vertical-align: middle">Делопроизводитель</td>
					<td class="text-center" style="vertical-align: middle">Среднее профессиональное образование</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_46.01.03.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				<tr>
					<td class="text-center" style="vertical-align: middle">08.02.01</td>
					<td class="text-center" style="vertical-align: middle">Строительство и эксплуатация зданий и сооружений</td>
					<td class="text-center" style="vertical-align: middle">Среднее профессиональное образование</td>
					<td class="text-center" style="vertical-align: middle">
						<?= Html::anchor(
							$dir_docs_employees . 'prep_08.02.01.pdf',
							'<i class="far fa-file-pdf"></i> pdf',
							['class' => 'btn btn-sm btn-info', 'target' => '_blank']
						) ?>
					</td>
				</tr>
			</table>
		</div>
	</tr>
</div>