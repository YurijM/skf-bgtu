<div class="sro-list">
  <h2 class="text-center"><?=$page_title?></h2>

  <p>
    Наш ВУЗ сотрудничает с <strong>шестью</strong> СРО на территории Северо-Кавказского федерального округа. Около <strong>двухсот</strong> предприятий имеют договорные отношения на постоянной основе по повышению квалификации, переподготовке специалистов и трудоустройстве выпускников.
  </p>
  <p>
    В <strong>2015 году</strong> оказаны услуги на сумму <strong>4 млн. 202 тыс. руб</strong>.
  </p>
  
  <?=$entry_training?>

  <?=$application_training?>

  <?=$certificate_type?>
  
  <h4 class="text-center">Курсы повышения квалификации</h4>
  
  <? foreach ($sro as $course): ?>
    <? $sub_courses = ORM::factory('kpksro')->where('parent_id', '=', $course->id)->find_all() ?>
    <? if (count($sub_courses) == 0): ?>
      <div class="course"><?=$course->course_no.'.'.'&nbsp;'.HTML::anchor('/kpksro/'.$course->id, $course->course)?></div>
    <? else: ?>
      <div class="course"><?=$course->course_no.'.'.'&nbsp;'.$course->course?></div>

      <? foreach ($sub_courses as $sub): ?>
        <div class="sub-course"><?=$course->course_no.'.'.$sub->course_no.'&nbsp;'.HTML::anchor('/kpksro/'.$sub->id, $sub->course)?></div>
      <? endforeach ?>
    <? endif ?>
  <? endforeach ?>
</div>
