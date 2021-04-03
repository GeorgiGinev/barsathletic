<footer class="main-footer">
    <div class="container-sm">
        <div class="top-footer">
            <div class="row">
                <div class="col-lg-3">
                    <div class="text-center">
                        <img class="img-fluid" src="<?php echo get_site_logo(); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_id' => 'footer-menu')); ?>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <span>Copyright © 2021 BarsAthletic.com</span>
        </div>
    </div>
</footer>