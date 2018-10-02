<div class="safety-health-list">
  <h2 class="text-center"><?=$page_title?></h2>

  <?=$entry_training?>

  <?=$application_training?>
  
  <?=$certificate_type?>
  
  <p>
    Стоимость обучения <strong>2500</strong> рублей (НДС не облагается).
  </p>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th width="3%">№ п/п</th>
        <th>Название курса</th>
        <th width="25%">Категория слушателей</th>
        <th>Кол-во<br>часов</th>
        <th width="50%">Программа</th>
      </tr>
    
      <? $n = 1 ?>
      <? foreach ($courses as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=$course->course?></td>
          <td><?=$course->listener_category?></td>
          <td class="text-center"><?=$course->hours?></td>
          <td><?=$course->program?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
