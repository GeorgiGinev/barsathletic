<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being app.sass).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home-module.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>
<div class="base-container">
    <?php get_header(); ?>

    <main class="main-body">
        <h1>Index</h1>
    </main>

    <?php get_footer(); ?>
</div>