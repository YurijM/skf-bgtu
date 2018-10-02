<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/schedule/edit', 'Добавить расписание')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Расписание</th>
        <th>Имя файла</th>
      </tr>
      <? foreach ($schedule as $item): ?>
        <tr>
          <td><?=HTML::anchor('admin/schedule/edit/'.$item->id, $item->schedule.' '.$item->education.' отделение')?></td>
          <td><?=$item->doc_file?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    