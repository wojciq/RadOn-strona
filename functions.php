<?php
function radon_theme_setup() {
    register_nav_menus(array(
        'primary' => 'Menu Główne'
    ));
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'radon_theme_setup');

function radon_enqueue_fontawesome() {
    wp_enqueue_style(
        'radon-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );
}
add_action('wp_enqueue_scripts', 'radon_enqueue_fontawesome');