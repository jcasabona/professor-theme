<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
		<aside class="group">
		
			<?php	/* Widgetized Area */
					if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar') ) : ?>

            <!--BEGIN #widget-search-->
          

            			<?php endif; /* (!function_exists('dynamic_sidebar') */ ?>
		<!--END #secondary .aside-->
		</aside>
