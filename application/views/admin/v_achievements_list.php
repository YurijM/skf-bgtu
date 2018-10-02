<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
	<div>
		<?=HTML::anchor('admin/achievements/edittext', 'Редактировать текст на странице "Достижения"')?>
	</div>

	<div class="text-right">
    <?=HTML::anchor('admin/achievements/edit', 'Добавить достижение')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Дата</th>
        <th>Файл с изображением награды</th>
      </tr>
      
      <? foreach ($achievements as $achievement): ?>
        <tr>
          <td class="text-center"><?=HTML::anchor('admin/achievements/edit/'.$achievement->id, Helper_Addfunction::date_from_mysql($achievement->date))?></td>
          <td><?=$achievement->img_file?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/achievements/edit', 'Добавить достижение')?>
  </div>
</div>
    