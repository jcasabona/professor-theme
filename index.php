<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="group card <?php jlc_print_slugs(get_the_category(), $post->post_type); ?>">
					<header class="group">
						<span class="right" data-info="<?php print $post->post_type; ?> label"><?php print strtoupper($post->post_type); ?> <?php the_category(", "); ?></span>
						<h3><a href="<?php the_permalink(); ?>" title="<?php print esc_attr(get_the_title()); ?>"><?php the_title(); ?></a></h3>
					</header>
					<p><?php the_content(); ?></p>
					<p class="right"><?php the_date('m/d/Y'); ?></p>
				</article>
	<?php endwhile; else: ?>

		<?php jlc_print_not_found(); ?>

<?php endif; ?>



		<?php get_sidebar(); ?>


<?php get_footer(); ?>
