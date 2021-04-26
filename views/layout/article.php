<?php $article = get_post(get_the_ID()); ?>
<section class="container-sm">
    <header class="my-3 page-title">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

        <h1 class="main-title">
            <?php echo get_the_title(); ?>
        </h1>
    </header>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($article->ID), 'main-thumbnail'); ?>
    <?php if (!empty($image)) { ?>
        <div class="post-thumbnail">
            <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="<?php echo $article->post_title; ?>"/>
        </div>
    <?php } ?>
    <div class="row my-3">
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-1">
            <span class="text-uppercase font-weight-medium">Share:</span>
            <sub class="mr-1">
                <a data-sharer="facebook"
                   data-title="<?php echo $article->post_title ?>"
                   data-url="<?php echo get_permalink($article->ID); ?>"
                   title="<?php echo $article->post_title ?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </sub>
            <sub class="mr-1">
                <a data-sharer="pinterest"
                   data-title="<?php echo $article->post_title ?>"
                   data-url="<?php echo get_permalink($article->ID); ?>"
                   title="<?php echo $article->post_title ?>">
                    <i class="fab fa-pinterest-p"></i>
                </a>
            </sub>
            <sub class="mr-1">
                <a data-sharer="twitter"
                   data-title="<?php echo $article->post_title ?>"
                   data-hashtags="workout"
                   data-url="<?php echo get_permalink($article->ID); ?>"
                   title="<?php echo $article->post_title ?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </sub>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-1">
            <span class="text-uppercase font-weight-medium">Author:</span>
            <span class="font-weight-medium"><?php echo get_the_author_meta('display_name', $article->post_author); ?></span>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-1">
            <span class="text-uppercase font-weight-medium">Date:</span>
            <span class="font-weight-medium"><?php echo date('d.m.Y', strtotime($article->post_date)); ?></span>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-6 my-1">
            <span class="text-uppercase font-weight-medium">Tags:</span>
            <form action="<?php echo get_permalink(get_option('page_for_posts')); ?>" method="GET"
                  class="d-inline-block">
                <?php if (!empty(get_the_tags($article))) { ?>
                    <?php foreach (get_the_tags($article->ID) as $tag) { ?>
                        <button type="submit" class="mr-1 tag" name="tag"
                                value="<?php echo $tag->name ?>"><?php echo $tag->name; ?></button>
                    <?php } ?>
                <?php } ?>
            </form>
        </div>
    </div>
    <div class="page-content">
        <?php echo the_content(); ?>
    </div>
</section>