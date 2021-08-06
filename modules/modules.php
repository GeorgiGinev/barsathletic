<?php

include_once('base/base.php');
include_once('home/home-module.php');
// include_once('auth/auth-module.php');
include_once('widgets/widgets-module.php');
include_once('tgm/tgm-module.php');


/**
 * Theme Functions
 */
function theme_name_scripts()
{
    wp_enqueue_style('barsathletic', get_template_directory_uri().'/style.css', '', '1.0.0' );
    wp_enqueue_script('barsathletic', get_template_directory_uri().'/public/js/app.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');