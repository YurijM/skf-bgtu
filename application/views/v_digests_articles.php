<div class="articles-list row">
  <h2 class="text-center"><?=$page_title?></h2>

  <div class="col-xs-12 text-center">
    <div class="btn-group">
      <a class="btn <?=$size_button?><?=$type == NULL ? ' active btn-info' : ' btn-default'?>" href="/digests/articles">Все публикации</a>
      <a class="btn <?=$size_button?><?=($type != NULL and $type == 0) ? ' active btn-info' : ' btn-default'?>" href="/digests/articles/1/0">Публикации преподавателей</a>
      <a class="btn <?=$size_button?><?=$type == 1 ? ' active btn-info' : ' btn-default'?>" href="/digests/articles/1/1">Публикации студентов</a>
    </div>
  </div>
  
  <?=$pagination?>
  
  <div class="row">
    <? foreach ($articles as $article): ?>
      <? $img_mini = substr($article->periodical->img_file, 0, strpos($article->periodical->img_file, '.')).'_mini.'.substr($article->periodical->img_file, strpos($article->periodical->img_file, '.') + 1) ?>
      <div class="article col-sm-6 col-xs-12">
        <? if ($mode == 'normal'): ?>
          <div class="col-lg-4 col-md-4 col-sm-6 hidden-xs">
            <a href="<?=$dir_img_periodicals.$article->periodical->img_file?>" title="Просмотреть обложку" target="_blank">
              <img class="img img-responsive center-block" src="<?=$dir_img_periodicals.$img_mini?>" alt="<?=$article->article.' '.$site_name?>">
            </a>
          </div>
        <? endif ?>

        <? if ($mode == 'normal'): ?>
          <div class="col-md-8 col-sm-6 col-xs-12">
        <? else: ?>
          <div class="col-xs-12">
        <? endif ?>
          <p class="periodical">
            <a href="<?=$dir_img_periodicals.$article->periodical->img_file?>" title="Просмотреть обложку" target="_blank">
              <strong><?=$article->periodical->periodical.' '.$article->periodical->year.($article->periodical->number ? ' №'.$article->periodical->number : '').' ('.$article->periodical->db.')'?></strong>
            </a>
          </p>

          <p class="text-info">
            <? $authors = $article->authors->find_all() ?>
            <? foreach ($authors as $author): ?>
              <em><strong><?=$author->author?></strong></em><br>
            <? endforeach ?>
          </p>

          <p>
            <em><strong><?=$article->article.($article->page_from ? ' (стр.'.$article->page_from.($article->page_to ? '-'.$article->page_to.')' : ')') : '')?></strong></em>
          </p>
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
    
      $('.article').each(function() {
        div_heights.push($(this).height());
      });
    
      $('.article .img').each(function() {
        img_heights.push($(this).height());
      });
      
      heights = [Math.max.apply(null, div_heights), Math.max.apply(null, img_heights)];
      height = Math.max.apply(null, heights) + 15;
      
      $('.article').css('height', height);
    };
  });
</script>