<?php
function active_nav_class($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'active_nav_class' , 10 , 2);