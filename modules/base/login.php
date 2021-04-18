<?php
/**
 * Redirecting default wp-login.php to custom page login.php
 **/
function redirect_login_page()
{
    $login_page = home_url('/'.getRoute('login'));
    $page_viewed = basename($_SERVER['REQUEST_URI']);
    if ($page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
    }
}

add_action('init', 'redirect_login_page');

/**
 * Set up custom login page route
 * and include template
 */
function route_login_page() {
    $login_page = home_url('/'.getRoute('login'));
    $page_viewed = basename($_SERVER['REQUEST_URI']);

    if ($page_viewed == getRoute('login') && $_SERVER['REQUEST_METHOD'] == 'GET') {
        include_once(__DIR__.'/../../views/auth/login.php');
        exit;
    }
}

add_action('init', 'route_login_page');