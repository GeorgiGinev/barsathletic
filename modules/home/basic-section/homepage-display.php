<?php
function ba_homepage_display($wp_customizer) {
    $wp_customizer->get_control('show_on_front')->section = 'home_basic_section';
}

add_action('customize_register', 'ba_homepage_display');