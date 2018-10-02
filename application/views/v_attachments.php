<div class="docs row">
  <h2 class="text-center"><?=$page_title?></h2>

  <? foreach ($docs as $doc): ?>
    <?= HTML::anchor($dir_docs.$doc['link'], $doc['title'],
      ['class' => 'col-xs-12', 'target' => '_blank', 'itemprop' => $doc['itemprop']]) ?>
  <? endforeach ?>
</div>
