<div class="educational-standard row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <p>
    Федеральные образовательные стандарты высшего образования (уровень бакалавриата):
  </p>
  
  <!--<ul type="disc" itemprop="eduDoc">
    <li>
      <?/*=Html::anchor($dir_docs_educational_standard.'standart_08.03.01_so.pdf', '08.03.01 Строительство',
        ['target' => '_blank', 'itemprop' => 'eduFedDoc'])*/?>;
    </li>
    <li>
      <?/*=Html::anchor($dir_docs_educational_standard.'standart_09.03.01_it.pdf', '09.03.01 Информационные системы и технологии',
        ['target' => '_blank', 'itemprop' => 'eduFedDoc'])*/?>;
    </li>
    <li>
      <?/*=Html::anchor($dir_docs_educational_standard.'standart_38.03.01_ek.pdf', '38.03.01 Экономика',
        ['target' => '_blank', 'itemprop' => 'eduFedDoc'])*/?>
    </li>
  </ul>-->

	<ul type="disc" itemprop="eduDoc">
		<li>
			<?=Html::anchor(
				$dir_docs_educational_standard.'so-08.03.01-2015.pdf',
				'08.03.01 Строительство (2015)',
				['target' => '_blank', 'itemprop' => 'eduFedDoc'])?>;
		</li>
		<li>
			<?=Html::anchor(
				$dir_docs_educational_standard.'so-08.03.01-2017.pdf',
				'08.03.01 Строительство (2017)',
				['target' => '_blank', 'itemprop' => 'eduFedDoc'])?>;
		</li>
	</ul>

	<ul type="disc" itemprop="eduDoc">
		<li>
			<?=Html::anchor(
				$dir_docs_educational_standard.'it-09.03.01-2016.pdf',
				'09.03.01 Информатика и вычислительная техника (2016)',
				['target' => '_blank', 'itemprop' => 'eduFedDoc'])?>;
		</li>
		<li>
			<?=Html::anchor(
				$dir_docs_educational_standard.'it-09.03.01-2017.pdf',
				'09.03.01 Информатика и вычислительная техника (2017)',
				['target' => '_blank', 'itemprop' => 'eduFedDoc'])?>;
		</li>
	</ul>

	<ul type="disc" itemprop="eduDoc">
		<li>
			<?=Html::anchor(
				$dir_docs_educational_standard.'ek-38.03.01-2015.pdf',
				'38.03.01 Экономика (2015)',
				['target' => '_blank', 'itemprop' => 'eduFedDoc'])?>;
		</li>
		<li>
			<?=Html::anchor(
				$dir_docs_educational_standard.'ek-38.03.01-2020.pdf',
				'38.03.01 Экономика (2020)',
				['target' => '_blank', 'itemprop' => 'eduFedDoc'])?>;
		</li>
	</ul>

	<ul type="disc" itemprop="eduDoc">
		<li>
			<?=Html::anchor(
				$dir_docs_educational_standard.'mn-38.03.02-2016.pdf',
				'38.03.02 Менеджмент (2016)',
				['target' => '_blank', 'itemprop' => 'eduFedDoc'])?>;
		</li>
		<li>
			<?=Html::anchor(
				$dir_docs_educational_standard.'mn-38.03.02-2020.pdf',
				'38.03.02 Менеджмент (2020)',
				['target' => '_blank', 'itemprop' => 'eduFedDoc'])?>;
		</li>
	</ul>
</div>
