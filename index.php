<?php
include_once ('init.php');
//var_dump($_GET);

$params = 'index';

if (!empty($_GET['getfromre'])){
    $allParams = explode('/',$_GET['getfromre']);
    if($allParams[0] != 'view') {
        $params = $allParams[0];
    }
        foreach ($allParams as $key => $value){
            if ($value == ''){
                unset($allParams[$key]);
            }
        }
        var_dump($allParams);
}







$path = "controller/$params.php";
$title = 'Error 404';
$content =  '';

//var_dump($path);
if(checkControllerName($params) && file_exists($path)){
 include_once ($path);
} else {
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    $content = template('errors/_404');
}

$html = template('base/_main', [
    'title'=>$title,
    'content'=> $content,
]);

echo $html;








