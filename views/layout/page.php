<section class="container-sm">
    <header class="my-3 page-title">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
        <h1 class="main-title">
            <?php echo get_the_title(); ?>
        </h1>
    </header>
    <div class="page-content">
        <?php echo the_content(); ?>
    </div>
</section>