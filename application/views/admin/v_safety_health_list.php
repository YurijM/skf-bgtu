<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/safetyhealth/edit', 'Добавить курс по ОТ и ТБ')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Название курса</th>
        <th>Кол-во<br>часов</th>
      </tr>
      
      <? $n = 1 ?>
      <? foreach ($courses as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=HTML::anchor('admin/safetyhealth/edit/'.$course->id, $course->course)?></td>
          <td class="text-center"><?=$course->hours?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    