<?php
add_theme_support( 'post-thumbnails' );

add_image_size( 'small-thumbnail', 392, 392, false );
add_image_size( 'main-thumbnail', 1200, 400, array('x_crop_position' => 'center', 'y_crop_position' => 'center') );