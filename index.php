<?php
include_once('core/db.php');
include_once('core/arr.php');
include_once('core/system.php');



$cname = $_GET['c'] ?? 'index';
$path = "controller/$cname.php";
$title = 'Error 404';
$content =  '';

if(checkControllerName($cname) && file_exists($path)){
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








