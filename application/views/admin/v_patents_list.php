<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/patents/edit', 'Добавить патент или полезную модель')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>№ патента</th>
        <th>Область применения</th>
        <th>Описание патента</th>
        <th>Дата выдачи</th>
      </tr>
      
      <? $n = 1 ?>
      <? foreach ($patents as $patent): ?>
        <tr>
          <td><?=$n++?></td>
          <td><?=HTML::anchor('admin/patents/edit/'.$patent->id, $patent->number)?></td>
          <td><?=$patent->application_area?></td>
          <td><?=$patent->patent?></td>
          <td><?=Helper_Addfunction::date_from_mysql($patent->date)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    