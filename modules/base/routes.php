<?php
/**
 * Set base routes which the template gives
 * @param $type string
 * @return string|void string or none for route link
 */
    function getRoute($type) {
        switch ($type) {
            case 'login': {
                return 'login';
            }
            case 'register': {
                return 'membership-account/membership-levels/';
            }
            case 'profile': {
                return 'profile';
            }
            case 'logout': {
                return 'logout';
            }
            default: {
                return;
            }
        }
    }