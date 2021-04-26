<section class="container-sm">
    <header class="my-3 page-title">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
        <h1 class="main-title">
            <?php echo get_the_title(); ?>
        </h1>
    </header>
    <div class="page-content">
        <?php echo the_content(); ?>

        <form>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="form-group">
                        <label for="first_name">First Name<span class="text-danger">*</span></label>
                        <input type="text" id="first_name" name="first_name" class="form-control"
                               placeholder="First name" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="form-group">
                        <label for="email">Email<span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="message">Message<span class="text-danger">*</span></label>
                        <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-2 offset-sm-8 offset-md-10">
                    <div class="form-group">
                        <button class="ba-btn-primary w-100" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>