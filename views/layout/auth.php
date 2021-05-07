<div class="base-container">
    <?php get_header(); ?>

    <main class="main-body">
        <section class="container-sm">
            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card my-4">
                        <div class="card-body">
                            <div class="page-title card-title">
                                <h1 class="main-title">
                                    <?php echo get_the_title(); ?>
                                </h1>
                            </div>
                            <div class="auth">
                                <?php echo the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
</div>