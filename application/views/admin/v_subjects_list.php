<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/subjects/edit', 'Добавить предмет')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Предмет</th>
      </tr>
      <? foreach ($subjects as $subject): ?>
        <tr>
          <td><?=HTML::anchor('admin/subjects/edit/'.$subject->id, $subject->subject)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    