<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/structure/edit', 'Добавить орган управления')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Структура (органы управления)</th>
      </tr>
      <? foreach ($structure as $item): ?>
        <tr>
          <td class="text-center"><?=$item->order_no?></td>
          <td><?=HTML::anchor('admin/structure/edit/'.$item->id, $item->structure)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    