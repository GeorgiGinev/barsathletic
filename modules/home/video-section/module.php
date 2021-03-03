<?php
function bs_home_video_section($wp_home_customize) {
    // Redefine default home settings section
    $wp_home_customize->get_section('static_front_page')->panel = 'home_panel';
    $wp_home_customize->get_section('static_front_page')->title = __('Video Settings');
    $wp_home_customize->get_section('static_front_page')->description = __('Video Settings');
    $wp_home_customize->get_section('static_front_page')->priority = 100;
}

add_action('customize_register', 'bs_home_video_section');

include_once('video.php');