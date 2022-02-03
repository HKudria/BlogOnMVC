<?php
$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: ?c=category&id=$id");
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