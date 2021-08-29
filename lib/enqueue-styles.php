<?php


function mmdigital_assets() {
    wp_enqueue_style( 'mmdigital-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'mmdigital_assets');


function mmdigital_admin_assets() {
    wp_enqueue_style( 'mmdigital-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all');
}

add_action('admin_enqueue_scripts', 'mmdigital_assets');

?>