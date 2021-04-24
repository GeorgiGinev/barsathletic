<?php $category = get_the_category(); ?>

<section class="container-sm">
    <header class="my-3 page-title">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

        <h1 class="main-title">
            <?php echo single_cat_title('', false); ?>
        </h1>
    </header>

    <?php
    $current_page = get_queried_object();
    $category = $current_page->post_name;

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $query = new WP_Query(
        array(
            'paged' => $paged,
            'category_name' => single_cat_title('', false),
            'order' => 'asc',
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