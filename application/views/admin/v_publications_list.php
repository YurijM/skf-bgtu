<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/publications/edit', 'Добавить издание')?>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Год</th>
        <th>Название издания</th>
        <th>Для предприятий</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($publications as $publication): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=$publication->year?></td>
          <td><?=HTML::anchor('admin/publications/edit/'.$publication->id, $publication->title)?></td>
          <td class="text-center"><?=($publication->for_company == 0 ? 'нет' : 'да')?></td>
      <? endforeach ?>
    </table>
  </div>
</div>
    