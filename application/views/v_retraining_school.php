<div class="retraining-list">
  <h2 class="text-center"><?=$page_title?></h2>
  <p>
		Для поступления на курсы необходимо заключить договор и внести в установленные сроки плату за обучение.
	</p>
	<p>
		Для заключения договора необходимо при себе иметь оригиналы и копии паспорта, СНИЛС родителя и поступающего.
	</p>
	<p>
		По окончанию курса выдается сертификат установленного вузом образца.
	</p>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th style="width: 3%">№ п/п</th>
        <th style="width: 30%">Курс подготовки</th>
        <th>Сроки обучения</th>
        <th>Стоимость (руб.)<br>(не облагается НДС)</th>
        <th style="width: 40%">Примечания</th>
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
          <td><?=$course->remark?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
