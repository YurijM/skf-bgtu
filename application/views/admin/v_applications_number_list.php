<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/applicationsnumber/edit', 'Добавить данные по поданным заявлениям')?>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Год</th>
        <th>Направление</th>
        <th>Бюджетное количество мест</th>
        <th>Количество мест по договору</th>
        <th>Общее количество мест</th>
        <!--th>Количество поданных заявлений</th>-->
      </tr>
      <? foreach ($applications as $speciality): ?>
        <tr>
          <td class="text-center"><?=$speciality->year?></td>
          <td><?=HTML::anchor('admin/applicationsnumber/edit/'.$speciality->id, $education_forms[$speciality->direction->education].' - '.$speciality->direction->direction.' ('.$speciality->direction->code.')')?></td>
          <td class="text-center"><?=$speciality->budget?></td>
          <td class="text-center"><?=$speciality->by_contract?></td>
          <td class="text-center"><?=$speciality->budget + $speciality->by_contract?></td>
          <!--<td class="text-center"><?/*=$speciality->current_count*/?></td>-->
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/applicationsnumber/edit', 'Добавить данные по поданным заявлениям')?>
  </div>
</div>
    