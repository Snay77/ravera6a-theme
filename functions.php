<?php
include get_template_directory().'/includes/theme-setup.php';


function ravera_registrer_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'ravera_registrer_assets');