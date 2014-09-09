<section class="card group">
	<h2><?php the_title(); ?></h2>
	<?php $notes_info = get_post_custom($post->ID); ?>
	<p><strong>Course:</strong> <a href="<?php print get_permalink($notes_info['course'][0]); ?>"><?php print get_the_title($notes_info['course'][0]); ?></a></p>
</section>