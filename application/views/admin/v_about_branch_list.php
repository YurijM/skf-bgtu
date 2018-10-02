<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/aboutbranch/edit', 'Добавить фото')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Имя файла</th>
        <th>Краткое описание фотографии</th>
      </tr>
      <? foreach ($photos as $photo): ?>
        <tr>
          <td class="text-center"><?=$photo->order_no?></td>
          <td><?=HTML::anchor('admin/aboutbranch/edit/'.$photo->id, $photo->photo)?></td>
          <td><?=$photo->description?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/aboutbranch/edit', 'Добавить фото')?>
  </div>
</div>
    