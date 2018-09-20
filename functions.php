<?php

//Nav menu
function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

// My custom post type function
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
// Hooking up function to theme setup
add_action( 'init', 'create_posttype' );

//Add featured image support
function add_featured_image() {
    //set_post_thumbnail_size(200, 200);
    add_theme_support( 'post-thumbnails' );
    add_image_size('post-image', 525,295, array('left','top'));
    add_image_size('single-image', 1000,500, array('left','top'));
}

add_action('after_setup_theme', 'add_featured_image');

//Customize excerpt word count length
function custom_excerpt_length() {
    return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');


