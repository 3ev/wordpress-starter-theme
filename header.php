<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" />
    
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-57x57-precomposed.png">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav><?php wp_nav_menu(array("theme_location" => "primary-nav", "container" => "")); ?></nav>
    </header>