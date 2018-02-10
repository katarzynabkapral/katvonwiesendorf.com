<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="container">
	<div id="content" role="main">
<div class="col-md-10" id="archivemain" > <!-- BLOG POSTS AREA -->

	<h1><?php single_tag_title('TAG: ') ?> <?php single_month_title() ?></h1>
<br>

		 <?php if (have_posts()) : ?> 
   <?php while (have_posts()) : the_post(); ?>
     <div class="archpost">
     <h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?><small>  <?php the_time('F jS, Y') ?></small></h2></a>

<?php
// Must be inside a loop.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'medium' );
}
else {
	echo '<img src="'. get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg" />';
}
?> 

      </div>

    <?php endwhile; ?>


<?php else : ?>
  <h2 class="center">Not Found</h2>
 <p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  <?php endif; ?>

<br>

<div class="aligncenter">
		<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
<BR>	</div>	
</div>
<div class="col-md-2" id="archiveside"> <!-- WIDGETS SIDEBAR AREA -->

 	<?php if ( dynamic_sidebar('central') ) : else : endif; ?>

	<?php
get_sidebar(); ?>
		
		

	</div><!-- #content -->
</div><!-- #container -->
<br>
<hr>
<?php get_footer(); ?>