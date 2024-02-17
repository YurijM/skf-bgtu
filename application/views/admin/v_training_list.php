<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/training/edit', 'Добавить подготовительный курс')?>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Подготовительный курс</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($training as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=HTML::anchor('admin/training/edit/'.$course->id, $course->course)?></td>
      <? endforeach ?>
    </table>
  </div>
</div>
    