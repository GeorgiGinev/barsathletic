<?php
/**
 * Set base routes which the template gives
 * @param $type string
 * @return string|void string or none for route link
 */
    function getRoute($type) {
        if($type == 'login') {
            return 'login.php';
        }

        return;
    }