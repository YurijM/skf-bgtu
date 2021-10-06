<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/retrainingschool/edit', 'Добавить курс подготовки по химии (ОГЭ/ЕГЭ)')?>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Курс подготовки</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($retraining as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=HTML::anchor('admin/retrainingschool/edit/'.$course->id, $course->course)?></td>
      <? endforeach ?>
    </table>
  </div>
</div>
    