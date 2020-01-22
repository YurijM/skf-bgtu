<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/equipment/edit', 'Добавить оборудование')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Описание оборудования</th>
        <th>Файл</th>
      </tr>
      
      <? foreach ($equipment as $item): ?>
        <tr>
          <td><?=HTML::anchor('admin/equipment/edit/'.$item->id, $item->description)?></td>
          <td><?=$item->img_file?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/equipment/edit', 'Добавить оборудование')?>
  </div>
</div>
    