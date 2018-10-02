<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/studentconferenceorganizers/edit', 'Добавить организатора')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Организатор</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($organizers as $organizer): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td>
            <?=HTML::anchor('admin/studentconferenceorganizers/edit/'.$organizer->id, $organizer->organizer)?>
          </td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    