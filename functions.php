<?php
/**
* Enqueue scripts and styles.
*/
function ncdj_enqueue_styles() {
	$parent_style = 'ASU-Web-Standards-Wordpress-Theme';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'ncdj-child-theme',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'ncdj_enqueue_styles' );

function create_posttype() {
	register_post_type( 'blog',
	  array(
		'labels' => array(
		  'name' => __( 'Blog' ),
		  'singular_name' => __( 'Blog' ),
		  'menu_name'           => __('Blog'),
		  'parent_item_colon'   => __('Parent Blog'),
		  'all_items'           => __('All Blog'),
		  'view_item'           => __('View Blog'),
		  'add_new_item'        => __('Add New Blog'),
		  'add_new'             => __('Add New'),
		  'edit_item'           => __('Edit Blog'),
		  'update_item'         => __('Update Blog'),
		  'search_items'        => __('Search Blog'),
		  'not_found'           => __('Not found'),
		  'not_found_in_trash'  => __('Not found in trash'),
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug'=>'/blog/'.date('Y').'/'.date('m'),'with_front'=>true),
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail','wpcom-markdown', 'revisions'),
		'taxonomies'          => array('category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post'
	  )
	);
  }
  add_action( 'init', 'create_posttype' );

register_sidebar(
	array(
	'name'          => __( 'sidebar-contest', 'ncdj-child-theme' ),
	'id'            => 'contest',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	)
);

register_sidebar(
	array(
	'name'          => __( 'sidebar-news', 'ncdj-child-theme' ),
	'id'            => 'news',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	)
);

register_sidebar(
	array(
	'name'          => __( 'sidebar-resources', 'ncdj-child-theme' ),
	'id'            => 'resources',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	)
);

register_sidebar(
	array(
	'name'          => __( 'sidebar-about', 'ncdj-child-theme' ),
	'id'            => 'about',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	)
);


register_sidebar(
	array(
	'name'          => __( 'sidebar-styleguide', 'ncdj-child-theme' ),
	'id'            => 'styleguide',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	)
);
