<?php if (!empty($article) && $article->post_status == 'publish') { ?>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($article->ID), 'small-thumbnail'); ?>
    <div class="article-box">
        <?php if (!empty($image)) { ?>
            <div class="article-thumbnail">
                <div class="thumbnail">
                    <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="<?php echo $article->post_title ?>"/>
                </div>
            </div>
        <?php } else { ?>
        <?php } ?>
        <h4 class="article-title"><?php echo $article->post_title; ?></h4>
        <div class="article-read-more">
            <h6>Read more</h6>
            <i class="fas fa-arrow-circle-up"></i>
        </div>
        <div class="article-author">
            <i class="fas fa-user"></i>
            <span class="d-inline-block ml-1">By <?php echo get_the_author_meta('nickname', $article->post_author); ?></span>
        </div>
    </div>
<?php }
