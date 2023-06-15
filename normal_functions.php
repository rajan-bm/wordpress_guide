<?php
// Add theme support for featured images, and add a few custom image sizes
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'featured-image-large', 640, 294, true );
add_image_size( 'featured-image-small', 200, 129, true );
add_image_size( 'featured-image-tiny', 124, 80, true );

// Enqueue theme JavaScripts and CSS styles
function wpshout_scripts( ) {
    // Enqueue JS that gives the search box a default value
    wp_enqueue_script( 
        'search-box-value',
        get_stylesheet_directory_uri() . '/js/search-box-value.js',
        array( 'jquery' )
    );

    // Enqueue JS that sets a dynamic page minimum height
    wp_enqueue_script( 
        'page-min-height',
        get_stylesheet_directory_uri() . '/js/page-min-height.js',
        array( 'jquery' )
    );

    // Enqueue main theme stylesheet
    wp_enqueue_style( 
        'wpshout-style',
        get_stylesheet_uri()
    );
}
add_action( 'wp_enqueue_scripts', 'wpshout_scripts' );

// Register main navigation menu
function wpshout_register_menu( ) {
    register_nav_menu( 'main-nav', 'Main Nav' );
}
add_action( 'init', 'wpshout_register_menu' );
?>
