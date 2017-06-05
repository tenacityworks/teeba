<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
	</head>

	<body class="no-trans">
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="header-left clearfix">
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="/wp-content/themes/html5blank-stable/img/logo_teeba.png" alt="Worthy"></a>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="header-right clearfix">
							<div class="main-navigation animated">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">About Teeba</a></li>
												<li><a href="#about">Trade Marks</a></li>
												<li><a href="#services">Careers</a></li>
												<li><a href="#portfolio">FAQs</a></li>
												<li><a href="#clients">Contact Us</a></li>
											</ul>
										</div>

									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header end -->
