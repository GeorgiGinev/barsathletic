<?php
function ba_home_basic($wp_home_customize)
{
    $wp_home_customize->add_section('home_basic_section', array(
        'panel' => 'home_panel',
        'title' => __('Basic Settings'),
        'priority' => 400,
    ));
}

add_action('customize_register', 'ba_home_basic');

include_once ('homepage-display.php');