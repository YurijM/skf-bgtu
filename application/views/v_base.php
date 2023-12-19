<!DOCTYPE html>
<html>
<head>
	<title><?=$page_title.' - '.$site_name?></title>
	<meta charset="utf-8" />
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="description" content="<?=$description?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?
    foreach ($styles as $file_style):
      echo html::style($file_style);
    endforeach;
    foreach ($scripts as $file_script):
      echo html::script($file_script);
    endforeach;
  ?>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Yandex.Metrika counter -->
	<!--<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(64750987, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true
		});
	</script>

	<noscript><div><img src="https://mc.yandex.ru/watch/64750987" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
	<!-- /Yandex.Metrika counter -->
</head>

<body>
  <noscript>
    <div style="background-color: yellow; border: 1px solid black; height: 22px; padding: 2px;">
      Для полной функциональности этого сайта необходимо включить JavaScript.
      <a href="http://www.enable-javascript.com/ru/">Здесь</a> инструкции, как включить JavaScript в вашем браузере.
    </div>
  </noscript>

  <div class="wrapper container">
    <header>
      <?=$header?>
    </header>

    <?=$menu_top?>

    <main class="content">
      <?=($main ? $main : '')?>
    </main>

    <footer>
      <?=$footer?>
    </footer>
  </div><!-- .wrapper-->

	<script>
		new isvek.Bvi({
			target: '.bvi-open',
			fontSize: 14,
		})
	</script>
</body>
</html>
  
<script>
  $(document).ready(function() {
    // Автоматическая прокрутка до верхнего меню при загрузке страницы
    $(function() {
      $('html, body').stop().animate({
         scrollTop: $('.menu-top').offset().top
      }, 1000);
    }); 
  });
</script>