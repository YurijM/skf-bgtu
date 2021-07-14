<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <?=$pagination?>
  
  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/matriculantscollege/edit', 'Добавить абитуриента')?>
    </div>
  </div>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Год</th>
        <th>Абитуриент</th>
        <th>Профиль</th>
	      <th>Вид документа</th>
      </tr>

      <? $n = 1 + $count_matriculants_for_page * ($page - 1) ?>
      <? foreach ($matriculants as $matriculant): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td class="text-center"><?=$matriculant->year?></td>
          <td><?=HTML::anchor('admin/matriculantscollege/edit/'.$matriculant->id.'/'.$page, $matriculant->family
		          .' '.$matriculant->name.' '.$matriculant->patronymic)?></td>
          <td><?=$education_types[$matriculant->section->direction->education].' - '.($matriculant->section->short ? $matriculant->section->short : $matriculant->section->section)?></td>
	        <td><?=$docs_kind[$matriculant->doc_kind]?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="row">
    <div class="text-right">
      <?=HTML::anchor('admin/matriculantscollege/edit', 'Добавить абитуриента')?>
    </div>
  </div>

  <?=$pagination?>
</div>
    