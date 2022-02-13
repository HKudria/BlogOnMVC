<?php
$id = checkID($allParams[1]?? '');
if ($id){
    if($allParams[1]!=$id){
        header("Location: category/$id");
        exit();
    }
    if($category = categoryOne($id)){
        $title = 'Messages from category';

        $content = template('category/_main',[
            'messages' => $category,
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