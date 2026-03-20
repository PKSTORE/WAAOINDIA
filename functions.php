<?php

function waaoindia_styles() {

    wp_enqueue_style(
        'waaoindia-main-style',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0',
        'all'
    );
    
}
add_action('wp_enqueue_scripts', 'waaoindia_styles');

