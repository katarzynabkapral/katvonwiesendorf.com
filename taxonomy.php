<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_book_taxonomies', 0 );
function tags_cloud_taxonomies() {
// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'tagclouds', 'taxonomy general name' ),
		'singular_name'              => _x( 'takgloud', 'taxonomy singular name' ),
		'search_items'               => __( 'Search tags' ),
		'popular_items'              => __( 'Popular tags' ),
		'all_items'                  => __( 'All tags' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit tags' ),
		'update_item'                => __( 'Update tags' ),
		'add_new_item'               => __( 'Add New tag' ),
		'new_item_name'              => __( 'New Wtag' ),
		'separate_items_with_commas' => __( 'Separate tags with commas' ),
		'add_or_remove_items'        => __( 'Add or remove tags' ),
		'choose_from_most_used'      => __( 'Choose from the most used tags' ),
		'not_found'                  => __( 'No tags found.' ),
		'menu_name'                  => __( 'Tags' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'writer' ),
	);

	register_taxonomy( 'tags', 'cloud', $args );
}
?>