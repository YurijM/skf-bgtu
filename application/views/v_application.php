<div class="application row">
  <h2 class="text-center"><?=$page_title?></h2>

  <div class="col-sm-4 col-xs-6">
    <div class="thumbnail text-center">
      <?=HTML::anchor(
        $dir_docs.'zayavlenie2019.pdf',
        HTML::image($dir_img_docs.'zayavlenie2019.jpg', ['class' => 'img img-rounded', 'title' => 'Просмотреть документ', 'alt' => $page_title]),
        ['target' => '_blank']
      )?>
      <div class="caption" style="min-height:5em; max-height:5em">
        Образец заявления
      </div>
    </div>
  </div>

  <div class="col-sm-4 col-xs-6">
    <div class="thumbnail text-center">
      <?=HTML::anchor(
        $dir_docs_docs.'dogovor_2020.pdf',
        HTML::image($dir_img_docs.'dogovor_2020.jpg', ['class' => 'img img-rounded', 'title' => 'Просмотреть документ', 'alt' => $page_title]),
        ['target' => '_blank']
      )?>
      <div class="caption" style="min-height:5em; max-height:5em">
        Договор об оказании платных образовательных услуг
      </div>
    </div>
  </div>

  <div class="col-sm-4 col-xs-6">
    <div class="thumbnail text-center">
      <?=HTML::anchor(
        $dir_docs.'soglasie2019.pdf',
        HTML::image($dir_img_docs.'soglasie2019.jpg', ['class' => 'img img-rounded', 'title' => 'Просмотреть документ', 'alt' => $page_title]),
        ['target' => '_blank']
      )?>
      <div class="caption" style="min-height:5em; max-height:5em">
        Заявление о согласии на зачисление
      </div>
    </div>
  </div>
</div>
