<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/academictitles/edit', 'Добавить учёное звание')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table table-responsive table-bordered table-condensed">
      <tr>
        <th>Учёное звание</th>
      </tr>
      <? foreach ($academictitles as $academic_title): ?>
        <tr>
          <td><?=HTML::anchor('admin/academictitles/edit/'.$academic_title->id, $academic_title->academic_title)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    