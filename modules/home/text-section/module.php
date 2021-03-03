<?php
function ba_home_text_section($wp_home_customize) {
    $wp_home_customize->add_section('home_text_section', array(
        'panel'      => 'home_panel',
        'title'      => __( 'Text Settings' ),
        'priority'   => 200,
    ));
}

add_action('customize_register', 'ba_home_text_section');

include_once ('title.php');
include_once ('sub-title.php');