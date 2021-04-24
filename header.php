<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <?php wp_head(); ?>

    <title><?php echo get_bloginfo('name'); ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon"
          type="image/x-icon"
          href="<?php echo get_site_icon_url(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css"/>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="base-container">
<?php include_once('views/layout/nav.php'); ?>
