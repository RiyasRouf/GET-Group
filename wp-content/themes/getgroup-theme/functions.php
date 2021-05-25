<?php
/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

/** 
 * Include primary navigation menu
 */
function getgroup_nav_init() {
	register_nav_menus( array(
		'menu-1' => 'Primary Menu',
	) );
}
add_action( 'init', 'getgroup_nav_init' );

/**
 * Register widget area.
 *
 */
function getgroup_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'getgroup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function getgroup_scripts() {
	wp_enqueue_style( 'getgroup-style', get_stylesheet_uri() );
	wp_enqueue_style( 'getgroup-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_script( 'getgroup-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'getgroup_scripts' );

function getgroup_create_post_custom_post() {
	register_post_type('news', 
		array(
		'labels' => array(
	    'name'               => _x( 'News', 'post type general name' ),
	    'singular_name'      => _x( 'news', 'post type singular name' ),
	    'add_new'            => _x( 'Add New News', 'book' ),
	    'add_new_item'       => __( 'Add New News' ),
	    'edit_item'          => __( 'Edit News' ),
	    'new_item'           => __( 'New News' ),
	    'all_items'          => __( 'All News' ),
	    'view_item'          => __( 'View News' ),
	    'search_items'       => __( 'Search News' ),
	    'not_found'          => __( 'No News found' ),
	    'not_found_in_trash' => __( 'No News found in the Trash' ),
	    'menu_name'          => 'News'
	  ),
		'public'       => true,
		'hierarchical' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
		), 
		'taxonomies'   => array(
				'post_tag',
				'category',
		) 
	));
}
add_action('init', 'getgroup_create_post_custom_post'); // Add our work type