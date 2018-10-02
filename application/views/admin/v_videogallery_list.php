<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/videogallery/edit', 'Добавить видеосюжет')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Дата</th>
        <th>Название сюжета</th>
        <th>Адрес</th>
      </tr>
      <? foreach ($videogallery as $video): ?>
        <tr>
          <td class="text-center"><?=Helper_Addfunction::date_from_mysql($video->date)?></td>
          <td><?=HTML::anchor('admin/videogallery/edit/'.$video->id, $video->title)?></td>
          <td><?=$video->source?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/videogallery/edit', 'Добавить видеосюжет')?>
  </div>
</div>
    