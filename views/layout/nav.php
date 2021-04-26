<header class="main-header">
    <div id="headerNavReplacer"></div>
    <nav class="navbar navbar-expand-lg <?php if (is_front_page()) {
        echo 'no-fill';
    } ?>
    <?php if (is_user_logged_in()) { ?> logged <?php } ?>" id="headerNav">
        <div class="container-sm">
            <a class="navbar-brand" title="<?php echo get_bloginfo('name'); ?>" href="<?php echo get_home_url(); ?>">
                <img class="img-fluid" src="<?php echo get_site_logo(); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
            </a>
            <button class="navbar-toggler hamburger hamburger--squeeze <?php if (is_user_logged_in()) {
                echo 'logged';
            } ?>" type="button" data-toggle="collapse" data-target="#headerNavigation"
                    aria-controls="headerNavigation" aria-expanded="false" aria-label="Toggle Header Navigation">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
            </button>
            <div class="collapse navbar-collapse <?php if (is_user_logged_in()) {
                echo ' logged ';
            } ?>" id="headerNavigation">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_id' => 'header-menu')); ?>
                <div class="d-flex align-items-center">
                    <?php if (is_user_logged_in()) { ?>
                        <a href="<?php echo getRoute('login'); ?>" class="ba-btn-primary">My Profile</a>
                    <?php } else { ?>
                        <a class="ba-btn-primary mr-2">Sign Up</a>
                        <a href="<?php echo wp_login_url(); ?>" class="ba-btn-primary">Sign In</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</header>