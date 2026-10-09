<?php
function radon_theme_setup() {
    register_nav_menus(array(
        'primary' => 'Menu Główne'
    ));
}
add_action('after_setup_theme', 'radon_theme_setup');