<h4><?=$page_title?> - <small>таблица</small> personnel</h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/personnel/edit', 'Добавить нового сотрудника')?>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-condensed">
      <tr>
        <th>№</th>
        <th>Сотрудник</th>
        <th>Кафедра</th>
        <th>Должность</th>
        <th>Учёное звание</th>
        <th>Учёная степень</th>
        <th>Тип занятости</th>
      </tr>
      
      <? $n = 1; ?>
      <? foreach ($personnel as $item): ?>
        <tr <?=($item->fired == 1 ? 'class="fired"' : '')?>>
          <td class="text-center"><?=($item->fired == 0 ? $n : '')?></td>
          <td><a href="/admin/personnel/edit/<?=$item->id?>"><?=$item->family.' '.$item->name.' '.$item->patronymic?></a></td>
          <td><?=$item->department->department?></td>
          <td><?=$item->post->post?></td>
          <td><?=$item->academic_title->academic_title?></td>
          <td>
            <? $degrees = $item->degrees->find_all() ?>
            <? foreach ($degrees as $degree): ?>
              <?=$degree->degree?><br>
            <? endforeach ?>
          </td>
          <td><?=$item->employment_type->employment_type?></td>
        </tr>
        <? $n = ($item->fired == 0 ? $n + 1 : $n) ?>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/personnel/edit', 'Добавить нового сотрудника')?>
  </div>
</div>
    