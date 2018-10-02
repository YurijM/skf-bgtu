<div class="header row bg-info">
  <!-- Картинка шапки сайта -->
  <!----------------------------------------------------------------------------------------------->
  <div class="col-xs-12">
    <a href="/" title="Переход на главную страницу">
      <img class="img-responsive" src="<?=$dir_img?>header.png" alt="СКФ БГТУ">
    </a>
  </div>
  
  <!-- Слайдер -->
  <!----------------------------------------------------------------------------------------------->
  <div id="carousel-example-generic" class="<?=($mode == 'normal' ? 'col-md-offset-1' : '')?> col-md-7 col-sm-6 col-xs-12 carousel slide" data-ride="carousel" data-interval="15000">
    <?=$slider?>
  </div>

  <!-- Панель дополнительной информации -->
  <!----------------------------------------------------------------------------------------------->
  <div class="<?=($mode == 'normal' ? 'col-md-4' : 'col-md-5')?> col-md-offset-0 col-sm-6 col-xs-12 text-center">
    <?=$add_info?>
  </div>
  
  <!-- Панель с адресом -->
  <!----------------------------------------------------------------------------------------------->
  <div class="address col-xs-12 text-center">
    <?=$address?>, тел. <?=$phone?>, email: <?=$email?>
  </div>
</div>
