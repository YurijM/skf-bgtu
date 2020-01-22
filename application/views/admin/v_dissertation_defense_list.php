<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/dissertationdefense/edit', 'Добавить защиту диссертации')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№</th>
        <th>Сотрудник</th>
        <th>На соискание учёной степени</th>
        <th>Запланированная дата</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($dissertationdefense as $dissertation): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=HTML::anchor('admin/dissertationdefense/edit/'.$dissertation->id, $dissertation->personnel->family.' '.$dissertation->personnel->name.' '.$dissertation->personnel->patronymic)?></td>
          <td class="text-center"><?=$dissertation->degree->degree?></td>
          <td class="text-center"><?=$dissertation->quarter.' квартал '.$dissertation->year.'г.'?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    