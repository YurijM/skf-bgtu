<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/sections/edit', 'Добавить профиль')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>Направление</th>
        <th>Профиль</th>
      </tr>
      <? foreach ($sections as $section): ?>
        <tr>
          <td><?=$education_forms[$section->direction->education].' - '.$section->direction->direction?></td>
          <td><?=HTML::anchor('admin/sections/edit/'.$section->id, $section->section.($section->short ? ' ('.$section->short.')' : ''))?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
  
  <div class="text-right">
    <?=HTML::anchor('admin/sections/edit', 'Добавить профиль')?>
  </div>
</div>
    