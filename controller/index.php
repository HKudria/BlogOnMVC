<?php

include_once('model/messages.php');


if($messages = messagesAll()){
    $title = 'Main page';
    $content = template('_index',[
        'messages'=>$messages,
    ]);
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
}

?>

