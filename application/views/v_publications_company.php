<div class="publications-list row">
  <h2 class="text-center"><?=$page_title?></h2>

  <?=$pagination?>
  
  <div class="remark bg-info text-primary text-center">
    Северо-Кавказский филиал ГОУ ВПО "БГТУ им.В.Г.Шухова" предлагает к реализации изданные труды наших сотрудников.<br>
    По вопросам приобретения обращаться по телефонам <strong>(87922) 5-53-97, 5-63-87</strong>
  </div>
  
  <div class="publications-page col-xs-12">
    <? foreach ($publications as $publication): ?>
      <div class="publication col-md-4 col-sm-6 col-xs-12">
        <? if ($mode == 'normal'): ?>
          <div class="col-md-3 col-sm-4 hidden-xs">
            <a href="<?=$dir_img_publications.$publication->img_file?>" target="_blank">
              <img class="img img-responsive center-block" src="<?=$dir_img_publications.substr($publication->img_file, 0, strpos($publication->img_file, '.')).'_mini'.substr($publication->img_file, strpos($publication->img_file, '.'), strlen($publication->img_file) - 1)?>" title="Просмотреть обложку" alt="<?=$site_name?>">
            </a>
          </div>
        <? endif ?>

        <? if ($mode == 'normal'): ?>
          <div class="col-md-9 col-sm-8 col-xs-12">
        <? else: ?>
          <div class="col-xs-12">
        <? endif ?>
          <p>
            <strong>
              <a href="#publication<?=$publication->id?>" data-toggle="modal" title="Подробнее об издании">
                <?=$publication->title?>
              </a>
              <i class="small"><?=$publication->bibliography?></i>
            </strong>
          </p>
        </div>
      </div>  

      <div class="modal fade" id="publication<?=$publication->id?>" tabindex="-1" role="dialog" aria-labelledby="#publication<?=$publication->id?>_label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="#publication<?=$publication->id?>_label"><?=$publication->title?></h4>
            </div>
            <div class="modal-body">
              <?=($publication->description == '' ? 'Описание для данного издания отсутствует.' : $publication->description)?>
              <? if ($publication->doc_file != ''): ?>
                <p class="text-center">
                  <?=HTML::anchor(
                    $dir_docs_publications.$publication->doc_file,
                    'Просмотреть оглавление',
                    ['class' => 'btn btn-sm btn-info', 'target' => '_blank'])?>
                </p>
              <? endif ?>
            </div>
          </div>
        </div>
      </div>
    <? endforeach ?>
  </div>      
    
  <?=$pagination?>
</div>
  
<script>
//  $(document).ready(function() {
  $(window).load(function() {
    setHeight();
    
    function setHeight() {
      div_heights = [];
      img_heights = [];
    
      $('.publication').each(function() {
        div_heights.push($(this).height());
      });
    
      $('.publication .img').each(function() {
        img_heights.push($(this).height());
      });

      heights = [Math.max.apply(null, div_heights), Math.max.apply(null, img_heights)];
      height = Math.max.apply(null, heights) + 15;
      
      $('.publication').css('height', height);
    };
  });
</script>