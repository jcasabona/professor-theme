<section class="card group">
	<h2><?php the_title(); ?></h2>
<?php $assn_info = get_post_custom($post->ID); ?>
<ul>
	<li>Due: <?php print prof_convert_date($assn_info['duedate'][0]); ?></li>
	<li>Course: <a href="<?php print get_permalink($assn_info['course'][0]); ?>"><?php print get_the_title($assn_info['course'][0]); ?></a></li>
</ul>

<?php
	$args = array(
		'post_type' => 'attachment',
		'numberposts' => null,
		'post_status' => null,
		'post_parent' => $post->ID
	);
	 
	$attachments = get_posts($args);
	if ($attachments) {
?>
		<h3>Assignment Files</h3>
		<ul>
<?php
		foreach ($attachments as $attachment) {
			if(strpos(strtolower($attachment->post_mime_type), 'image') === false){
				print "<li><a href=\"". wp_get_attachment_url($attachment->ID) ."\">{$attachment->post_title}</a></li>";
			}
		}
?>
		</ul>
<?php
	}
?>	
</section>