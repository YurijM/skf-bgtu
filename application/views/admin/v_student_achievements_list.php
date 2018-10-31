<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/studentachievements/edit', 'Добавить достижение')?>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th width="5%">№ п/п</th>
        <th width="20%">Студент</th>
        <th width="*">Достижение</th>
      </tr>

      <? $no = 1 ?>
			<? foreach ($achievements as $achievement): ?>
        <tr>
          <td class="text-center"><?=$no++?></td>
          <td><?=$achievement['person']?></td>
          <td><?=HTML::anchor(
          	'admin/studentachievements/edit/'.$achievement['id'],
							$achievement['description']
						)?>
					</td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="row">
    <div class="text-right">
			<?=HTML::anchor('admin/studentachievements/edit', 'Добавить достижение')?>
    </div>
  </div>
</div>
    