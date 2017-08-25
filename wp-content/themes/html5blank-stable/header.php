<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
	</head>

	<body class="no-trans">
		<div class="container">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">

					<div class="col-md-2">
							<!-- logo -->
						<div class="logo smooth-scroll">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/teeba_logo.png" alt="Logo" class="logo-img">
							</a>
						</div>
							<!-- /logo -->
					</div>
					<div class="col-md-10">
						<div class="main-navigation animated smooth-scroll positionswitch"><div class="navversion"><a>العربية  |  English</a></div>
					
			<!-- 			<?php //get_search_form(); ?> -->
							<!-- nav -->
							<nav class="nav " role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<?php get_search_form(); ?>
							<!-- /nav -->
					<!-- 	<form id="search" action="#" method="post">
							<div id="label"><label for="search-terms" id="search-label">search</label></div>
							<div id="input"><input type="text" name="search-terms" id="search-terms" placeholder="Enter search terms..."></div>
						</form> -->
						</div>
					</div>
				</div>
			</div>
			<div class="breadcrumbs bcpos" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
				bcn_display();
				}?>
			</div>
		</header>
		<!-- /header -->
