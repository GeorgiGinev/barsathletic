<?php /* Template Name: login */ ?>

<div class="base-container">
    <?php get_header(); ?>

    <main class="main-body">
        <section class="container-sm">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card my-4">
                        <div class="card-body">
                            <div class="page-title card-title">
                                <h1 class="main-title">Sign In</h1>
                                <sub class="sub-title">Sign in to have more privileges.</sub>
                            </div>
                            <?php if (isset($_GET['login']) && $_GET['login'] == 'failed') {?>
                                <div class="alert alert-danger" role="alert">
                                    The username/email or the password was wrong! Please try again.
                                </div>
                            <?php } ?>
                            <form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ); ?>" method="post">
                                <div class="form-group">
                                    <label for="loginName">Name</label>
                                    <input type="text" name="log" class="form-control" id="loginName" aria-describedby="nameHelp" placeholder="Name..." required>
                                </div>
                                <div class="form-group">
                                    <label for="loginPassword">Password</label>
                                    <input type="password" name="pwd" class="form-control" id="loginPassword" placeholder="Password" required>
                                </div>
                                <label class="checkbox">
                                    <input type="checkbox" name="rememberme" checked="checked">
                                    <span class="checkmark"></span>
                                    <span>Keep me signed in</span>
                                </label>
                                <div class="d-flex justify-content-center">
                                    <input type="hidden" name="redirect_to" value="http://wordpress.local/wp-admin/">
                                    <input type="hidden" name="testcookie" value="1">
                                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
</div>