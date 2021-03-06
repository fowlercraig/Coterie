<?php include ('parts/config.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $siteName; ?></title>
<meta name="description" content="">
<link rel="shortcut icon" href="../coterie-3-50132868/assets/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="../coterie-3-50132868/assets/main.css">
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?ver=1.11.1'></script>
<link href="//cdn.symbolset.com/0a5420ac8ec04a68e39a13df1f9d8f83da2799f8/symbolset.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="assets/app.ie.min.js"></script>
<![endif]-->

</head>

<?php
	if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 'index';
  }
 ?>
<body class="fs-grid fs-grid-fluid page-<?php echo $page; ?>">

<?php if( $page == 'index'): ?>
<?php include ('parts/page-splash.php'); ?>
<?php endif; ?>

<div id="wrapper" class="menu-swap">
<?php include('parts/header.php') ?>
<div id="content"><?php include('parts/content.php') ?></div>
</div>
<?php include('parts/footer.php') ?>

<script type='text/javascript' src='../coterie-3-50132868/assets/vendor.min.js'></script>
<script type='text/javascript' src='../coterie-3-50132868/assets/main.min.js'></script>
<script src="//cdn.symbolset.com/0a5420ac8ec04a68e39a13df1f9d8f83da2799f8/symbolset.js"></script>

</body>
</html>