<?php

$title = 'Edit article';

$err = '';
$id = checkID($allParams[1] ?? '');
if ($id){
    $cats = categoryAll();
    if($allParams[1]!=$id){
        header("Location: edit/$id");
        exit();
    }
    if($fields = messagesOne($id)){
        $title = 'Add article';
        $content = template('message/_formMassages',[
            'cats' => $cats,
            'fields'=>$fields,
            'err'=> $err,
        ]);
    } else {
        header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
        $content = template('errors/_404');
    }
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields = extractField($_POST,['name','text','id_cat']);
    $err = validateFields($fields);
    if(empty($validateError)){
        messagesEdit($fields,$id);
        header("Location: ../message/$id");
        exit();
    }
}


?>



