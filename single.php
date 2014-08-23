<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('card') ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>				

				<p class="postmetadata alt">Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> | <b><?php the_category(', ') ?></b> | <?php the_tags( 'Tags: ', ', ', '|'); ?></p>
			</div>
		</article>
	<?php endwhile; else: ?>

		<?php jlc_print_not_found(); ?>

<?php endif; ?>



		<?php get_sidebar(); ?>


<?php get_footer(); ?>
