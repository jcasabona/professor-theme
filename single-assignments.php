<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry group">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>				
				
			</div>

			<section class="comments">
			<?php
				if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
			?>
		</section>
		</article>
	<?php endwhile; else: ?>

		<?php jlc_print_not_found(); ?>

<?php endif; ?>



		<?php get_sidebar('assn'); ?>


<?php get_footer(); ?>
