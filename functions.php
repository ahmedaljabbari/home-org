<?php

require get_theme_file_path('/api/custom-api.php');

function mySiteScriptFiles() {
    wp_enqueue_style( 'coreCSSfile', get_stylesheet_uri(), NULL, microtime() );
    wp_enqueue_style( 'expenseCSSfile', get_theme_file_uri('/css/expenses.css'), NULL, microtime() );
    wp_enqueue_script( 'myMainJSfile', get_theme_file_uri('/js/main.js'), array('jquery'), microtime(), TRUE );
}

add_action('wp_enqueue_scripts', 'mySiteScriptFiles');

function mySiteAddedFeatures() {
    add_theme_support( 'post-thumbnails' );
    //add_image_size( name, width, height, crop )
}

add_action('after_setup_theme', 'mySiteAddedFeatures');

