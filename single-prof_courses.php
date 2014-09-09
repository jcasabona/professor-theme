<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('card group') ?> id="post-<?php the_ID(); ?>">

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>				

			</div>
		</article>

		<article class="notes card" id="profNotes">
			<h3>Lecture Notes</h3>
			<?php
				$notes= prof_get_course_notes($post->ID);
				if($notes->have_posts()) : 
					echo '<ul>';
					while($notes->have_posts()) :

						$notes->the_post();
					?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
					endwhile;
					echo '</ul>';
				endif;
				wp_reset_query();
			?>
		</article>

		<article class="assignments card" id="profAssignments">
			<h3>Assignments</h3>
			<?php
				$assns= prof_get_course_assignments($post->ID);
				if($assns->have_posts()) : 
					echo '<dl>';
					while($assns->have_posts()) :

						$assns->the_post();
						$assn_info = get_post_custom(get_the_id()); 
						$due_date= prof_convert_date($assn_info['duedate'][0]);
					?>
						<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - Due: <?php print $due_date; ?></dt>
						<dd><?php the_excerpt(); ?></dd>
				<?php
					endwhile;
					echo '</dl>';
				endif;
			?>
		</article>
	<?php endwhile; else: ?>

		<?php jlc_print_not_found(); ?>

<?php endif; ?>


<?php get_footer(); ?>
