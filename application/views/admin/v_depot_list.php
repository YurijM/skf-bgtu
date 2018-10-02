<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/depot/edit', 'Добавить сотрудника учебной части')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Должность</th>
        <th>ФИО сотрудника</th>
      </tr>
      <? foreach ($depot as $person): ?>
        <tr>
          <td class="text-center"><?=$person->order_no?></td>
          <td><?=HTML::anchor('admin/depot/edit/'.$person->id, $person->post)?></td>
          <td><?=$person->person?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    