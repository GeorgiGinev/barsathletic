<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar(array(
        'name' => 'Newsletter Area',
        'id' => 'newsletter-area',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="newsletter-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'arphabet_widgets_init');
