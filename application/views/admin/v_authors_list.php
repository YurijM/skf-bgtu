<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/authors/edit', 'Добавить автора')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Автор</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($authors as $author): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td>
            <?=HTML::anchor('admin/authors/edit/'.$author->id, $author->author)?>
          </td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    