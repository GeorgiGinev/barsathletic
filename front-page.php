<?php
get_header(); ?>

    <main class="main-body">
        <?php
        if(is_front_page()) {
            include_once('views/layout/home.php');
        }
        ?>
    </main>

<?php get_footer(); ?>