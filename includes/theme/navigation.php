<?php

$menus = array('primary-nav' => 'Primary Navigation',
               'social-links' => 'Social Links',
	           'footer-nav' => 'Footer Menu');

if (function_exists('register_nav_menus')) {
	register_nav_menus($menus);
}

foreach($menus as $slug => $name) {
    if (!wp_get_nav_menu_object($name)) {
        //Create the menu
        $menuId = wp_create_nav_menu($name);
        
        //Update the menu locations
        $locations = get_theme_mod('nav_menu_locations');
        $locations[$slug] = $menuId;
        set_theme_mod('nav_menu_locations', $locations);
    }
}