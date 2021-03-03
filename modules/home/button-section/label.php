<?php
function ba_home_button_label($wp_home_customize) {
    $wp_home_customize->add_setting('home_button_label', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_home_customize->add_control('home_button_label', array(
        'section' => 'home_button_section',
        'label' => 'Label',
        'type' => 'textarea',
        'description' => 'Button text'
    ));
}

function get_home_button_label() {
    return get_theme_mod('home_button_label');
}

add_action('customize_register', 'ba_home_button_label');