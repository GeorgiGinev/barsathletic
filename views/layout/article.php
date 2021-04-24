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
            <sub class="mr-1"><a href="" title="Share <?php echo $article->post_title ?> on Facebook"><i
                            class="fab fa-facebook-f"></i></a></sub>
            <sub class="mr-1"><a href="" title="Share <?php echo $article->post_title ?> on Pinterest"><i
                            class="fab fa-pinterest-p"></i></a></sub>
            <sub class="mr-1"><a href="" title="Share <?php echo $article->post_title ?> on Twitter"><i
                            class="fab fa-twitter"></i></a></sub>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-1">
            <span class="text-uppercase font-weight-medium">Author:</span>
            <span class="font-weight-medium"><?php echo get_the_author_meta('display_name', $article->post_author); ?></span>
        </div>
        <div class="col-12 col-sm-4 col-md-6 col-lg-8 my-1">
            <span class="text-uppercase font-weight-medium">Tags:</span>
            <?php if (!empty(get_the_tags($article))) { ?>
                <?php foreach (get_the_tags($article->ID) as $tag) { ?>
                    <a class="mr-1 tag" title="<?php echo $tag->name; ?>"
                       href="<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="page-content">
        <?php echo the_content(); ?>
    </div>
</section>