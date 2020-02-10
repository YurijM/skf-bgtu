<div class="paid-services row" itemprop="paidEdu">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <ul type="disc">
    <li>
      <?=Html::anchor(
        $dir_docs.'dogovor_2018.pdf',
        'Образец договора об оказании платных образовательных услуг',
        ['target' => '_blank']
      )?>;
    </li>
    <li>
      <?=Html::anchor(
        $dir_docs.'poryadok_platn_uslug_01032019.pdf',
        'Документ о порядке оказания платных образовательных услуг',
        ['target' => '_blank']
      )?>;
    </li>
  </ul>

  <p>
    <strong>Документы об утверждении стоимости обучения по каждой образовательной программе:</strong>
  </p>  
  <ul type="disc">
    <? foreach ($orders as $order): ?>
      <li>
        <?/*= HTML::anchor($dir_docs.$order['link'], $order['title'],
          ['target' => '_blank', 'itemprop' => $order['itemprop']]).' '.$order['description']
        */?>
				<?= HTML::anchor($dir_docs.$order['link'], $order['title'],
					['target' => '_blank', 'itemprop' => $order['itemprop']]
        ) ?>
      </li>
    <? endforeach ?>
  </ul>

  <p>
    <strong>Дополнительные образовательные услуги:</strong>
  </p>  
  <ul type="disc">
    <li>
      <?=Html::anchor('/retraining', 'Профессиональная переподготовка')?>;
    </li>
    <li>
      <?=Html::anchor('/kpksro', 'КПК для СРО, службы надзора')?>;
    </li>
    <li>
      <?=Html::anchor('/kpkutilities', 'КПК для руководителей ЖКХ')?>;
    </li>
    <li>
      <?=Html::anchor('/kpkspecialists', 'КПК для специалистов')?>;
    </li>
    <li>
      <?=Html::anchor('/safetyhealth', 'Охрана труда и техника безопасности')?>;
    </li>
    <li>
      <?=Html::anchor('/validation', 'Аттестация руководителей и специалистов')?>;
    </li>
    <li>
      <?=Html::anchor('/laboratoryservices', 'Услуги лаборатории строительных материалов')?>;
    </li>
  </ul>  
</div>
