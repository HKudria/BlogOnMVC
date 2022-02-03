<?php

if($messages = messagesAll()){
    $title = 'Main page';
    $isTable = ($_GET['view'] ?? '') == 'table';
    $template =  $isTable ? '_index_table' : '_index';
    $content = template('message/'.$template,[
        'messages'=>$messages,
    ]);
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
}

?>

