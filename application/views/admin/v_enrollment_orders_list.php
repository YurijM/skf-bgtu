<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/enrollmentorders/edit', 'Добавить приказ')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Дата приказа</th>
        <th>Описание приказа</th>
        <th>Вид образования</th>
      </tr>

      <? foreach ($orders as $order): ?>
        <tr>
          <td class="text-center"><?=HTML::anchor('admin/enrollmentorders/edit/'.$order->id, Helper_Addfunction::date_from_mysql($order->date))?></td>
					<td><?=$order->description?></td>
          <td class="text-center"><?=$education[$order->education]?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/enrollmentorders/edit', 'Добавить приказ')?>
  </div>
</div>
    