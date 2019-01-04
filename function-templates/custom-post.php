<?php
/*****************************
*  register custom posts
***********************************/
add_action( 'init', 'event_post_init' );

function event_post_init() {
    $labels = array(
        'name'               => _x( 'Event', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Event', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Event', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add a new event', 'mycustompost-name', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add a new event', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New event', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit event', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View event', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All events', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search events', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent event:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No events found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No events found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'show_in_rest'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'thumbnail', 'editor', 'comments', 'page-attributes' )
    );

    flush_rewrite_rules( true );

    register_post_type( 'event', $args );
}

/****************************************************************************
 *register custom exhibition - this is for individual  exhibitions
 ****************************************************************************/

add_action( 'init', 'exhibition_post_init' );

function exhibition_post_init() {
    $labels = array(
        'name'               => _x( 'Exhibitions', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Exhibition', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Exhibitions', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Exhibitions', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add a new exhibition', 'mycustompost-name', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add a new exhibition', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New exhibition', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit exhibition', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View exhibition', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All exhibitions', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search exhibitions', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent exhibition:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No exhibitions found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No exhibitions found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'show_in_rest'       => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'exhibitions' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 2,
        'supports'           => array( 'title', 'thumbnail', 'editor', 'page-attributes' )
    );

    flush_rewrite_rules( true );

    register_post_type( 'exhibition', $args );
}


/****************************************************************************
 *register custom story - this is for individual stories
 ****************************************************************************/

add_action( 'init', 'story_post_init' );

function story_post_init() {
    $labels = array(
        'name'               => _x( 'Stories', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Story', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Stories', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Story', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add a new story', 'mycustompost-name', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add a new story', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New story', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit story', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View story', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All stories', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search stories', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent story:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No stories found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No stories found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'stories' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'thumbnail', 'editor' )
    );

    flush_rewrite_rules( true );

    register_post_type( 'story', $args );
}

//taxonomy for stories

add_action( 'init', 'create_story_taxonomy', 0);

//create function to add custom taxonomies
function create_story_taxonomy() {

	//create taxonomy name
	$taxonomy = 'story-category';
	//set post type taxonomy will be attached to
	$object_type = 'story';
	//names associated with taxonomy
	$labels = array (
		'name'				=> 'Category: stories',
		'singular-name' 	=> 'Category: story',
		'search_items'		=> 'Search all story categories',
		'all_items'			=> 'All story categories',
		'parent_item'		=> 'Parent story category',
		'parent_item_colon'	=> 'Parent story category:',
		'update_item'		=> 'Update story categories',
		'edit_item'			=> 'Edit story categories',
		'add_new_item'		=> 'Add a new story category',
		'new_item_name'		=> 'New  story category',
		'menu_name'			=> 'story categories'
		);

	//define arguments -$args- to be used

	$args = array (
		'labels'			=>	$labels,
		'hierarchical'		=>	true,
		'show_ui'			=>	true,
		'show_in_nav_menus'	=>	true,
		'public'			=>	true,
		'show_admin_column'	=>	true,
		'query_var'			=>	true,
		'rewrite'			=> 	array ('slug' => 'story-category')

		);

	flush_rewrite_rules( true );

	//call the registered taxonomy
	register_taxonomy($taxonomy, $object_type, $args);

}

/****************************************************************************
 *register custom news post - this is for individual  news items
 ****************************************************************************/

add_action( 'init', 'news_post_init' );

function news_post_init() {
    $labels = array(
        'name'               => _x( 'News', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'News', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'News', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'News', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add a new news article', 'mycustompost-name', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add a new news article', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New news article', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit news article', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View news article', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All news articles', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search news articles', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent news article:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No news articles found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No news articles found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'show_in_rest'       => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'museum-news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 9,
        'supports'           => array( 'title', 'excerpt', 'thumbnail', 'editor', 'page-attributes' )
    );

    flush_rewrite_rules( true );

    register_post_type( 'news', $args );
}

/****************************************************************************
 *register custom image post - this is for image slideshows
 ****************************************************************************/
add_action( 'init', 'imagetemplate_init' );

function imagetemplate_init() {
    $labels = array(
        'name'               => _x( 'Chesham images', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Chesham image', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Chesham images', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Chesham images', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add a new Chesham image', 'mycustompost-name', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add a new Chesham image', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Chesham image', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Chesham image', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Chesham image', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Chesham images', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Chesham images', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Chesham image:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Chesham images found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Chesham images found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'show_in_rest'       => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'chesham-images' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 7,
        'supports'           => array( 'title', 'thumbnail', 'editor', 'page-attributes' )
    );

    flush_rewrite_rules( true );

    register_post_type( 'imagetemplate', $args );
}

//taxonomy for photos

add_action( 'init', 'create_photo_taxonomy', 0);

//create function to add custom taxonomies
function create_photo_taxonomy() {

	//create taxonomy name
	$taxonomy = 'photo-category';
	//set post type taxonomy will be attached to
	$object_type = 'imagetemplate';
	//names associated with taxonomy
	$labels = array (
		'name'				=> 'Category: photos',
		'singular-name' 	=> 'Category: photo',
		'search_items'		=> 'Search all photo categories',
		'all_items'			=> 'All photo categories',
		'parent_item'		=> 'Parent photo category',
		'parent_item_colon'	=> 'Parent photo category:',
		'update_item'		=> 'Update photo categories',
		'edit_item'			=> 'Edit photo categories',
		'add_new_item'		=> 'Add a new photo category',
		'new_item_name'		=> 'New  photo category',
		'menu_name'			=> 'photo categories'
		);

	//define arguments -$args- to be used

	$args = array (
		'labels'			=>	$labels,
		'hierarchical'		=>	true,
		'show_ui'			=>	true,
		'show_in_nav_menus'	=>	true,
		'public'			=>	true,
		'show_admin_column'	=>	true,
		'query_var'			=>	true,
		'rewrite'			=> 	array ('slug' => 'chesham-photos')

		);

	flush_rewrite_rules( true );

	//call the registered taxonomy
	register_taxonomy($taxonomy, $object_type, $args);

}

?>
