<?php


function identitydental_assets() {
    wp_enqueue_style( 'identitydental-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'identitydental_assets');


function identitydental_admin_assets() {
    wp_enqueue_style( 'identitydental-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all');
}

add_action('admin_enqueue_scripts', 'identitydental_assets');

?>