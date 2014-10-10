<?php
/*
 *
 *  Add CSS files here. Nothing else.
 *
 */

add_action('wp_enqueue_scripts', 'tevRegisterStyles');
add_action('wp_enqueue_scripts', 'tevLoadStyles');

function tevRegisterStyles() {
    wp_register_style('normalize', get_template_directory_uri() . '/css/base.css', '', '1.0', 'all');
}

function tevLoadStyles() {
    wp_enqueue_style('base');
}
