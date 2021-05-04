<?php if (!empty($article) && $article->post_status == 'publish') { ?>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($article->ID), 'small-thumbnail'); ?>
    <a class="article-box" title="<?php echo $article->post_title; ?>"
       href="<?php echo get_permalink($article->ID); ?>">
        <?php if (!empty($image)) { ?>
            <span class="article-thumbnail">
                <span class="thumbnail">
                    <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="<?php echo $article->post_title ?>"/>
                </span>
            </span>
        <?php } else { ?>
            <span class="article-thumbnail">
                <span class="thumbnail">
                    <span class="logo"></span>
                </span>
            </span>
        <?php } ?>
        <h4 class="article-title"><?php echo $article->post_title; ?></h4>

        <?php if (!empty(get_the_tags($article->ID))) { ?>
            <span class="article-tag-box">
            <?php foreach (get_the_tags($article->ID) as $tag) { ?>
                <span class="article-tag"><?php echo $tag->name; ?></span>
            <?php } ?>
        </span>
        <?php } ?>
        <span class="article-read-more">
            <span>Read more</span>
            <i class="fas fa-arrow-circle-up"></i>
        </span>
        <span class="article-author">
            <i class="fas fa-user"></i>
            <span class="d-inline-block ml-1">By <?php echo get_the_author_meta('nickname', $article->post_author); ?></span>
        </span>
    </a>
<?php } ?>
