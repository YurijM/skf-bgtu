<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/refresher/edit', 'Добавить курс повышения квалификации')?>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Курс повышения квалификации</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($refresher as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=HTML::anchor('admin/refresher/edit/'.$course->id, $course->course)?></td>
      <? endforeach ?>
    </table>
  </div>
</div>
    