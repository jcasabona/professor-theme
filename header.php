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

				<section class="card">
					<?php 
						if(is_singular('prof_courses')){
					?>
						<h2><?php the_title(); ?></h2>
						<?php $course_meta= prof_get_course_meta($post->ID); ?>
						<ul class="course-meta">
							<li>Course ID: <?php print $course_meta['courseid']; ?></li>
							<li>Room: <?php print $course_meta['classroom']; ?></li>
							<li>Meeting Times: <?php print $course_meta['meetingtimes']; ?></li>
						</ul>
					<?php
						}else{
							dynamic_sidebar('Sidebar2'); 
						}
					?>
				</section>
		</header>
		
		<div id="content" class="group contain">