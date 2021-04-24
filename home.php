<?php
get_header(); ?>

    <main class="main-body">
        <?php
        if(is_front_page()) {
            include_once('views/layout/home.php');
        } else if(is_home()) {
            include_once('views/layout/all_articles.php');
        }
        ?>
    </main>

<?php get_footer(); ?>