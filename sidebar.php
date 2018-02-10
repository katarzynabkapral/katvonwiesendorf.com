<?php
/**
 * The sidebar containing the main widget area
 *
 */ 



	 if ( is_active_sidebar( 'content' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'central' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

