<?php
/**
 * Set base routes which the template gives
 * @param $type string
 * @return string|void string or none for route link
 */
    function getRoute($type) {
        switch ($type) {
            case 'login': {
                return 'login.php';
            }
            case 'register': {
                return 'register.php';
            }
            default: {
                return;
            }
        }
    }