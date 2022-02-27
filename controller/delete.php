<?php

$id = URL_PARAMS['id'] ?? '';
if(messagesDelete($id)){
   header("Location: ../");
   exit();
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
    exit();
}




