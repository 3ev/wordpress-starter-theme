<?php
/*
 *
 *  Add javascript files here. Nothing else.
 *
 */

add_action('wp_enqueue_scripts', 'tevRegisterJavascript');
add_action('wp_enqueue_scripts', 'tevLoadJavascript');

function tevRegisterJavascript() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
    wp_register_script('tevbase', get_template_directory_uri() . '/js/base.js', array('jquery'), '1.0', false);   
}

function tevLoadJavascript() {
    wp_enqueue_script('tevbase');
}