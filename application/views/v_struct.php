<div class="structure row" itemprop="structOrgUprav">
  <h2 class="text-center"><?=$page_title?></h2>
	<p class="text-center">
		Все структурные подразделения находятся по адресу: Ставропольский край, г.Минеральные Воды, ул.Железноводская, д.24
	</p>

  <? $structure_id = 0 ?>
  <? foreach ($personnel as $item): ?>
    <? if ($structure_id <> $item->structure_id): ?>
      <? if ($structure_id > 0): ?>
        </ul>
      <? endif ?>

      <div>
				<div style="display: inline" itemprop="name"><strong><?=$item->structure->structure?></strong></div>
				<?= (
				$item->structure->doc && $item->structure->file_doc
					? '<div style="display: inline" itemprop="divisionClauseDocLink">'
					.HTML::anchor(
						$dir_docs_structure.$item->structure->file_doc,
						' ('.$item->structure->doc.')',
						['target' => '_blank']
					).'</div>'
					: '<div class="hidden" itemprop="divisionClauseDocLink">документа нет</div>'
				) ?>
      </div>

      <ul type="disc">
    <? endif ?>
    <li>
      <?=
        '<div itemprop="fio">'
        .$item->personnel->family.' '.$item->personnel->name.' '.$item->personnel->patronymic
        .($item->post ? ' - '.$item->post : '')
				.'</div>'
        .($item->phone ? '<div>телефон(ы): '.$item->phone.'</div>' : '')
        .($item->email
	        ? '<div itemprop="email">e-mail: '.$item->email.'</div>'
	        : '<div class="hidden" itemprop="email">e-mail нет</div>'
        )
        .($item->location
	        ? '<div itemprop="addressStr">адрес: '.$item->location.'</div>'
	        : '<div class="hidden" itemprop="addressStr">адреса нет</div>'
        )
      ?>
	    <div class="hidden" itemprop="site">сайта нет</div>
    </li>
    <? $structure_id = $item->structure_id ?>
  <? endforeach ?>
  </ul>

  <?=HTML::image($dir_img.'structure.jpg', [
  	'class' => 'img img-responsive center-block',
	  'alt' => $page_title
  ])?>
</div>
