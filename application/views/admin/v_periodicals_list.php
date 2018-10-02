<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/periodicals/edit', 'Добавить периодическое издание')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Периодическое издание</th>
        <th>Номер</th>
      </tr>
      
      <? foreach ($periodicals as $periodical): ?>
        <tr>
          <td><?=HTML::anchor('admin/periodicals/edit/'.$periodical->id, $periodical->periodical )?></td>
          <td class="text-center"><?=$periodical->year.($periodical->number ? ' №'.$periodical->number : '')?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/periodicals/edit', 'Добавить периодическое издание')?>
  </div>
</div>
    