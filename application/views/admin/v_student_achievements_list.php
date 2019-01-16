<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
	<?=$pagination?>

  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/studentachievements/edit', 'Добавить достижение')?>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th width="7%">№ п/п</th>
        <th width="23%">Студент</th>
        <th width="*">Достижение</th>
      </tr>

			<? $no = 1 + $count_achievements_for_page * ($page - 1) ?>
			<? foreach ($achievements as $achievement): ?>
        <tr>
          <td class="text-center"><?=$no++?></td>
          <td><?=$achievement['person']?></td>
          <td><?=HTML::anchor(
          	'admin/studentachievements/edit/'.$achievement['id'].'/'.$page,
							$achievement['description'].' (файл '.$achievement['student_id'].'-'.$achievement['id'].'.pdf)'
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

	<?=$pagination?>
</div>
    