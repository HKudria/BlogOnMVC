<?php

$id = checkID($allParams[1]?? '');
if ($id){
    if($allParams[1]!=$id){
        header("Location: delete/$id");
        exit();
    }
    messagesDelete($id);
    header("Location: ../");
    exit();
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
    exit();
}




