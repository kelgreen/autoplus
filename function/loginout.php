<?php
define ('SESS_USERNAME', 'SESS_USERNAME');
$message = '';

if (PHP_SESSION_NONE === session_status() ) {
    session_start();
}

function user_is_logged(){
    return array_key_exists(SESS_USERNAME, $_SESSION);
}

if (! user_is_logged()
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST)
    && array_key_exists('login_submit', $_POST)) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    require_once dirname(__FILE__). "/authenticate.php";
    if (authenticate($username, $password) ) {
        $_SESSION[SESS_USERNAME] = $username;
    }
} elseif ( user_is_logged() && array_key_exists("logout_submit", $_POST)){
    unset($_SESSION[SESS_USERNAME]);
}

