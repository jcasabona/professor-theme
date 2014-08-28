<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<!--[if lt IE 9]> <script src="js/respond.min.js"></script> <![endif]-->
	
		<?php wp_head(); ?>
	
	</head>
	
	<body>
		<div id="wrapper" class="group">
			<!--Header - Name of Item Here-->
		<header class="group">
				<nav>
					<?php wp_nav_menu( array('menu' => 'Main' )); ?>
				</nav>

				<?php get_sidebar('header'); ?>
		</header>
		
		<div id="content" class="group contain">