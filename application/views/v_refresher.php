<div class="refresher-list">
  <h2 class="text-center"><?=$page_title?></h2>

  <p>
		Записаться на обучение можно по телефону <b>8 (87922) 5-63-87</b> или по электронной почте <b>bgtu-kpk@yandex.ru</b>
  </p>

  <p>
		<b>Для юридических лиц</b> необходимо подать общую заявку на обучение с указанием ФИО, должностей сотрудников на фирменном бланке организации, а
		также заполнить личные карты и согласия на обработку персональных данных.
  </p>
  
  <p>
		<b>Для физических лиц</b> для заключения договора на обучение необходимо заполнить заявления, личную карточку и согласия на обработку персональных
		данных.
  </p>

  <p>
		По итогам обучения выдаётся удостоверение повышения квалификации установленного образца.
  </p>

  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th style="width:3%">№ п/п</th>
        <th style="width:25%">Название курса</th>
        <th>Категории слушателей</th>
        <th style="width:5%">Кол-во часов</th>
        <th style="width:5%">Стоимость (руб.)</th>
        <th style="width:35%">Программа</th>
      </tr>
    
      <? $n = 1 ?>
      <? foreach ($refresher as $course): ?>
        <tr>
          <td class="text-center"><?=$n++?></td>
          <td><?=$course->course?></td>
          <td><?=$course->listeners_categories?></td>
          <td class="text-center"><?=$course->hours_amount?></td>
          <td class="text-center"><?=number_format($course->cost, 0, '.', ' ')?></td>
          <td><?=$course->description?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
