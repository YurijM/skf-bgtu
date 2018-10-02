<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/contacts/edit', 'Добавить контакт')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Порядок<br>отображения</th>
        <th>Контакт</th>
        <th>Телефон(ы)</th>
        <th>E-mail</th>
      </tr>
      <? foreach ($contacts as $contact): ?>
        <tr>
          <td class="text-center"><?=$contact->order_no?></td>
          <td><?=HTML::anchor('admin/contacts/edit/'.$contact->id, $contact->contact)?></td>
          <td><?=$contact->phone?></td>
          <td><?=$contact->email?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    