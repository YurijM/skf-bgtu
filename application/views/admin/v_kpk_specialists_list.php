<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/kpkspecialists/edit', 'Добавить КПК для специалистов')?>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Название курса</th>
        <th>Кол-во<br>часов</th>
        <th>Стоимость (руб.)</th>
      </tr>
      
      <? $n = 1 ?>
      <? foreach ($courses as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=HTML::anchor('admin/kpkspecialists/edit/'.$course->id, $course->course)?></td>
          <td class="text-center"><?=$course->hours?></td>
          <td class="text-center"><?=number_format($course->cost, 2, '.', ' ')?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/kpkspecialists/edit', 'Добавить КПК для специалистов')?>
  </div>
</div>
    