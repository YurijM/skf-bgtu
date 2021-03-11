<div class="application row">
  <h2 class="text-center"><?=$page_title?></h2>

  <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
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
</div>
