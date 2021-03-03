<nav class="navbar navbar-expand-lg <?php if (is_front_page()) { ?> no-fill <?php } ?>">
    <a class="navbar-brand" title="<?php echo get_bloginfo('name'); ?>" href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_site_logo(); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_id' => 'header-menu')); ?>
        <div class="d-flex align-items-center">
            <?php if (is_user_logged_in()) { ?>
                <a href="#" class="ba-btn-primary">My Profile</a>
            <?php } else { ?>
                <a href="#" class="ba-btn-primary">Sign Up</a>
                <a href="#" class="ba-btn-primary">Sign In</a>
            <?php } ?>
        </div>
    </div>
</nav>