<div class="education row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <div class="table">
    <table class="table-responsive table-condensed table-bordered">
      <tr>
        <th rowspan="2" width="30%">Образовательная программа</th>
        <th rowspan="2" width="20%">Уровень образования</th>
        <th colspan="2">Нормативный срок обучения</th>
        <th rowspan="2" width="20%">
          Срок действия государственной аккредитации образовательной программы (при наличии государственной аккредитации)
        </th>
      </tr>
      <tr>
        <th width="15%">Очная форма обучения</th>
        <th width="15%">Заочная форма обучения</th>
      </tr>
      <tr>
        <td>Строительство</td>
        <td>Бакалавриат прикладной</td>
        <td class="text-center">4 года</td>
        <td class="text-center">5 лет</td>
        <td class="text-center">до 11.03.2019г.</td>
      </tr>
      <tr>
        <td>Информатика и вычислительная техника</td>
        <td>Бакалавриат прикладной</td>
        <td class="text-center">4 года</td>
        <td class="text-center">5 лет</td>
        <td class="text-center">до 11.03.2019г.</td>
      </tr>
      <tr>
        <td>Экономика</td>
        <td>Бакалавриат прикладной</td>
        <td class="text-center">4 года</td>
        <td class="text-center">5 лет</td>
        <td class="text-center">до 11.03.2019г.</td>
      </tr>
      <tr>
        <td>Менеджмент</td>
        <td>Бакалавриат прикладной</td>
        <td class="text-center">4 года</td>
        <td class="text-center">5 лет</td>
        <td class="text-center">до 11.03.2019г.</td>
      </tr>
    </table>
  </div>

	<div class="table">
		<table class="table-responsive table-condensed table-bordered">
			<tr>
				<th width="10%">Шифр направления</th>
				<th width="30%">Наименование образовательной программы</th>
				<th width="10%">Учебный план</th>
				<th width="10%">Характеристика образовательной программы</th>
				<th width="10%">Аннотация к образовательной программе</th>
				<th width="20%">Календарный учебный график</th>
				<th width="10">Практики</th>
			</tr>
			<tr>
				<td class="text-center"><strong>08.03.01</strong></td>
				<td><strong>Строительство</strong></td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'up_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'hop_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education.'annot_s.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td rowspan="4" class="text-center">
					<?=Html::anchor($dir_docs_education.'graf_2018_19.pdf', 'календарный учебный график', ['target' => '_blank'])?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'s_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
			</tr>
			<tr>
				<td class="text-center"><strong>09.03.01</strong></td>
				<td><strong>Информатика и вычислительная техника</strong></td>
				<td class="text-center">
					<?/*=Html::anchor(
						$dir_docs_education.'up_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)*/?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'hop_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education.'annot_i.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'i_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
			</tr>
			<tr>
				<td class="text-center"><strong>38.03.01</strong></td>
				<td><strong>Экономика</strong></td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'up_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'hop_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
				<td class="text-center">
					<?= Html::anchor(
						$dir_docs_education.'annot_e.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					) ?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'e_practica.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
			</tr>
			<tr>
				<td class="text-center"><strong>38.03.02</strong></td>
				<td><strong>Менеджмент</strong></td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'up_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'hop_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'annot_m.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
				<td class="text-center">
					<?=Html::anchor(
						$dir_docs_education.'practika.pdf',
						'<i class="far fa-file-pdf"></i> pdf',
						['class' => 'btn btn-sm btn-info', 'target' => '_blank']
					)?>
				</td>
			</tr>
		</table>
	</div>

  <h5 class="text-center">Методические и иные документы для обеспечения образовательного процесса:</h5>
  
  <ul type="disc">
    <li>
      <?=Html::anchor($dir_docs_education.'disc_inf_res.pdf', 'Положение об изучении дисциплин с применением электронных информационных ресурсов', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'el_inf_res.pdf', 'Положение об использовании электронных информационных ресурсов', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'el_obuch.pdf', 'Положение о порядке применения электронного обучения, дистанционных образовательных технологий', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'uch_pom.pdf', 'Положение о порядке оказания учебно-методической помощи обучающимся', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'ind_graf.pdf', 'Положение об индивидуальном графике и индивидуальном учебном плане обучения студентов', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'ind_uch.pdf', 'Порядок индивидуального учета результатов обучения', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'razr_oop.pdf', 'Положение о порядке разработки и утверждения образовательных программ высшего образования', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'min_rab.pdf', 'Положение об установлении минимального объема контактной работы обучающихся с преподавателем', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'form_disc.pdf', 'Положение о порядке формирования и реализации учебных  дисциплин по выбору обучающихся', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'fizcult.pdf', 'Положение о порядке реализации дисциплины физкультура', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_sam_rab.pdf', 'Положение о самостоятельной работе студентов', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'practika.pdf', 'Положение о порядке организации и проведения практики студентов Белгородского государственного технологического университета им.В.Г.Шухова', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_ball_raiting.pdf', 'Положение о балльно-рейтинговой системе контроля и оценки результатов учебной деятельности студентов', ['target' => '_blank'])?> <i>(Пример <?=Html::anchor($dir_docs_education.'umu_teh_card.pdf', 'технологической карты дисциплины', ['target' => '_blank'])?>)</i>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_avtor_curs.pdf', 'Положение о порядке реализации авторских учебных курсов в Белгородском государственном технологическом университете им.В.Г.Шухова', ['target' => '_blank'])?> <i>(<?=Html::anchor($dir_docs_education.'umu_avtor_curs_pril.doc', 'приложение')?>)</i>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_step.pdf', 'Положение о стипендиальном обеспечении и других формах материальной поддержки студентов, аспирантов, докторантов, слушателей подготовительного факультета, обучающихся по очной форме обучения за счет бюджетных ассигнований федерального бюджета', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_spep_comisia.pdf', 'Положение о стипендиальных комиссиях университета', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_gak.pdf', 'Положение об итоговой государственной аттестации выпускников университета', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_razv_obuch.pdf', 'Положение о применении технологий развивающего обучения на основе активных и интерактивных форм проведения занятий', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_attest_comissia.pdf', 'Положение об аттестационных комиссиях Белгородского государственного технологического университета им.В.Г.Шухова', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'umu_povish_kvalif.pdf', 'Положение о повышении квалификации профессорско-преподавательского состава Белгородского государственного технологического университета им.В.Г.Шухова', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor($dir_docs_education.'chisl2017.pdf', 'Численность обучающихся по реализуемым образовательным программам за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов РФ, местных бюджетов и по договорам об образовании за счет средств физических и (или) юридических лиц', ['target' => '_blank'])?>;      
    </li>
    <li>
      <?=Html::anchor('/scientificactivity', 'Итоги научной деятельности ППС ')?>;      
    </li>
  </ul>
  
  <p>
    Язык, на котором осуществляется обучение: <b>русский</b>
  </p>
</div>
