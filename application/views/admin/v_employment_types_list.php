<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/employmenttypes/edit', 'Добавить тип занятости')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Порядок отображения</th>
        <th>Тип занятости</th>
      </tr>
      <? foreach ($employmenttypes as $employment_type): ?>
        <tr>
          <td class="text-center"><?=$employment_type->order_no?></td>
          <td><?=HTML::anchor('admin/employmenttypes/edit/'.$employment_type->id, $employment_type->employment_type)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    