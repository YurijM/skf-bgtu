<div class="student-council row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <? foreach ($structure as $item): ?>
    <div class="col-md-3 col-sm-4 col-xs-6">
      <div class="thumbnail text-center">
        <?=HTML::image($dir_img_student_council.$item->photo, array('class' => 'img img-rounded', 'alt' => $item->student))?>
        <div class="caption" style="<?=($mode == 'normal' ? 'min-height:60px;max-height:60px;' : 'min-height:115px; max-height:115px;')?>">
          <?=$item->post?><br><?=$item->student?>
        </div>
      </div>
    </div>
  <? endforeach ?>
</div>
