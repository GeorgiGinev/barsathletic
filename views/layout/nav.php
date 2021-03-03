<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" title="<?php echo get_bloginfo('name'); ?>" href="<?php echo get_home_url(); ?>">
      <img src="<?php echo get_site_logo(); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <?php wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'menu_id' => 'header-menu') );?>
        <div class="d-flex align-items-center">
            <a class="ba-btn-primary">Sign Up</a>
            <a class="ba-btn-primary">Sign In</a>
        </div>
    </div>
</nav>