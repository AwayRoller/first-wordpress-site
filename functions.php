<?php


function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Our custom post type function
function create_posttype() {

    register_post_type( 'beer',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Beers' ),
                'singular_name' => __( 'Beer' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'beers'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// Show posts of 'post', 'page' and 'beer' post types on home page
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'beer' ) );
    return $query;
}

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

add_theme_support( 'post-thumbnails' );


