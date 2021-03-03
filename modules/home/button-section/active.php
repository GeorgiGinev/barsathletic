<?php
function ba_home_button_active($wp_home_customize) {
    $wp_home_customize->add_setting('home_button_active', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_home_customize->add_control('home_button_active', array(
        'section' => 'home_button_section',
        'label' => 'Active',
        'type' => 'checkbox',
        'description' => 'Show or hide button'
    ));
}

function get_home_button_active() {
    return get_theme_mod('home_button_active');
}

add_action('customize_register', 'ba_home_button_active');