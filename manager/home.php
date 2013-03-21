<?
	$root = '1';
	require_once "_control.php";
	require_once "_inheritance.php";
?>
<!doctype html>
<!--[if lte IE 8]><html class="msie no-js" lang="en"><![endif]-->
<!--[if gte IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>D&R Client Data Manager</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" id="vp" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
<meta name="viewport" id="vp" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height:568px)">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link href="<?=$root?>assets/images/ico/favicon.ico" rel="shortcut icon">
<link href="<?=$root?>assets/css/strap.css.php?css=<?=$css?>" rel="stylesheet">
<link href="<?=$root?>plugins/jmobile/jquery.mobile.custom.structure.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="<?=$root?>plugins/jmobile/jquery.mobile.custom.min.js"></script>
<script src="<?=$root?>assets/js/modernizr.js"></script>
<?=emptyblock('head');?>
</head>
<body>
<div class="wrap content">
	<div id="main" class="clearfix">
	<?=emptyblock('content');?>
	</div>
</div>
<!-- INT/EXT JAVASCRIPT -->
<script src="<?=$root?>assets/js/bootstrap.min.js"></script>
<script src="<?=$root?>assets/js/plugins.js"></script>
<script src="<?=$root?>assets/js/jvanadium.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
<script src="<?=$root?>assets/js/selectivizr.min.js"></script>
<![endif]-->
<?=emptyblock('script');?>
</body>
</html>