<?php
/**
 * Redirecting default wp-login.php?action=register to custom page register.php
 **/
function redirect_register_page()
{
    $login_page = home_url('/' . getRoute('register'));
    $page_viewed = basename($_SERVER['REQUEST_URI']);
    if ($page_viewed == "wp-login.php?action=register" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
    }
}