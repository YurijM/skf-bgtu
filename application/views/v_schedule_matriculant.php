<div class="schedule-matriculant">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <? if (count($intramural) + count($extramural) > 0): ?>
    <p>
      Для лиц, поступающих по результатам вступительных испытаний, проводимых СКФ БГТУ им.В.Г.Шухова самостоятельно, провести вступительные испытания по графику:
    </p>
  
    <? if (count($intramural) > 0): ?>
      <h4 class="text-center">на очную форму обучения</h4>

      <div class="table-responsive">
        <table class="table table-bordered table-condensed bg-info">
          <tr>
            <th rowspan="2">Предмет</th>
            <th colspan="2">Экзамен</th>
            <th colspan="2">Консультация</th>
            <th colspan="2">Объявление результатов</th>
            <th colspan="2">Апелляция</th>
          </tr>
          <tr>
            <th>дата</th>
            <th>ауд.</th>
            <th>дата</th>
            <th>ауд.</th>
            <th>дата</th>
            <th>ауд.</th>
            <th>дата</th>
            <th>ауд.</th>
          </tr>

          <? foreach ($intramural as $schedule): ?>
            <? $subject = ORM::factory('schedulematriculant')->where('education', '=', 0)->and_where('subject', '=', $schedule->subject)->order_by('event_type')->find_all() ?>

            <tr>
              <td><?=$schedule->subject?></td>
              <? foreach ($subject as $event_type): ?>
                <td class="text-center">
                  <?=Helper_Addfunction::datetime_from_mysql($event_type->date, FALSE)?>
                  <?='('.$weekdays[date('w', strtotime($event_type->date))].')'?>
                </td>
                <td class="text-center"><?=$event_type->classroom?></td>
              <? endforeach ?>
            </tr>
          <? endforeach ?>
        </table>
      </div>
      
      <p>
        <em><?=$intramural_reserve_day->subject?> - <?=Helper_Addfunction::datetime_from_mysql($intramural_reserve_day->date, FALSE).' ('.$weekdays[date('w', strtotime($intramural_reserve_day->date))].')'?></em>
      </p>
    <? endif ?>
  
    <? if (count($extramural) > 0): ?>
      <h4 class="text-center">на заочную форму обучения</h4>

      <div class="table-responsive">
        <table class="table table-bordered table-condensed bg-info">
          <tr>
            <th rowspan="2">Предмет</th>
            <th colspan="2">Экзамен</th>
            <th colspan="2">Консультация</th>
            <th colspan="2">Объявление результатов</th>
            <th colspan="2">Апелляция</th>
          </tr>
          <tr>
            <th>дата</th>
            <th>ауд.</th>
            <th>дата</th>
            <th>ауд.</th>
            <th>дата</th>
            <th>ауд.</th>
            <th>дата</th>
            <th>ауд.</th>
          </tr>

          <? foreach ($extramural as $schedule): ?>
            <? $subject = ORM::factory('schedulematriculant')->where('education', '=', 1)->and_where('subject', '=', $schedule->subject)->order_by('event_type')->find_all() ?>

            <tr>
              <td><?=$schedule->subject?></td>
              <? foreach ($subject as $event_type): ?>
                <td class="text-center">
                  <?=Helper_Addfunction::datetime_from_mysql($event_type->date, FALSE)?>
                  <?='('.$weekdays[date('w', strtotime($event_type->date))].')'?>
                </td>
                <td class="text-center"><?=$event_type->classroom?></td>
              <? endforeach ?>
            </tr>
          <? endforeach ?>
        </table>
      </div>

      <p>
        <em><?=$extramural_reserve_day->subject?> - <?=Helper_Addfunction::datetime_from_mysql($extramural_reserve_day->date, FALSE).' ('.$weekdays[date('w', strtotime($extramural_reserve_day->date))].')'?></em>
      </p>
    <? endif ?>
  <? else: ?>
    <h4 class="text-center" style="margin: 3em 0">Приёмная кампания ещё не началась</h4>
  <? endif ?>
</div>
    