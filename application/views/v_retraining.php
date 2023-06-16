<div class="retraining-list">
  <h2 class="text-center"><?=$page_title?></h2>
  <p><b>ФЗ №273 от 29.12.2013г.</b></p>
  <p><b>Статья 76</b>. Дополнительное профессиональное образование.</p>
  
  <p>
    <b>п.3</b>. К освоению дополнительных профессиональных программ допускаются:
  </p>
  <ul style="list-style-type: disc">
    <li>лица, имеющие среднее профессиональное и (или) высшее образование;</li>
    <li>лица, получающие среднее профессиональное и (или) высшее образование;</li>
  </ul>
  
  <p>
    <b>п.5</b>. Программа профессиональной переподготовки направлена на получение компетенции, необходимой для выполнения нового вида профессиональной деятельности, приобретение новой квалификации.
  </p>
  
  <p>
    <b>п.15</b>. Лицам, успешно освоившим соответсвующую дополнительную профессиональную программу и прошедшим итоговую аттестацию, выдаётся диплом профессиональной переподготовки.
  </p>

  <?=$application_training?>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th style="width:3%">№ п/п</th>
        <th style="width:20%">Курс переподготовки</th>
        <th>Сроки обучения</th>
        <th>Стоимость (руб.)<br>(не облагается НДС)</th>
        <th style="width:50%">Примечания</th>
      </tr>
    
      <? $n = 1 ?>
      <? foreach ($retraining as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td>
            <?=$course->course.($course->file_program != '' ? HTML::anchor($dir_docs_retraining.$course->file_program, '<br>(просмотреть программу)', array('target' => '_blank')) : '')?>
          </td>
          <td><?=$course->time?></td>
          <td class="text-center"><?=number_format($course->cost, 2, '.', ' ')?></td>
          <td><?=$course->requirement?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <?=$entry_training?>
</div>
