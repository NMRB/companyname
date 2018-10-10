<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<script>
	    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
	    });
    </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="hero-contain">
			<header class="container-fluid header clear" role="banner">
				<div class="row top">
					<div class="col logo align-items-center">
						<a href="<?php echo home_url(); ?>">
							<i class="zmdi zmdi-chevron-down"></i> Our Company and Sites
						</a>
					</div>
					<div class="col login align-items-center">
						<a href="#" class="location"><i class="zmdi zmdi-pin"></i>United States <i class="zmdi zmdi-chevron-down"></i></a>
						<a href="#" class="login-area">Sign In <i class="zmdi zmdi-chevron-down"></i></a>
					</div>
				</div>
				<!-- /logo -->
				<div class="row bottom">
					<div class="col-2">
						<a href="#" class="image"><img src="<?= get_template_directory_uri(); ?>/img/png/isharesblack.png" alt="Asset"/></a>
					</div>
					<div class="col-8">
						<nav class="nav" role="navigation">
							<?php nav(); ?>
						</nav>
					</div>
					<div class="col-2">
						<a href="#" class="search"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</header>
			<!-- /header -->
			<!-- section -->
			<section class="hero">
				<div class="container-fluid">
					<div class="row herocontent">
						<div class="col">
							<div class="heroareasvg">
								<?php svg('heroareasvg.svg'); ?>
							</div>
						</div>
					</div>
					<div class="row herotitle align-items-center">
						<div class="col">
							<p class="titlearea">1954 to 2050: <br>
								Shining a light on solar</p>
								<p class="contentarea">iShares explores the past present and future of solar through illuminating 7 facts</p>
							</div>
						</div>
					</div>
				</section>
		</div>
