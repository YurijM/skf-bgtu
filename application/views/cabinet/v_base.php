<!DOCTYPE html>
<html>
<head>
	<title><?= $pageTitle . ' - ' . $siteName ?></title>
	<meta charset="utf-8"/>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
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
<body>
<noscript>
	<div style="background-color: yellow; border: 1px solid black; height: 22px; padding: 2px;">
		Для полной функциональности этого сайта необходимо включить JavaScript.
		<a href="http://www.enable-javascript.com/ru/">Здесь</a> инструкции, как включить JavaScript в вашем браузере.
	</div>
</noscript>

<div class="wrapper container">
	<header class="alert-info text-center">
		<?= $header ?>
	</header>

	<?=$menu_cabinet?>

	<main class="content col-xs-12">
		<?= $main ?>
	</main>

	<div id="preloader">
		<?/*= HTML::image($dirImg . 'preloader.gif',
			['alt' => 'Загрузка данных', 'title' => 'Загрузка данных']
		) */?>
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<span class="sr-only">Загрузка данных...</span>
	</div>

	<footer>
	</footer>
</div><!-- .wrapper-->
</body>
</html>
