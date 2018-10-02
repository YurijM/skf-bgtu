<h4><?=$page_title?> - <small>таблица</small> news</h4>

<div class="admin-list">
  <div class="row">
    <div class="col-sm-10 col-xs-9 text-center">
      <?=$pagination?>
    </div>
    
    <div class="col-sm-2 col-xs-3 text-right">
      <?=HTML::anchor('admin/news/edit', 'Добавить новость')?>
    </div>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th>Категория</th>
        <th>Новость</th>
      </tr>
      <? foreach ($news as $item): ?>
        <tr>
          <td><?=Helper_Addfunction::date_from_mysql($item->date)?></td>
          <td><?=HTML::anchor('admin/news/edit/'.$item->id.'/'.$page, $item->title)?></td>
          <td class="text-center"><?=$item->category?></td>
          <td><?=Text::limit_words($item->news, 7)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="row">
    <div class="col-sm-10 col-xs-9 text-center">
      <?=$pagination?>
    </div>
    
    <div class="col-sm-2 col-xs-3 text-right">
      <?=HTML::anchor('admin/news/edit', 'Добавить новость')?>
    </div>
  </div>
</div>
    