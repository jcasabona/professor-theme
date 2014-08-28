<section class="card">
	<?php 
		if(is_singular('prof_courses')){
	?>
		<h2><?php the_title(); ?></h2>
		<?php $course_meta= prof_get_course_meta($post->ID); ?>
		<div class="right assns">
			<?php
				$assns= prof_get_course_assignments($post->ID);
				if($assns->have_posts()) : 
					echo '<ul>';
					while($assns->have_posts()) :
						$assns->the_post();
						$assn_info = get_post_custom($assns->ID); 
						$due_date= $assn_info['duedate'][0];
				?>
						<li><a href="<?php $assns->the_permalink(); ?>"><?php $assns->the_title(); ?> | Due: <?php echo $due_date; ?></li>
				<?php
					endwhile;
					echo '</ul>';
				endif;
			?>
		</div>
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