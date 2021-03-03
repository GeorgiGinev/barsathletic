<?php
function ba_home_button_link($wp_home_customize) {
    $wp_home_customize->add_setting('home_button_link', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_home_customize->add_control('home_button_link', array(
        'section' => 'home_button_section',
        'label' => 'Link',
        'type' => 'textarea',
        'description' => 'Where to forward when a user clicks on the button. You MUST start your URL wit http://'
    ));
}

function get_home_button_link() {
    return get_theme_mod('home_button_link');
}

add_action('customize_register', 'ba_home_button_link');