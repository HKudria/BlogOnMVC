<?php

if($messages = messagesAll()){
    $title = 'Main page';
    $isTable = (URL_PARAMS['table'] ?? '') == 'table';
    $template =  $isTable ? '_index_table' : '_index';
    $content = template('message/'.$template,[
        'messages'=>$messages,
    ]);
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
}

?>

