<!-- Скрипты для работы с картой -->
<?=HTML::script('http://api-maps.yandex.ru/2.1/?lang=ru_RU')?>

<div class="contacts row">
  <h2 class="text-center"><?=$page_title?></h2>
  
  <div class="<?=($mode == 'normal' ? 'col-sm-7 ' : '')?>col-xs-12">
    <div class="remark bg-info text-primary text-center">
        <i>
          Проехать к нам с железнодорожного вокзала можно маршрутными такси <strong>1, 2, 2а, 3, 3а, 5, 6</strong>.<br>
          Остановка <strong>"Авиаремзавод"</strong>
        </i>
    </div>

    <div <?=($mode != 'normal' ? 'class="hidden"' : '')?> id="map" style="height: 285px">
    </div>
  </div>
  
  <div class="<?=($mode == 'normal' ? 'col-sm-5 ' : '')?>col-xs-12">
    <div class="contact col-xs-12">
      <div class="name col-sm-3 col-xs-12">Адрес:</div>
      <div class="phone col-sm-9 col-xs-12"><?=$address?></div>
    </div>
    
    <? foreach ($contacts as $contact): ?>
      <div class="contact col-xs-12">
        <div class="name col-sm-6 col-xs-12"><?=$contact->contact?>:</div>
        <div class="phone col-sm-6 col-xs-12">
          <?=($contact->phone ? 'тел. '.$contact->phone : '').($contact->email ? ($contact->phone ? ',<br>' : '').$contact->email : '')?>
        </div>
      </div>
    <? endforeach ?>
    
    <div class="feedback col-xs-12 text-center">
      <?=HTML::anchor('/feedback', 'Обратная связь')?>
    </div>
  </div>
  
  <div class="requisites col-xs-12">
    <h4>Реквизиты</h4>
    
    <p>
      Сообщаем наши реквизиты для заключения договора и выписки счетов-фактур
      <?=HTML::anchor($dir_docs.'kvitancia_na_oplaty.pdf', ' (квитанция на оплату)', array('target' => '_blank'))?>
      .
    </p>

    <div>
      Договор заключает:
      <p>
        Федеральное государственное бюджетное образовательное учреждение высшего образования «Белгородский государственный технологический университет им. В.Г. Шухова» в лице директора Северо-Кавказского филиала Курбатова Владимира Леонидовича, действующего на основании Положения о филиале и Доверенности №31 АБ 0708341 от 30.07.2014г.
      </p>
    </div>

    <div>
      Покупатель в счете фактуре:
      <p>
        Юридическое лицо: федеральное государственное бюджетное образовательное учреждение высшего образования "Белгородский государственный технологический университет им.В.Г.Шухова"; сокращенное наименование: БГТУ им.В.Г.Шухова.
      </p>
      <p>
        Юридический адрес: 308012, г.Белгород, ул.Костюкова, д.46
      </p>
    </div>
    
    <div>
      Грузополучатель в счете фактуре:
      <br/>
      Плательщик  в счете (товарной накладной):
      <p>
        Северо-Кавказский филиал федерального государственного бюджетного образовательного учреждения высшего образования "Белгородский государственный технологический университет им.В.Г.Шухова" (г.Минеральные Воды); сокращенное наименование: СКФ БГТУ им.В.Г.Шухова.
      </p>
      <p>
        Почтовый адрес: 357202, г.Минеральные Воды, Ставропольского края, ул.Железноводская, 24
      </p>
      <p>
        ИНН: 3123017793, КПП: 263002001 ( показывать в счете -фактуре)<br>
        ОГРН 1023101659481 ОКВЭД 85.22, 62.01,63.11.1 ОКПО 00303396<br>
        КБК 00000000000000000130 ОКАТО 07421000000
      </p>
    </div>
    
    <div>
      Банковские реквизиты:
      <p>
        Управление Федерального казначейства по Ставропольскому краю (2130 СКФ БГТУ им.В.Г.Шухова, л/с 20216Ц35520) ГРКЦ ГУ Банка России по Ставропольскому краю г.Ставрополь<br>
        р/с 40501810700022000002 БИК: 040702001
      </p>
    </div>
  </div>
</div>
  
<script>
  $(document).ready(function() {
    ymaps.ready(init);
    var myMap, 
        myPlacemark;

    function init(){ 
      myMap = new ymaps.Map("map", {
          center: [44.21523976, 43.12907416],
          zoom: 15,
          controls: []
      }); 
      myMap.controls.add('zoomControl');

      myPlacemark = new ymaps.Placemark([44.21817186, 43.11830241],
        {
          iconContent: 'СКФ БГТУ'
        },
        {
          //preset: 'islands#redIcon'
          preset: 'islands#redStretchyIcon'
        }
      );

      ymaps.route([
        [44.21204332, 43.14078475],
        [44.21191986, 43.13898230],
        [44.21829531, 43.11980445]
      ]).then(
        function (route) {
            myMap.geoObjects.add(route);
        },
        function (error) {
            alert("Возникла ошибка: " + error.message);
        }
      );

      myMap.geoObjects.add(myPlacemark);
    }
  });
</script>