<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/conferences/edit', 'Добавить конференцию')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Дата</th>
        <th>Конференция</th>
      </tr>
      
      <? $n = 1 ?>
      <? foreach ($conferences as $conference): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td class="text-center"><?=HTML::anchor('admin/conferences/edit/'.$conference->id, Helper_Addfunction::date_from_mysql($conference->date))?></td>
          <td><?=$conference->conference?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    