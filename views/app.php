<?php if (is_front_page()) { ?>
    <section class="index_welcome">
        <?php include_once('layout/nav.php'); ?>
        <?php if (get_home_video()) { ?>
            <div class="video">
                <video autoplay muted loop>
                    <source src="<?php echo get_home_video(); ?>" type="video/mp4">
                </video>
            </div>
        <?php } ?>
    </section>
<?php } else {
    include_once('layout/nav.php');
} ?>
