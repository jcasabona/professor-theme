<section class="card group">
	<?php 
		if(is_singular('prof_courses')){
	?>
		<?php $course_meta= prof_get_course_meta($post->ID); ?>
		<div class="right assns">
			<?php
				$assns= prof_get_course_assignments($post->ID);
				if($assns->have_posts()) : 
					echo '<h4>Upcoming Assignments</h4>';
					echo '<ol>';
					while($assns->have_posts()) :

						$assns->the_post();
						$assn_info = get_post_custom(get_the_id()); 
						$due_date= $assn_info['duedate'][0];

						if($due_date >= date('Y-m-d')) :
				?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br/>Due: <?php echo $due_date; ?></li>
				<?php
						endif;
					endwhile;
					echo '</ol>';
				endif;
				wp_reset_query();
			?>
		</div>
		<h2><?php the_title(); ?></h2>
		<ul class="course-meta">
			<li>Course ID: <?php print $course_meta['courseid']; ?></li>
			<li>Room: <?php print $course_meta['classroom']; ?></li>
			<li>Meeting Times: <?php print $course_meta['meetingtimes']; ?></li>
		</ul>
	<?php
		}else if(is_singular('prof_assignments')){
			get_sidebar('assn'); 
		}else{
			dynamic_sidebar('Sidebar2'); 
		}
	?>
</section>