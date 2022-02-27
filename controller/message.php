<?php

$id = (int) URL_PARAMS['id'];

    if($message = messagesOne($id)){
        //var_dump($message);
        $title = 'Show article';
        $left = template('message/_left',[
            'id'=>$id,
        ]);
        $innerContent = template('message/_massages',[
            'message'=>$message,
        ]);
        $content = template('base/_main2col',[
            'left'=>$left,
            'content'=>$innerContent,
        ]);
    } else {
        header("$_SERVER[SERVER_PROTOCOL] 404 Not Found");
        $content = template('errors/_404');
    }

?>


