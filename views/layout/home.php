<section class="index_welcome">
    <?php if (get_home_video()) { ?>
        <script>
            var homeVideoUrl = '<?php echo get_home_video(); ?>';
        </script>
    <?php } ?>
    <div class="container-sm">
        <div class="content <?php if(is_user_logged_in()) { echo 'logged'; } ?>">
            <div>
                <?php if (get_home_title() != '') { ?>
                    <h1 class="title"><?php echo get_home_title(); ?></h1>
                <?php } ?>
                <?php if (get_home_sub_title() != '') { ?>
                    <p class="sub-title"><?php echo get_home_sub_title(); ?></p>
                <?php } ?>
            </div>
            <?php if (get_home_button_label() != '' && get_home_button_active()) { ?>
                <div class="join">
                    <a href="<?php echo get_home_button_link(); ?>"
                       class="ba-btn-primary ba-btn-lg ba-btn-full-radius"
                       title="<?php echo get_home_button_label(); ?>">
                        <?php echo get_home_button_label(); ?>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<h1>asdas</h1>
<h1>asdas</h1>
<h1>asdas</h1>