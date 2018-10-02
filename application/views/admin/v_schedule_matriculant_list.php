<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/schedulematriculant/edit', 'Добавить вступительное испытание')?>
  </div>
  
  <p class="text-center">
    <strong>Вступительные испытания, проводимые СКФ БГТУ им.В.Г.Шухова самостоятельно на очную форму обучения</strong>
  </p>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Дата</th>
        <th>Предмет</th>
        <th>Аудитория</th>
      </tr>
      <? foreach ($intramural as $schedule): ?>
        <tr>
          <td class="text-center"><?=Helper_Addfunction::datetime_from_mysql($schedule->date, FALSE)?></td>
          <td><?=HTML::anchor('admin/schedulematriculant/edit/'.$schedule->id, $schedule->subject.' ('.$event_types[$schedule->event_type].')')?></td>
          <td class="text-center"><?=$schedule->classroom?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
  
  <p class="text-center">
    <strong>Вступительные испытания, проводимые СКФ БГТУ им.В.Г.Шухова самостоятельно на заочную форму обучения</strong>
  </p>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Дата</th>
        <th>Предмет</th>
        <th>Аудитория</th>
      </tr>
      <? foreach ($extramural as $schedule): ?>
        <tr>
          <td class="text-center"><?=Helper_Addfunction::datetime_from_mysql($schedule->date, FALSE)?></td>
          <td><?=HTML::anchor('admin/schedulematriculant/edit/'.$schedule->id, $schedule->subject.' ('.$event_types[$schedule->event_type].')')?></td>
          <td class="text-center"><?=$schedule->classroom?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/schedulematriculant/edit', 'Добавить вступительное испытание')?>
  </div>
</div>
    