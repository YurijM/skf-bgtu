<!-- Индикаторы -->
<ol class="carousel-indicators">
  <? for ($i = 0; $i < count($slides); $i++): ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?=$i?>" class="active"></li>
  <? endfor ?>
</ol>

<!-- Обёртка для слайдера -->
<div class="carousel-inner" role="listbox">
  <? $active = 'active' ?>
  <? foreach ($slides as $slide): ?>
    <div class="item <?=$active?>">
      <?=Html::image($dir.$slide, ['alt' => $site_name, 'class' => 'img img-responsive center-block'])?>
      <div class="carousel-caption">
      </div>
    </div>
    <? $active = '' ?>
  <? endforeach ?>
</div>

<!-- Панели управления -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Предыдущий</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Следующий</span>
</a>
