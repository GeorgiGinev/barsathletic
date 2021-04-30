<?php
add_filter('wp_enqueue_scripts', 'register_my_script');
function register_my_script(){
    wp_register_script( 'my-script', get_stylesheet_directory_uri() . 'js/my-script.js', array( 'jquery' ), "1.0" , false );
}
add_filter('do_shortcode_tag', 'enqueue_my_script',10,3);
function enqueue_my_script($output, $tag, $attr){
    if('contact-form-7' != $tag){
        return $output; //make sure we filter cf7 shortcodes
    }
    if(isset($attr['id']) && '4' == $attr['id']){
        wp_enqueue_script('my-script'); //enqueue if it is form id=4
    }
    return $output;
}