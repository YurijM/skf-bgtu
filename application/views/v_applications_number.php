<div class="applications-number">
	<h2 class="text-center"><?= $page_title . ' (' . $year . 'г.)' ?></h2>

	<? if (count($intramural) > 0): ?>
    <h4 class="text-center">Очная форма обучения</h4>

    <div class="table table-responsive">
      <table class="table-responsive table-bordered table-condensed bg-info">
        <tr>
          <th width="40%">Направление подготовки</th>
          <th width="15%">КЦП (бюджетные места)</th>
          <th width="15%">Количество мест по договорам с оплатой стоимости обучения</th>
          <th width="15%">Общее количество мест</th>
          <th width="15%">Количество поданных заявлений</th>
        </tr>

        <? $total = 0 ?>
        <? $budget = 0 ?>
        <? $by_contract = 0 ?>
        <? $current_count = 0 ?>

        <? foreach ($intramural as $speciality): ?>
          <tr>
            <td><?= $speciality->direction->direction . ' (' . $speciality->direction->code . ')' ?></td>
            <td class="text-center"><?= ($speciality->budget == 0 ? '&mdash;' : $speciality->budget) ?></td>
            <td class="text-center"><?= ($speciality->by_contract == 0 ? '&mdash;' : $speciality->by_contract) ?></td>
            <td class="text-center"><strong><?= $speciality->budget + $speciality->by_contract ?></strong></td>
            <!--<td class="text-center"><strong><? /*=($speciality->current_count == 0 ? '&mdash;' : $speciality->current_count)*/ ?></strong></td>-->
            <? $count = DB::select(array('COUNT("matriculants.id")', 'current_count'))
              ->from('matriculants')
              ->join('sections')->on('sections.id', '=', 'matriculants.section_id')
              ->join('directions')->on('directions.id', '=', 'sections.direction_id')
              ->where('sections.direction_id', '=', $speciality->direction_id)
              ->and_where('matriculants.year', '=', $year)
              ->execute()
              ->get('current_count') ?>
            <td class="text-center"><strong><?= ($count > 0 ? $count : '&mdash;') ?></strong></td>
          </tr>

          <? $budget += $speciality->budget ?>
          <? $by_contract += $speciality->by_contract ?>
          <? $total += $speciality->budget + $speciality->by_contract ?>
          <? /* $current_count += $speciality->current_count */ ?>
          <? $current_count += $count ?>
        <? endforeach ?>

        <tr>
          <td class="text-center">Всего</td>
          <td class="text-center"><?= ($budget == 0 ? '&mdash;' : $budget) ?></td>
          <td class="text-center"><?= ($by_contract == 0 ? '&mdash;' : $by_contract) ?></td>
          <td class="text-center text-danger"><strong><?= $total ?></strong></td>
          <td class="text-center text-danger"><strong><?= ($current_count > 0 ? $current_count : '&mdash;') ?></strong>
          </td>
        </tr>
      </table>
    </div>
  <? endif ?>
    
	<? if (count($extramural) > 0): ?>
    <h4 class="text-center">Заочная форма обучения</h4>

    <div class="table table-responsive">
      <table class="table-responsive table-bordered table-condensed bg-info">
        <tr>
          <th width="60%">Направление подготовки</th>
          <th width="20%">Количество мест</th>
          <th width="20%">Количество поданных заявлений</th>
        </tr>

        <? $total = 0 ?>
        <? $current_count = 0 ?>

        <? foreach ($extramural as $speciality): ?>
          <tr>
            <td><?= $speciality->direction->direction . ' (' . $speciality->direction->code . ')' ?></td>
            <td class="text-center"><strong><?= $speciality->by_contract ?></strong></td>
            <!--<td class="text-center"><strong><? /*=($speciality->current_count == 0 ? '&mdash;' : $speciality->current_count)*/ ?></strong></td>-->
            <? $count = DB::select(['COUNT("matriculants.id")', 'current_count'])
              ->from('matriculants')
              ->join('sections')->on('sections.id', '=', 'matriculants.section_id')
              ->join('directions')->on('directions.id', '=', 'sections.direction_id')
              ->where('directions.id', '=', $speciality->direction_id)
              ->and_where('matriculants.year', '=', $year)
              ->execute()
              ->get('current_count') ?>
            <td class="text-center"><strong><?= ($count > 0 ? $count : '&mdash;') ?></strong></td>
          </tr>

          <? $total += $speciality->by_contract ?>
          <? /* $current_count += $speciality->current_count */ ?>
          <? $current_count += $count ?>
        <? endforeach ?>

        <tr>
          <td class="text-center">Всего</td>
          <td class="text-center text-danger"><strong><?= $total ?></strong></td>
          <td class="text-center text-danger"><strong><?= ($current_count > 0 ? $current_count : '&mdash;') ?></strong>
          </td>
        </tr>
      </table>
    </div>
  <? endif ?>
    
  <? if (count($intramural) + count($extramural) == 0): ?>
    <h4 class="text-center" style="margin: 3em 0">Приёмная кампания ещё не началась</h4>
  <? endif ?>
</div>
    