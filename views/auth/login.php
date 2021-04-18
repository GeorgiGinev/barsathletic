<?php /* Template Name: login */ ?>

<div class="base-container">
    <?php get_header(); ?>

    <main class="main-body">
        <section class="container-sm">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card my-4">
                        <div class="card-body">
                            <h1 class="page-title card-title">Sign In</h1>
                            <div class="mb-2">
                                <sub class="text-muted">Sign in to have more privileges.</sub>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="loginName">Name</label>
                                    <input type="text" class="form-control" id="loginName" aria-describedby="nameHelp" placeholder="Name...">
                                </div>
                                <div class="form-group">
                                    <label for="loginPassword">Password</label>
                                    <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="keepMeSigned">
                                    <label class="form-check-label" for="keepMeSigned">Keep me signed in</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
</div>