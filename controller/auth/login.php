<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $remember = isset($_POST['remember']);
    $authErr = true;

    if($login != '' || $password != ''){
        $user = userOne($login);
        if($user !== null && password_verify($password, $user['password'])){
            //passwordVerify
            echo 'good';
        }
    }
    
} else {
  $authErr = false;
}

    $title = 'Login';
    $content = template('auth/_login',['authErr' => $authErr]);