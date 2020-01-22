<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/scientificactivity/edit', 'Добавить оценку')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Год</th>
        <th>Преподаватель</th>
        <th>Баллы</th>
      </tr>
      <? foreach ($scientificactivity as $point): ?>
        <tr>
          <td class="text-center"><?=$point->year?></td>
          <td><?=HTML::anchor('admin/scientificactivity/edit/'.$point->id, $point->personnel->family.' '.$point->personnel->name.' '.$point->personnel->patronymic)?></td>
          <td class="text-center"><?=$point->point?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
