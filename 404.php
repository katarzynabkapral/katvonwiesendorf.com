<?php
/**
 * The template for displaying 404 pages (Not Found).
*
 */
 
get_header(); ?>
 
<div class="container">
  <div class="col-md-10" id="blogi">
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <article id="post-0" class="post error404 not-found">
                <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'Oops! That page cannot be found.', 'shape' ); ?></h1><br>
                </header><!-- .entry-header -->
 
                <div class="entry-content">
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'shape' ); ?></p>
 
                    <?php get_search_form(); ?>
 
                    
 
                    
                    
 
                </div><!-- .entry-content -->
            </article><!-- #post-0 .post .error404 .not-found -->
 
        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
</div>
<div class="col-md-2" id="sidebar"> <!-- WIDGETS SIDEBAR AREA -->
<h1> MENU </h1>
 	<?php if ( dynamic_sidebar('central') ) : else : endif; ?>

	<?php
get_sidebar(); ?>


	

</div>
</div>
 
<?php get_footer(); ?>