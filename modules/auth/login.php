<?php
function theme_login_header()
{
    ?>
    <div class="base-container">
    <?php
    include_once(get_stylesheet_directory() . '/header.php');
    ?>
    <div class="main-body">
    <div class="container-sm">
    <header class="my-3 page-title">
        <?php the_breadcrumb(); ?>
    </header>
    <div class="row">
    <div class="col-12 col-md-6 offset-md-3">
    <div class="card my-4">
    <div class="card-body">
    <div class="page-title card-title">
        <h1 class="main-title">Login</h1>
        <sub class="sub-title">Login to have more privileges.</sub>
    </div>
    <?php
}

add_action('login_head', 'theme_login_header');

function theme_login_footer()
{
    ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php
    include_once(get_stylesheet_directory() . '/footer.php');
    ?></div><?php
}

add_action('login_footer', 'theme_login_footer');