<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <?=$pagination?>
  
  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/articles/edit', 'Добавить статью')?>
    </div>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Издание</th>
        <th>Статья</th>
        <th>Автор(ы)</th>
        <th>Стр.</th>
      </tr>
      <? $n = 1 + $count_articles_for_page * ($page - 1) ?>
      <? foreach ($articles as $article): ?>
        <tr <?=($article->is_student > 0 ? 'class="bg-warning"' : '')?>>
          <td class="text-center"><?=$n++?></td>
          <td><?=$article->periodical->periodical.' '.$article->periodical->year.($article->periodical->number ? ' №'.$article->periodical->number.' ' : '')?></td>
          <td><?=HTML::anchor('admin/articles/edit/'.$article->id.'/'.$page, $article->article)?></td>
          <td>
            <? $authors = $article->authors->find_all(); $first = TRUE ?>
            <? foreach ($authors as $author): ?>
              <?=($first ? '' : ';<br>').$author->author?>
              <? $first = FALSE ?>
            <? endforeach ?>
          </td>
          <td class="text-center"><?=($article->page_from ? $article->page_from.($article->page_to ? ' - '.$article->page_to : '') : '')?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/articles/edit', 'Добавить статью')?>
    </div>
  </div>

  <?=$pagination?>
</div>
    