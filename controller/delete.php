<?php

$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: ?c=delete&id=$id");
        exit();
    }
    messagesDelete($id);
    header("Location: ./");
    exit();
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
    exit();
}




