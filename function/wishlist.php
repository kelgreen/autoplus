<?php

define ('SESS_WISHLIST', 'SESS_WISHLIST');
if (PHP_SESSION_NONE  === session_status()) {
    session_start();
}

//var_dump($_SESSION);

if ( ! array_key_exists(SESS_WISHLIST, $_SESSION)) {
    $_SESSION[SESS_WISHLIST] = array();
}
// maintenant $_SESSION[SESS_WISHLIST] existe toujours
$wl =& $_SESSION[SESS_WISHLIST];

if (array_key_exists(OP_NAME, $_GET)) {
    if ($_GET[OP_NAME] === OP_AJOUT) {
        if(user_is_logged()){
        $wl[] = $_GET[IDPROD];} //array_push($wl, $_GET[IDPROD]);
    } elseif ($_GET[OP_NAME] === OP_RETRAIT) {
        foreach ($_SESSION[SESS_WISHLIST] as $idwl => $itemwl) {
            if($_GET[IDPROD] == $itemwl){
                unset($wl[$idwl]);
            }
        }
    }
}
