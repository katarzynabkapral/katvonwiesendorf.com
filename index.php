<?php get_header(); ?>
 <!-- BLOG CONTENT -->
<div class="container">
  <div class="col-md-10" id="blogi"> <!-- BLOG POSTS AREA -->


<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
     <div class="post" id="post-<?php the_ID(); ?>">

	  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_title(); ?></a></h2>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
	  <div class="entry">

			       <?php the_content( $more_link_text , $strip_teaser ); ?>  <br>
				<p class="postmetadata">

<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> 
<?php edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>

			</div>

		</div>

	
<?php endwhile; ?>
<br><Br>

<div class="pagin1">
		<?php next_posts_link( '« Older Posts ', 0 ); ?>
</div>
<div class="pagin2">
		<?php previous_posts_link( ' Newer Posts »' ) ?>

</div>
<?php endif; ?>
	
</div>

<div class="col-md-2" id="sidebar"> <!-- WIDGETS SIDEBAR AREA -->

 	<?php if ( dynamic_sidebar('central') ) : else : endif; ?>

	<?php
get_sidebar(); ?>


	

</div>
</div>
<br>
<hr>
<div class="footer">
<?php get_footer(); ?>
</div>