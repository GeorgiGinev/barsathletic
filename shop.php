<?php get_header(); ?>

<main class="main-body">

<?php
$params = array('posts_per_page' => 5, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?>
<?php if ($wc_query->have_posts()) : ?>
    <?php while ($wc_query->have_posts()) :
        $wc_query->the_post(); ?>
        <?php the_title(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else:  ?>
    <p>
        <?php _e( 'No Products'); ?>
    </p>
<?php endif; ?>

</main>

<?php get_footer(); ?>
