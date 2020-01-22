<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/studentcouncil/edit', 'Добавить члена студсовета')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>№ п/п</th>
        <th>Должность</th>
        <th>Студент</th>
        <th>Фото</th>
      </tr>
      
      <? foreach ($students as $student): ?>
        <tr>
          <td class="text-center"><?=$student->order_no?></td>
          <td><?=HTML::anchor('admin/studentcouncil/edit/'.$student->id, $student->post)?></td>
          <td><?=$student->student?></td>
          <td><?=$student->photo?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    