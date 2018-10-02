<h4><?=$page_title?> - <small>таблица</small> settings</h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/settings/edit', 'Добавить новую настройку')?>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Параметр</th>
        <th>Значение</th>
        <th>Описание</th>
      </tr>
    <? foreach ($settings as $item): ?>
      <tr>
        <td><a href="/admin/settings/edit/<?=$item->id?>"><?=$item->key?></a></td>
        <td><?=$item->value?></td>
        <td><?=$item->description?></td>
      </tr>
    <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/settings/edit', 'Добавить новую настройку')?>
  </div>
</div>
    