<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/retraining/edit', 'Добавить курс переподготовки')?>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Курс переподготовки</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($retraining as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=HTML::anchor('admin/retraining/edit/'.$course->id, $course->course)?></td>
      <? endforeach ?>
    </table>
  </div>
</div>
    