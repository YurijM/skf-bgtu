<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/menu/edit', 'Добавить пункт меню для админки')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Пункт меню</th>
        <th>Контроллер</th>
      </tr>
      <? foreach ($menu as $item): ?>
        <tr>
          <td><?=HTML::anchor('admin/menu/edit/'.$item->id, $item->item)?></td>
          <td><?=$item->controller?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    