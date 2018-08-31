<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="ekspresi">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>ekspresi</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo asset_url();?>frontend/img/favicon.png">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>frontend/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>frontend/css/bootstrap-extra-margin-padding.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>frontend/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>frontend/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>frontend/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo asset_url();?>frontend/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>frontend/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a <a href="<?php echo base_url();?>">
							<img class="logo" src="<?php echo asset_url();?>frontend/img/logo/logo.png" alt="logo">
							<img class="logo-alt" src="<?php echo asset_url();?>frontend/img/logo/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url();?>">/Ekspresi/</a></li>
					<li><a href="<?php echo base_url();?>blog">/Artikel/</a></li>
					<li><a href="<?php echo base_url();?>register">/Bergabung/</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

	</header>
	<!-- /Header -->