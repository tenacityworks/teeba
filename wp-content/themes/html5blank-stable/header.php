<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css" />
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/cbpAnimatedHeader.min.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body class="wrapper"><?php //body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<div class="cbp-af-header">
				<div class="cbp-af-inner">
				<!-- logo -->
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_teeba.png" alt="Logo" class="logo-img"></a>
					<nav>
						<a href="#">About Teeba</a>
						<a href="#">Trade Marks</a>
						<a href="#">Careers</a>
						<a href="#">FAQs</a>
						<a href="#">Contact Us</a>
					</nav>
				</div>
			</div>
			<!-- header -->
			
<!-- 			<header class="header clear cbp-af-header" role="banner">
				<div class="cbp-af-inner">

					<!-- logo -->
					<!-- <div class="logo">
						<a href="<?php //echo home_url(); ?>"> -->
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<!-- 	<img src="<?php //echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div> -->
					<!-- /logo -->

					<!-- nav -->
					<!-- <nav class="nav" role="navigation">
						<?php //html5blank_nav(); ?>
					</nav> -->
					<!-- /nav -->
			<!-- 	</div>

			</header> -->
			<!-- /header -->
