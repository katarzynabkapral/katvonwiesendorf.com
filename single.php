<?php get_header(); ?>


<div class="container">
  <div class="col-md-10" id="blogi">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<div class="post post-single" id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?></a></h2>

			<div class="entry">

				<?php the_content(); ?>


				<p class="postmetadata">
<br />




<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> 
<?php edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>
<br>
			</div>
			<div class="comments-template">
<?php comments_template(); ?>
</div>
		</div>

	<?php endwhile; ?>

		


	<?php endif; ?>

</div>


<div class="col-md-2" id="sidebar"> <!-- WIDGETS SIDEBAR AREA -->

 	<?php if ( dynamic_sidebar('central') ) : else : endif; ?>

	<?php
get_sidebar(); ?>


	

</div>
</div>
<hr>
<?php get_footer(); ?>