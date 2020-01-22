<div class="sro-program-list">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Программа</th>
        <th>Кол-во<br>часов</th>
        <th>Стоимость (руб.)</th>
        <?=($sro->column_work_type != '' ? '<th>'.$sro->column_work_type.'</th>' : '')?>
      </tr>
    
      <? foreach ($programs as $program): ?>
        <tr>
          <td class="text-center"><?=$program->order_no?></td>
          <td><?=$program->program.($program->pressmark ? ' ('.$program->pressmark.')' : '')?></td>
          <td class="text-center"><?=$program->hours?></td>
          <td class="text-center"><?=number_format($program->cost, 2, '.', ' ')?></td>
          <? if ($sro->column_work_type != ''): ?>
            <td><?=$program->work_type?></td>
          <? endif ?>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
