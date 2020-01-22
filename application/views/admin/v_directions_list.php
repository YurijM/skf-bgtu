<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/directions/edit', 'Добавить направление')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Обучение</th>
        <th>Направление</th>
      </tr>
      <? foreach ($directions as $direction): ?>
        <tr>
          <td><?=$education_types[$direction->education]?></td>
          <td><?=HTML::anchor('admin/directions/edit/'.$direction->id, $direction->direction.' ('.$direction->code.')')?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
  
  <div class="text-right">
    <?=HTML::anchor('admin/directions/edit', 'Добавить направление')?>
  </div>
</div>
    