<?php
/**
 * Add all of this code the functions.php
 */


/**
 * Register the taxonomy of athletes.
 * @return void
 */
function altrablog_register_athlete_taxonomy() {

	register_taxonomy( 'altrablog_register_athlete_taxonomy', array( 'post' ), array(
			'hierarchical'      => false,
			'public'            => true,
			'show_in_nav_menus' => true,
			'show_ui'           => true,
			'show_admin_column' => false,
			'query_var'         => true,
			'rewrite'           => true,
			'capabilities'      => array(
				'manage_terms'  => 'edit_posts',
				'edit_terms'    => 'edit_posts',
				'delete_terms'  => 'edit_posts',
				'assign_terms'  => 'edit_posts'
			),
			'labels'            => array(
				'name'                       => __( 'Athletes', 'altra' ),
				'singular_name'              => _x( 'Athlete', 'taxonomy general name', 'altra' ),
				'search_items'               => __( 'Search athletes', 'altra' ),
				'popular_items'              => __( 'Popular athletes', 'altra' ),
				'all_items'                  => __( 'All athletes', 'altra' ),
				'parent_item'                => __( 'Parent athlete', 'altra' ),
				'parent_item_colon'          => __( 'Parent athlete:', 'altra' ),
				'edit_item'                  => __( 'Edit athlete', 'altra' ),
				'update_item'                => __( 'Update athlete', 'altra' ),
				'add_new_item'               => __( 'New athlete', 'altra' ),
				'new_item_name'              => __( 'New athlete', 'altra' ),
				'separate_items_with_commas' => __( 'Athletes separated by comma', 'altra' ),
				'add_or_remove_items'        => __( 'Add or remove athletes', 'altra' ),
				'choose_from_most_used'      => __( 'Choose from the most used athletes', 'altra' ),
				'menu_name'                  => __( 'Athletes', 'altra' ),
			),
		)
	);
}

// On init, register the taxonomy.
add_action( 'init', 'altrablog_register_athlete_taxonomy' );
