<?php
function ba_home_title($wp_home_customize) {
    $wp_home_customize->add_setting('home_title_text', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_home_customize->add_control('home_title_text', array(
        'section' => 'home_text_section',
        'label' => 'Title',
        'type' => 'textarea',
        'description' => 'Home page title message'
    ));
}

function get_home_title() {
    return get_theme_mod('home_title_text');
}

add_action('customize_register', 'ba_home_title');