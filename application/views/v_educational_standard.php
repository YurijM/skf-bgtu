<div class="educational-standard row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <p>
    Федеральные образовательные стандарты высшего образования (уровень бакалавриата):
  </p>
  
  <ul type="disc">
    <li>
      <?=Html::anchor($dir_docs_educational_standard.'standart_08.03.01_so.pdf', '08.03.01 Строительство',
        ['target' => '_blank', 'itemprop' => 'EduStandartDoc'])?>;
    </li>
    <li>
      <?=Html::anchor($dir_docs_educational_standard.'standart_09.03.01_it.pdf', '09.03.01 Информационные системы и технологии',
        ['target' => '_blank', 'itemprop' => 'EduStandartDoc'])?>;
    </li>
    <li>
      <?=Html::anchor($dir_docs_educational_standard.'standart_38.03.01_ek.pdf', '38.03.01 Экономика',
        ['target' => '_blank', 'itemprop' => 'EduStandartDoc'])?>
    </li>
  </ul>
</div>
