<div class="paid-services row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <ul type="disc">
    <li>
      <?=Html::anchor(
        $dir_docs_paid_services.'pravila_okaz_plat_uslug_750.pdf',
        'Постановление Правительства Российской Федерации от 15 августа 2013г. N706 "Об утверждении Правил оказания платных образовательных услуг"',
        ['target' => '_blank']
      )?>;
    </li>
    <li>
      <?=Html::anchor(
        $dir_docs.'dogovor_plat_obr_2016_2017.pdf',
        'Образец договора об оказании платных образовательных услуг',
        ['target' => '_blank']
      )?>;
    </li>
    <li>
      <?=Html::anchor(
        $dir_docs_paid_services.'plat_usl_2016.pdf',
        'Положение о платных образовательных услугах',
        ['target' => '_blank']
      )?>;
    </li>
  </ul>

  <p>
    <strong>Приказы "О стоимости платных образовательных услуг":</strong>
  </p>  
  <ul type="disc">
<!--    <?/* foreach ($orders as $order_no => $doc): */?>
      <li>
        <?/* foreach ($doc as $description => $link): */?>
          <?/*= HTML::anchor($dir_docs.$link, $order_no, ['target' => '_blank']).
          ' '.$description */?>
        <?/* endforeach */?>
      </li>
    --><?/* endforeach */?>

    <? foreach ($orders as $order): ?>
      <li>
        <?= HTML::anchor($dir_docs.$order['link'], $order['title'],
          ['target' => '_blank', 'itemprop' => $order['itemprop']]).' '.$order['description']
        ?>
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
