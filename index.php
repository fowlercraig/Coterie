
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" ng-app="myapp"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Coterie</title>
<meta name="description" content="">
<link rel="shortcut icon" href="assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<meta name='robots' content='noindex,follow' />
<link rel="stylesheet" href="assets/main.css">
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?ver=1.11.1'></script>
<link href="//cdn.symbolset.com/bb206072b1ea173cb334d5d322652b408731e4a7/symbolset.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="assets/app.ie.min.js"></script>
<![endif]-->

<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

</head>

<?php
	if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 'index';
  }
 ?>

<body class="fs-grid page-<?php echo $page; ?>">

<div id="wrapper" class="menu-swap">
<?php include('parts/header.php') ?>
<div id="content"><?php include('parts/content.php') ?></div>
<?php include('parts/footer.php') ?>
</div>

<script type='text/javascript' src='assets/vendor.min.js'></script>
<script type='text/javascript' src='assets/main.min.js'></script>
<script src="//cdn.symbolset.com/bb206072b1ea173cb334d5d322652b408731e4a7/symbolset.js"></script>

</body>
</html>