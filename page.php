<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2 class="aligncenter"><?php the_title(); ?></h2>

	<article class="card">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	</article>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>

