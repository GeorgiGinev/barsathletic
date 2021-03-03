<?php
function ba_logo($customizer)
{
    $customizer->add_setting('logo', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $customizer->add_control(new WP_Customize_Media_Control($customizer, 'logo', array(
        'section' => 'title_tagline',
        'label' => 'Logo',
        'description' => 'Upload logo image',
        'mime_type' => 'image'
    )));
}

add_action('customize_register', 'ba_logo');