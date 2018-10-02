<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/posts/edit', 'Добавить должность')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Должность</th>
      </tr>
      <? foreach ($posts as $post): ?>
        <tr>
          <td><?=HTML::anchor('admin/posts/edit/'.$post->id, $post->post)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    