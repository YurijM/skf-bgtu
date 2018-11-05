<h4><?=$page_title?> - <small>таблица</small> <?= $table ?></h4>

<div class="admin-list">
	<div class="text-right">
		<?=HTML::anchor('admin/certificationdates/edit/' . $dates->id, 'Редактировать сроки аттестации студентов')?>
	</div>

	<div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th colspan="2">Первая аттестация</th>
				<th colspan="2">Вторая аттеcтация</th>
			</tr>
			<tr>
        <th>начало</th>
        <th>окончание</th>
				<th>начало</th>
				<th>окончание</th>
      </tr>
			<tr>
				<td class="text-center"><?=Helper_Addfunction::date_from_mysql($dates->begin_first)?></td>
				<td class="text-center"><?=Helper_Addfunction::date_from_mysql($dates->end_first)?></td>
				<td class="text-center"><?=Helper_Addfunction::date_from_mysql($dates->begin_second)?></td>
				<td class="text-center"><?=Helper_Addfunction::date_from_mysql($dates->end_second)?></td>
			</tr>
    </table>
  </div>
</div>
