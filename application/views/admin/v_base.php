<!DOCTYPE html>
<html>
<head>
	<title><?=$page_title.' - '.$site_name?></title>
	<meta charset="utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
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
</head>

<style>
</style>
<body>
  <noscript>
    <div style="background-color: yellow; border: 1px solid black; height: 22px; padding: 2px;">
      Для полной функциональности этого сайта необходимо включить JavaScript.
      <a href="http://www.enable-javascript.com/ru/">Здесь</a> инструкции, как включить JavaScript в вашем браузере.
    </div>
  </noscript>

  <div class="wrapper container">
    <header class="alert-info text-center">
      <?=$header?>
    </header>

    <aside class="left-sidebar col-sm-3 col-xs-4">
      <div class="list-group">
        <?=HTML::anchor('/admin/exit', 'Выход', array('class' => 'list-group-item '.($controller == 'exit' ? 'active disabled' : '')))?>

        <? foreach ($menu as $item): ?>
          <?=HTML::anchor('/admin/'.$item->controller, $item->item, array('class' => 'list-group-item '.($controller == $item->controller ? 'active disabled' : '')))?>
        <? endforeach ?>
      </div>
    </aside><!-- .left-sidebar -->

    <main class="content col-sm-9 col-xs-8">
      <?=$main?>
    </main>

    <footer>
      
    </footer>
  </div><!-- .wrapper-->

</body>
</html>

<script>
//  $(document).ready(function(){
//    $('.left-sidebar a.list-group-item').click(function() {
//     $('.left-sidebar a.list-group-item').removeClass('active').removeClass('disabled');
//     $(this).addClass('active').addClass('disabled');
//    });
//  });
</script>