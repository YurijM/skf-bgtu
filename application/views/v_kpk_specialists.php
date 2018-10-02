<div class="kpk-specialists-list">
  <h2 class="text-center"><?=$page_title?></h2>

  <?=$entry_training?>

  <?=$application_training?>
  
  <?=$certificate_type?>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th width="3%">№ п/п</th>
        <th>Название курса</th>
        <th width="25%">Категория слушателей</th>
        <th>Кол-во<br>часов</th>
        <th>Стоимость (руб.)</th>
        <th width="40%">Программа</th>
      </tr>
    
      <? $n = 1 ?>
      <? foreach ($courses as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=$course->course?></td>
          <td><?=$course->listener_category?></td>
          <td class="text-center"><?=$course->hours?></td>
          <td class="text-center"><?=number_format($course->cost, 2, '.', ' ')?></td>
          <td><?=$course->program?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
