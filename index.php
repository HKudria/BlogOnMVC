<?php
include_once ('init.php');
//var_dump($_GET);
$pageCanonical = BASE_HOST.BASE_URL;
$uri = $_SERVER['REQUEST_URI'];
$badUrl = BASE_URL . 'index.php';
if(strpos($uri, $badUrl) === 0) {
    $cname = 'errors/404';
} else {
    $routes = include('routes.php');
    $url = $_GET['getfromre'];
    $routesRes = parseUrl($url,$routes);
    $cname = $routesRes['controller'] ;
//var_dump($cname);
    define('URL_PARAMS', $routesRes['params']);

    $urlLen = strlen($url);

    if($urlLen > 0 && $url[$urlLen-1]=='/'){
        $url = substr($url,0,$urlLen-1);
    }

    $pageCanonical .= $url;
}

//if (!empty($_GET['getfromre'])){
//    $allParams = explode('/',$_GET['getfromre']);
//    if($allParams[0] != 'view') {
//        $params = $allParams[0];
//    }
//        foreach ($allParams as $key => $value){
//            if ($value == ''){
//                unset($allParams[$key]);
//            }
//        }
//        var_dump($allParams);
//}


$path = "controller/$cname.php";
$title = 'Error 404';
$content =  '';

//var_dump($path);
//if(checkControllerName($params) && file_exists($path)){
// include_once ($path);
//} else {
//    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
//    $content = template('errors/_404');
//}


include_once ($path);

//var_dump(URL_PARAMS);
$html = template('base/_main', [
    'title'=>$title,
    'content'=> $content,
    'canonical' => $pageCanonical,
]);

echo $html;








