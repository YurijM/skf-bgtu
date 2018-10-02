<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/newspapers/edit', 'Добавить студенческую газету')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Студенческая газета</th>
        <th>Имя миниатюры</th>
        <th>Имя документа</th>
      </tr>
      <? foreach ($newspapers as $newspaper): ?>
        <tr>
          <td><?=HTML::anchor('admin/newspapers/edit/'.$newspaper->id, $newspaper->year.' '.$months[$newspaper->month].' №'.$newspaper->issue)?></td>
          <td><?=$newspaper->img_file?></td>
          <td><?=$newspaper->doc_file?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/newspapers/edit', 'Добавить студенческую газету')?>
  </div>
</div>
    