<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/sroprograms/edit', 'Добавить программу КПК для СРО, службы надзора')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Программы КПК для СРО, службы надзора</th>
        <th>Кол-во<br>часов</th>
        <th>Стоимость</th>
      </tr>
      
      <? foreach ($sro as $course): ?>
        <? $sub_courses = ORM::factory('kpksro')->where('parent_id', '=', $course->id)->find_all() ?>
        <? if (count($sub_courses) == 0): ?>
          <tr>
            <td colspan="3"><?=$course->course?></td>
          </tr>
        <? endif ?>
          
        <? $programs = ORM::factory('sroprogram')->where('kpk_sro_id', '=', $course->id)->order_by('order_no')->find_all() ?>
        <? foreach ($programs as $program): ?>
          <tr>
            <td class="program">
              <?=$program->order_no?>.
              <?=HTML::anchor('admin/sroprograms/edit/'.$program->id, $program->program.($program->pressmark != '' ? ' ('.$program->pressmark.')' : ''))?>
            </td>
            <td class="text-center"><?=$program->hours?></td>
            <td class="text-center"><?=number_format($program->cost, 2, '.', ' ')?></td>
          </tr>
        <? endforeach ?>
      <? endforeach ?>
    </table>
  </div>

  <div class="text-right">
    <?=HTML::anchor('admin/sroprograms/edit', 'Добавить программу КПК для СРО, службы надзора')?>
  </div>
</div>
    