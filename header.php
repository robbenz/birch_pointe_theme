<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_Class
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>


	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'b2w_theme' ); ?></a>

	<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">

		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">

			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">


				<div class="container">
					<div class="row">
					<!-- <div class="navbar-header"> -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


						<div class="navbar-collapse collapse">

							<div class="col-sm-6">
							<ul class="nav navbar-nav navbar-left">
								<li><a class="menu-item menu-item-20">About Us</a></li>
								<li><a class="menu-item menu-item-21">Score Card</a></li>
								<li><a class="menu-item menu-item-25">Course Features</a></li>
							</ul>
						</div>


						<div class="col-sm-6">
							<ul class="nav navbar-nav navbar-right">
								<li><a class="menu-item menu-item-22">Photo Gallery</a></li>
								<li><a class="menu-item menu-item-23">Greens Fees</a></li>
								<li><a class="menu-item menu-item-24">Course Location</a></li>
							</ul>
						</div>
						</div>



					<!-- </div> -->

				</div>
			</div>

		</div>



		<div style="background-color:#464444;" class="container">
			<div class="row">
				<div class="col-sm-2 col-sm-offset-5">
					<div id="logo_img_wrap">
						<a id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/birch_logo.png" alt="Birch Pointe Golf Club | St Helen | West Branch" class="logo">
						</a>
					</div>
				</div>
			</div>
		</div>


	</header>
