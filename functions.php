<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'central widget area',
        'id'            => 'central',
        'before_widget' => '<div class="central">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

 register_sidebar( array(
        'name'          => __( 'Content Sidebar' ),
        'id'            => 'content',
        'description'   => __( 'content' ),
        'before_widget' => '<div class="maincontent">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Content 2 Sidebar' ),
        'id'            => 'content2',
        'description'   => __( 'content2' ),
        'before_widget' => '<div class="maincontent2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' ); ?>
<?php
if ( ! function_exists('custom_theme_features') ) {
// Register Theme Features
function custom_theme_features()  {

    // Add theme support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for Post Formats
    add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

    // Add theme support for Custom Background
    $background_args = array(
        'default-color'          => 'white',
        'default-image'          => '',
        'default-repeat'         => '',
        'default-position-x'     => '',
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-background', $background_args );

    // Add theme support for Custom Header
    $header_args = array(
        'default-image'          => '',
        'width'                  => 0,
        'height'                 => 0,
        'flex-width'             => false,
        'flex-height'            => false,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => true,
        'default-text-color'     => 'black',
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-header', $header_args );

    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );

    // Add theme support for custom CSS in the TinyMCE visual editor
    add_editor_style();

    // Add theme support for Translation
    load_theme_textdomain( 'domena_tekstowa', get_template_directory() . '/language' );
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );

}
?>
<?php
// THIS LINKS THE THUMBNAIL TO THE POST PERMALINK

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {

    $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';

    return $html;
}
?>
<?php 

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>
<?php
function kvwblog_theme_js() {
wp_enqueue_script('jquery');
//master slider js
wp_enqueue_script('jquery-1.10.2', get_template_directory_uri() .'/js/jquery-1.10.2.min.js','','', false);
wp_enqueue_script('select', get_template_directory_uri() .'/js/select.js', true);
wp_enqueue_script('jquery.easing.min', get_template_directory_uri() .'/js/jquery.easing.min.js','','', false);
wp_enqueue_script('masterslider.flickr.min', get_template_directory_uri() .'/js/masterslider.flickr.min.js','','', false);
wp_enqueue_script('masterslider', get_template_directory_uri() .'/js/masterslider.js','','', false);
wp_enqueue_script('masterlider.map', get_template_directory_uri() .'/js/masterlider.map','','', false);
wp_enqueue_script('masterslider.min', get_template_directory_uri() .'/js/masterslider.min.js','','', false);
wp_enqueue_script('jquery.ui.totop', get_template_directory_uri() .'/js/jquery.ui.totop.js', false);
wp_enqueue_script('public', get_template_directory_uri() .'/js/public.js', false);

}
?>
