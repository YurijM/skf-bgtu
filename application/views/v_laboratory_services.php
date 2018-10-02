<div class="laboratory-services row">
  <h2 class="text-center"><?=$page_title?></h2>

  <p>
    <?=HTML::anchor($dir_docs_docs.'laboratory_sertificate.pdf', 'Строительная лаборатория', array('target' => '_blank'))?> СКФ БГТУ им.В.Г.Шухова, оснащена современным оборудованием и имеет в своем коллективе высококвалифицированных специалистов, имеющих ученые степени докторов технических наук и кандидатов технических наук, и инженеров, обладающих большим опытом работы в данной сфере.
  </p>
  <p>
    Деятельность лаборатории достаточно широка и включает в себя, кроме научно-исследовательских, технологических разработок, выполнение обследование зданий и сооружений, проведение научно-технического сопровождения строительства. Многие наши работы связаны с оказанием научно-технической помощи предприятиям строительного комплекса с целью повышения качества выпускаемой продукции и снижения ее себестоимости.
  </p>
  <p>
    Лаборатория располагает экспериментальной базой, современными приборами и средствами измерений, как в лабораторных условиях, так и на строительных объектах, что позволяет решать многие задачи в области технологии изготовления и применения строительных материалов.
  </p>
  <p>
    Лаборатория осуществляет деятельность по:
  </p>
  <ul type="disc">
    <li>контролю производственных процессов и качеству готовой продукции;</li>
    <li>разработке нормативно- технической документации;</li>
    <li>разработке и применению в практике строительства химических добавок и органоминеральных модификаторов;</li>
  </ul>
  <p>
    Лаборатория сотрудничает с другими лабораториям Кавказских Минеральных Вод, в оказании независимой экспертизы строительных материалов в рамках своей компетентности.
  </p>

  <h4 class="text-center">Виды услуг, оказываемых строительной лабораторией</h4>
  <ul type="disc">
    <li>конструкции и изделия сборные железобетонные и бетонные;</li>
    <li>конструкции и детали фундаментов;</li>
    <li>конструкции и детали каркаса здания и сооружений;</li>
    <li>конструкции и детали стен и перегородок;</li>
    <li>плиты, панели и настил перекрытий и покрытий;</li>
    <li>конструкции и детали инженерных сооружений;</li>
    <li>конструктивные и архитектурно-строительные элементы зданий и сооружений;</li>
    <li>арматурные и закладные изделия сварные, соединения сварные арматуры и закладных изделий железобетонных конструкций;</li>
    <li>заполнители, материалы строительные не рудные;</li>
    <li>щебень и гравий из плотных горных пород;</li>
    <li>смеси песчано-гравийные для строительных работ;</li>
    <li>песок для строительных работ;</li>
    <li>растворы строительные;</li>
    <li>смеси бетонные;</li>
    <li>подбор состава смесей бетонных, растворов строительных;</li>
    <li>материалы и изделия из природного камня;</li>
    <li>кирпич и камни керамические, силикатные;</li>
    <li>камни бетонные стеновые;</li>
    <li>теплозвукоизоляционные материалы и изделия;</li>
    <li>плиты бетонные тротуарные.</li>
  </ul>

  <h4 class="text-center">Оборудование лаборатории</h4>
  
  <? foreach ($equipment as $item): ?>
    <div class="col-md-3 col-sm-4 col-xs-6">
      <div class="thumbnail text-center">
        <?=HTML::anchor($dir_img_equipment.$item->img_file, HTML::image($dir_img_equipment.substr_replace($item->img_file, '_mini', strripos($item->img_file, '.'), 0), array('class' => 'img img-rounded', 'title' => 'Просмотреть фото', 'alt' => $item->description)), array('target' => '_blank'))?>
        <div class="caption" style="<?=($mode == 'normal' ? 'min-height:60px;max-height:60px;' : 'min-height:150px; max-height:150px;')?>">
          <?=$item->description?>
        </div>
      </div>
    </div>
  <? endforeach ?>
</div>
