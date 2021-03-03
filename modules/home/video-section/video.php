<?php
function ba_home_video($wp_home_customize) {
    $wp_home_customize->add_setting('home_video', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_home_customize->add_control(new WP_Customize_Media_Control($wp_home_customize, 'home_video', array(
        'section' => 'static_front_page',
        'label' => 'Video',
        'mime_type' => 'video'
    )));
}

function get_home_video() {
    $id = get_theme_mod('home_video');

    if($id == 0) {
        return false;
    }

    return wp_get_attachment_url($id);
}

add_action('customize_register', 'ba_home_video');

