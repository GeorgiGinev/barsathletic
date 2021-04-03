<section class="index_welcome">
    <?php if (get_home_video()) { ?>
        <script>
            var homeVideoUrl = '<?php echo get_home_video(); ?>';
        </script>
    <?php } ?>
    <div class="container-sm">
        <div class="content <?php if (is_user_logged_in()) {
            echo 'logged';
        } ?>">
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
<section class="container-sm">
    <div class="page-container">
        <h2 class="page-title">Latest programs</h2>

        <div class="row">
            <?php foreach (get_posts(array('numberposts' => 3)) as $article) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article-box" data-aos="fade-down">
                        <h4><?php echo $article->post_title; ?></h4>
                        <?php if(get_the_post_thumbnail_url($article, 'post-thumbnails')) { ?>
                                asd
                            <span><?php echo get_the_post_thumbnail_url($article); ?></span>
                        <?php } ?>
                    </div>
                </div> <?php } ?>
        </div>
    </div>
</section>