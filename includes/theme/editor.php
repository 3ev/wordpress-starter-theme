<?php

//format the RTE to mimic the front end by including some css
function tevCustomEditor() {
    add_editor_style( 'css/editor.css' );
}

add_action('after_setup_theme', 'tevCustomEditor');


//add custom style options to the RTE
add_filter('mce_buttons_2', 'tevAddButton');
add_filter('tiny_mce_before_init', 'tevAddEditorStyles');

function tevAddButton( $buttons ) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}

function tevAddEditorStyles($settings) {
	$style_formats = array(
		array('title' => 'Introduction Text', 
		      'block' => 'p', 
		      'classes' => 'intro-text'),
	);
	$settings['style_formats'] = json_encode($style_formats);

	return $settings;
}
