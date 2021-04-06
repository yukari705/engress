<?php
function my_enqueue_scripts() {
    wp_enqueue_style(
        'style',
        get_template_directory_uri().'/css/style.css',
        array()
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
