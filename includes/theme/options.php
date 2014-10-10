<?php

//thumbanil/featured image support
add_theme_support('post-thumbnails');

//Add thumbnail image sizes for blog
add_image_size('listing', 180, 150);
add_image_size('post', 470, 360);

//Remove [...] from blog excerpts.
function excerptMore() {
	return '&hellip;';
}
add_filter('excerpt_more', 'excerptMore');

//Allow editors (one role down from admin) to edit the menus
$roleObject = get_role( 'editor' );
if (!$roleObject->has_cap( 'edit_theme_options' ) ) {
    $roleObject->add_cap( 'edit_theme_options' );
}