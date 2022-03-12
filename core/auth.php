<?php

function authUser() :?array{
    $user = null;
    $token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;
    if($token !== null){
        $session = sessionsOne($token);

        if($session!==null){
            $user = userById($session['id_user']);
        }

        if($user === null){
            unset($_SESSION['token']);
            setcookie('token','',time()-1,BASE_URL);
        }

        //var_dump($user);
        //var_dump($_SESSION);
    }

    return $user;
}