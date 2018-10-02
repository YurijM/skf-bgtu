<div class="dissertation">
  <h2 class="text-center"><?=$page_title?></h2>

  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Сотрудник</th>
        <th>На соискание учёной степени</th>
        <th>Планируемая дата</th>
      </tr>
    
      <? $n = 1 ?>
      <? foreach ($dissertationdefense as $dissertation): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=$dissertation->personnel->family.' '.$dissertation->personnel->name.' '.$dissertation->personnel->patronymic?></td>
          <td class="text-center"><?=$dissertation->degree->degree?></td>
          <td class="text-center"><?=$dissertation->quarter.' квартал '.$dissertation->year.' года'?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
