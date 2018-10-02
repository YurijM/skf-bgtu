<div class="magazine row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <?=HTML::anchor($dir_docs_university_science.'requirement.pdf', 'Требования', array('class' => 'col-sm-4 col-xs-12 text-center', 'target' => '_blank'))?>
  <?=HTML::anchor($dir_docs_university_science.'information_mail.pdf', 'Информационное письмо', array('class' => 'col-sm-4 col-xs-12 text-center', 'target' => '_blank'))?>
  <?=HTML::anchor($dir_docs_university_science.'payment.pdf', 'Оплата', array('class' => 'col-sm-4 col-xs-12 text-center', 'target' => '_blank'))?>
  
  <h3 class="col-xs-12 text-center">Архив журналов</h3>
  
  <? foreach ($magazine as $item): ?>
    <div class="<?=($mode == 'normal' ? 'col-md-3 col-sm-4 col-xs-6' : 'col-sm-3 col-xs-6')?>">
      <div class="thumbnail text-center">
        <?=HTML::anchor($dir_docs_university_science.$item->doc_file, HTML::image($dir_img_university_science.$item->img_file, array('class' => 'img img-rounded', 'alt' => 'Университетская наука')), array('title' => '№'.$item->number.' '.$item->year.'г.', 'target' => '_blank'))?>
        <div class="caption <?=($mode == 'normal' ? 'small' : '')?>"
             style="font-weight:bold; <?=($mode == 'normal' ? 'min-height: 75px; max-height: 75px;' : 'min-height: 175px; max-height: 175px;')?>">
          <span class="text-primary"><?='№'.$item->number.' '.$item->year.'г.'?></span>
        </div>
      </div>
    </div>
  <? endforeach ?>
</div>
