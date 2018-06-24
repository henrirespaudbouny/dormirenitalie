<?php

 // Bootstrapping theme
require_once __DIR__ . '/app/bootstrap.php';

function wpm_custom_post_type() {
	$labels = array(
		'name'                => _x( 'Appartments', 'Post Type General Name'),
		'singular_name'       => _x( 'Appartment', 'Post Type Singular Name'),
		'menu_name'           => __( 'Appartments'),
		'all_items'           => __( 'Tous les Appartements'),
		'view_item'           => __( 'Voir les Appartements'),
		'add_new_item'        => __( 'Ajouter un nouvel appartement'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer'),
		'update_item'         => __( 'Modifier'),
		'search_items'        => __( 'Rechercher un appartement'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	$args = array(
		'label'               => __( 'Appartments'),
		'description'         => __( 'Fiches Appartements'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
        'rewrite'             => array( 'slug' => 'appartments'),
        'menu_icon'           => 'dashicons-admin-multisite',
        'publicly_queryable'  => true

	);
	register_post_type( 'appartments', $args );
}
add_action( 'init', 'wpm_custom_post_type', 0 );