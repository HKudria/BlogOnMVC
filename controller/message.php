<?php
include_once('model/messages.php');



$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: ?c=message&id=$id");
        exit();
    }
    if($message = messagesOne($id)){
        //var_dump($message);
        $title = 'Show article';
        $content = template('_massages',[
            'id'=>$id,
            'message'=>$message,
        ]);
    } else {
        header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
        $content = template('errors/_404');
    }
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
}

?>


