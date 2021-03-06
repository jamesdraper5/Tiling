<?php
session_start();
$urlPath = $_SERVER['REQUEST_URI'];
$currentPage = "";

$navItems = array(
    'Home'   => '/',
	'Work'   => '/tiling-work',
	'Contact' => '/contact',
	'About'  => '/about'
);

switch ( $urlPath ) {
	case "/":
		$currentPage = "home";
		break;
	case "/tiling-work":
		$currentPage = "work";
		break;
	case "/contact":
		$currentPage = "contact";
		break;
	case "/about":
		$currentPage = "about";
		break;
	default:
		break;
}

?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/GeneralContractor">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>West Cork Tiling | Quality, Affordable Tiler in West Cork</title>
		<meta name="google-site-verification" content="HR_ln3nc9XQTBDMcUra_ToNBNwYcYUOyyELsLfyXJlY" />
		<meta name="keywords" content="tiling Cork, tiling West Cork, cheap tiling Cork, quality tiling Cork, budget tiling West Cork">
		<meta name="description" content="West Cork Tiling offers high quality tiling in the West Cork area at an affordable price. If you need a tiler in the West Cork area then look no further.">
		<meta itemprop="name" content="West Cork Tiling">
		<meta itemprop="description" content="West Cork Tiling offers high quality tiling in the West Cork area at an affordable price. If you need a tiler in the West Cork area then look no further.">
		<meta itemprop="url" content="http://www.westcorktiling.com">
		<meta itemprop="address" content="Ardralla, Church Cross, Skibbereen. Co. Cork">
		<meta itemprop="geo" content="51.536850, -9.338330">
		<meta itemprop="photo" content="http://www.westcorktiling.com/img/kitchen-tiling-4.jpg">

		<!-- Twitter Card meta tags -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@jamesdraper5">
		<meta name="twitter:creator" content="@jamesdraper5">
		<meta name="twitter:title" content="Parade of Fans for Houston’s Funeral">
		<meta name="twitter:description" content="West Cork Tiling - quality affordable tiling in West Cork">
		<meta name="twitter:image" content="http://www.westcorktiling.com/img/kitchen-tiling-4.jpg">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400|Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/reset.css" media="screen" />
		<link rel="stylesheet" href="css/text.css" media="screen" />

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet" href="bower_components/photo.swipe/dist/photoswipe.css" />
		<link rel="stylesheet" href="bower_components/photo.swipe/dist/default-skin/default-skin.css" />
		<link rel="stylesheet" href="css/style.css" />


		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-29737013-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>



		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 	<body class="<?php echo $currentPage ?>">

 	<?php include 'nav.inc.php'; ?>