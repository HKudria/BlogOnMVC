<?php
if (!session_id()){
    session_start();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $remember = isset($_POST['remember']);
    $authErr = true;

    if($login != '' || $password != ''){
        $user = userOne($login);
        if($user !== null && password_verify($password, $user['password'])){
            //passwordVerify
            $token = substr(bin2hex(random_bytes(128)),0,128);
            sessionsAdd($user['id_user'],$token);
            $_SESSION['token'] = $token;

            if($remember){
                setcookie('token',$token,time()+3600*24*30,BASE_URL);
            }

            header('Location:' . BASE_URL);
            exit();
        }
    }
    
} else {
  $authErr = false;
}

    $title = 'Login';
    $content = template('auth/_login',['authErr' => $authErr]);