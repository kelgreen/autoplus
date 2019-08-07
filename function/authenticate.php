<?php

function authenticate($username, $password) {
    $users = array (
        'raquel' => 'a7a1b335247554be6612f583e32b64cb',
        'corina' => 'a7a1b335247554be6612f583e32b64cb',
        'nassim' => 'a7a1b335247554be6612f583e32b64cb',

     );

    return array_key_exists($username, $users)
        && $users[$username] === md5($password);

}