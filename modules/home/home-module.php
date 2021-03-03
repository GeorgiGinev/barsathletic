<?php

function ba_home_panel($wp_home_customize) {
    $wp_home_customize->add_panel( 'home_panel', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Home Settings',
        'description'    => 'Home page settings',
    ) );
}

add_action('customize_register', 'ba_home_panel');

// Sub modules
include_once ('video-section/module.php');
include_once ('text-section/module.php');
include_once ('basic-section/module.php');
include_once ('button-section/module.php');