<?php
function ba_home_sub_text($wp_customizer) {
    $wp_customizer->add_setting('home_sub_title_text', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customizer->add_control('home_sub_title_text', array(
        'section' => 'home_text_section',
        'label' => 'Sub-Title',
        'type' => 'textarea',
        'description' => 'Home page sub-title message'
    ));
}

function get_home_sub_title() {
    return get_theme_mod('home_sub_title_text');
}

add_action('customize_register', 'ba_home_sub_text');