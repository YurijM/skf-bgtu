<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/governance/edit', 'Добавить руководителя')?>
    </div>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Должность</th>
        <th>Сотрудник</th>
      </tr>

      <? foreach ($governance as $item): ?>
        <tr>
          <td class="text-center"><?=$item->order_no?></td>
          <td><?=$item->post?></td>
          <td><?=HTML::anchor('admin/governance/edit/'.$item->id, $item->personnel->family.' '.$item->personnel->name.' '.$item->personnel->patronymic)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/governance/edit', 'Добавить руководителя')?>
    </div>
  </div>
</div>
    