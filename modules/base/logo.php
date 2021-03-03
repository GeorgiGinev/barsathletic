<?php
function ba_logo($customizer)
{
    $customizer->add_setting('site_logo', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $customizer->add_control(new WP_Customize_Media_Control($customizer, 'site_logo', array(
        'section' => 'title_tagline',
        'label' => 'Logo',
        'description' => 'Upload logo image',
        'mime_type' => 'image',
        'width' => 378,
        'height' => 85
    )));
}

function get_site_logo() {
    $id = get_theme_mod('site_logo');

    if($id == 0) {
        return false;
    }

    return wp_get_attachment_url($id);
}

add_action('customize_register', 'ba_logo');