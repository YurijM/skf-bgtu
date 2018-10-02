<div class="structure row">
  <h2 class="text-center"><?=$page_title?></h2>

  <? $structure_id = 0 ?>
  <? foreach ($personnel as $item): ?>
    <? if ($structure_id <> $item->structure_id): ?>
      <? if ($structure_id > 0): ?>
        </ul>
      <? endif ?>
        
      <p>
        <strong itemprop="Name"><?=$item->structure->structure?></strong>
        <?= ($item->structure->doc && $item->structure->file_doc ? 
          HTML::anchor($dir_docs_structure.$item->structure->file_doc, ' ('.$item->structure->doc.')', ['target' => '_blank']) : '')
        ?>
      </p>
      <ul type="disc">
    <? endif ?>
    <li>
      <?=
        '<span itemprop="Fio">'.$item->personnel->family.' '.$item->personnel->name.' '.$item->personnel->patronymic
        .'</span>'
        .($item->post ? ' - '.$item->post : '')
        .($item->phone ? ',<br>телефон(ы): '.$item->phone : '')
        .($item->email ? ',<br>e-mail: '.'<span itemprop="E-mail">'.$item->email.'</span>' : '')
        .($item->location ? ',<br>адрес: '.'<span itemprop="AddressStr">'.$item->location.'</span>' : '')
      ?>
    </li>
    <? $structure_id = $item->structure_id ?>
  <? endforeach ?>
  </ul>

  <?=HTML::image($dir_img.'structure.jpg', ['class' => 'img img-responsive center-block', 'alt' => $page_title])?>
</div>
