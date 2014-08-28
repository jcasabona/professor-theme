<?php
/*
Template Name: Home

 */

get_header(); ?>

	<?php if(get_option('prof_semester') != '') : ?>
				<h2 class="aligncenter semester">Current Semester: <?php print get_option('prof_semester'); ?></h2>
		<?php endif; ?>
		
	<?php 
		$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;

		$args= array('post_type' => array('post','prof_assignments'),
				'posts_per_page' => 5,
				'page' => $paged
			);
		$query= new WP_Query($args);
		if($query->have_posts()) : ?>
		<?php while($query->have_posts()) : 

			$query->the_post();
		?>
				<article class="group card <?php jlc_print_slugs(get_the_category(), $post->post_type); ?>">
					<header class="group">
						<span class="right" data-info="<?php print $post->post_type; ?> label"><?php print strtoupper($post->post_type); ?> <?php the_category(", "); ?></span>
						<h3><a href="<?php the_permalink(); ?>" title="<?php print esc_attr(get_the_title()); ?>"><?php the_title(); ?></a></h3>
					</header>
					<p><?php the_excerpt(); ?></p>
					<p class="right">
						<?php 
							if(prof_is_assn($post->post_type)){
								$assn_info = get_post_custom($post->ID);
								echo "Due: " . $assn_info['duedate'][0];
							}else{
								echo "Posted: ";
								the_date('m/d/Y'); 
							}
						?>
					</p>
				</article>
		<?php endwhile; ?>

		<?php jlc_print_post_nav('Older', 'Newer'); ?>


	<?php else : ?>

		<?php jlc_print_not_found(); ?>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
