<?php

if($user){
    unset($_SESSION['token']);
    setcookie('token','',time()-1,BASE_URL);
    header('Location:' . BASE_URL);
    exit();
}