<div class="conferences-list row">
  <h2 class="text-center"><?=$page_title?></h2>

  <? foreach ($conferences as $conference): ?>
    <div class="<?=($mode == 'normal' ? 'col-md-3 col-sm-4 col-xs-6' : 'col-sm-3 col-xs-6')?>">
      <div class="thumbnail text-center">
        <?=HTML::anchor($dir_docs_conferences.$conference->doc_file, HTML::image($dir_img_conferences.$conference->img_file, array('class' => 'img img-rounded', 'alt' => $conference->conference)), array('title'  => 'Перечень докладов', 'target' => '_blank'))?>
        <div class="caption <?=($mode == 'normal' ? 'small' : '')?>"
             style="font-weight:bold; <?=($mode == 'normal' ? 'min-height: 75px; max-height: 75px;' : 'min-height: 175px; max-height: 175px;')?>">
          <span class="text-primary"><?=Helper_Addfunction::date_from_mysql($conference->date)?></span><br>
          <?=$conference->conference?>
        </div>
      </div>
    </div>
  <? endforeach ?>
</div>
