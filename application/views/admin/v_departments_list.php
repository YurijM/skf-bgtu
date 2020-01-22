<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/departments/edit', 'Добавить кафедру')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Кафедра</th>
      </tr>
      <? foreach ($departments as $department): ?>
        <tr>
          <td><?=HTML::anchor('admin/departments/edit/'.$department->id, $department->department)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    