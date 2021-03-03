<?php
function ba_home_button_section($wp_home_customize) {
    $wp_home_customize->add_section('home_button_section', array(
        'panel'      => 'home_panel',
        'title'      => __( 'Button Settings' ),
        'priority'   => 300,
    ));
}

add_action('customize_register', 'ba_home_button_section');

include_once ('label.php');
include_once ('active.php');
include_once ('forward-link.php');