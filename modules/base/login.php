<?php
/**
 * Redirecting default wp-login.php to custom page login.php
 **/
function redirect_login_page()
{
    $login_page = home_url('/' . getRoute('login'));
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
function route_login_page()
{
    $login_page = home_url('/' . getRoute('login'));
    $page_viewed = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if ($page_viewed == getRoute('login') && $_SERVER['REQUEST_METHOD'] == 'GET') {
        include_once(__DIR__ . '/../../views/auth/login.php');
        exit;
    }
}

add_action('init', 'route_login_page');


/**
 * Function Name: front_end_login_fail.
 * Description: This redirects the failed login to the custom login page instead of default login page with a modified url
 **/
add_action('wp_login_failed', 'front_end_login_fail');
function front_end_login_fail($username)
{
    $login_page = home_url('/' . getRoute('login'));
    // Getting URL of the login page
    if (isset($_SERVER['HTTP_REFERER'])) {
        $referrer = $_SERVER['HTTP_REFERER'];
        // if there's a valid referrer, and it's not the default log-in screen
        if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin')) {
            wp_redirect($login_page . "?login=failed");
            exit;
        }
    }
}

/**
 * Function Name: check_username_password.
 * Description: This redirects to the custom login page if user name or password is   empty with a modified url
 **/
add_action('authenticate', 'check_username_password', 1, 3);
function check_username_password($login, $username, $password)
{
    $login_page = home_url('/' . getRoute('login'));
    if (isset($_SERVER['HTTP_REFERER'])) {
        // Getting URL of the login page
        $referrer = $_SERVER['HTTP_REFERER'];

        // if there's a valid referrer, and it's not the default log-in screen
        if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin')) {
            if ($username == "" || $password == "") {
                wp_redirect($login_page . "?login=empty");
                exit;
            }
        }
    }
}
