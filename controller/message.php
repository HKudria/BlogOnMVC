<?php

$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: ?c=message&id=$id");
        exit();
    }
    if($message = messagesOne($id)){
        //var_dump($message);
        $title = 'Show article';
        $left = template('message/_left',[
            'id'=>$id,
        ]);
        $innerContent = template('message/_massages',[
            'message'=>$message,
        ]);
        $content = $innerContent = template('base/_main2col',[
            'left'=>$left,
            'content'=>$innerContent,
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


