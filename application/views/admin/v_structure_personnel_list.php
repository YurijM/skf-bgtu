<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/structurepersonnel/edit', 'Добавить сотрудника органов управления')?>
    </div>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Орган управления</th>
        <th>Сотрудник</th>
        <th>Должность</th>
      </tr>

      <? foreach ($structure_personnel as $item): ?>
        <tr>
          <td class="text-center"><?=$item->structure->order_no?></td>
          <td><?=$item->structure->structure?></td>
          <td><?=HTML::anchor('admin/structurepersonnel/edit/'.$item->id, $item->personnel->family.' '.$item->personnel->name.' '.$item->personnel->patronymic)?></td>
          <td><?=$item->post?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/structurepersonnel/edit', 'Добавить сотрудника органов управления')?>
    </div>
  </div>
</div>
    