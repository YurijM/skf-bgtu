<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/universityscience/edit', 'Добавить журнал')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Номер журнала</th>
      </tr>
      
      <? $n = 1 ?>
      <? foreach ($magazine as $item): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td class="text-center"><?=HTML::anchor('admin/universityscience/edit/'.$item->id, '№'.$item->number.' '.$item->year.'г.')?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    