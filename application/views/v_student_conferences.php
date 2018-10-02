<div class="student-conferences-list">
  <h2 class="text-center"><?=$page_title?></h2>

  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Дата</th>
        <th>Конференция</th>
        <th>Организатор</th>
      </tr>
    
      <? $n = 1 ?>
      <? foreach ($conferences as $conference): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td class="text-center"><?=Helper_Addfunction::date_from_mysql($conference->date)?></td>
          <td><?=$conference->conference?></td>
          <td><?=$conference->organizer->contact?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
