<section class="container-sm">
    <header class="my-3 page-title">
        <?php $page_for_posts = get_post(get_option( 'page_for_posts' )); ?>
        <?php the_breadcrumb(); ?>

        <h1 class="main-title">
            <?php echo $page_for_posts->post_title; ?>
        </h1>
    </header>

    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $query = new WP_Query(
        array(
            'paged' => $paged,
            'order' => 'desc',
            'post_type' => 'post',
            'post_status' => 'publish',
        )
    );

    if ($query->have_posts()) { ?>
        <div class="row">
            <?php while ($query->have_posts()) {?>

                <div class="col-12 col-md-6 col-lg-4">
                    <?php $query->the_post();
                    $article = get_post(get_the_ID());?>
                    <?php include(__DIR__ . '/../components/article-listing.php'); ?>
                </div>
            <?php } ?>
        </div>

        <?php

        echo bootstrap_pagination();
    }
    ?>
</section>