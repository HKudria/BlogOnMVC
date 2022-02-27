<?php

function checkControllerName(string $name) : bool {
    return !!preg_match('/^[a-z0-9_]+$/',$name); //!! equal (bool)
}

function template(string $path, array $vars=[]) : string
{
    $fullPath = "view/$path.php";
    extract($vars);
    ob_start();
    include ($fullPath);
    return ob_get_clean();
}

function parseUrl(string $url, array $routes) : array{
    $res = [
        'controller' => 'errors/404',
        'params' => []
    ];

    foreach ($routes as $route) {
        $mathes = [];
        if(preg_match($route['test'], $url, $mathes)){
            $res['controller'] = $route['controller'];
            if(!is_null($route['params'])){
                foreach ($route['params'] as $name => $num) {
                    $res['params'][$name] = $mathes[$num];
                }
            }
            break;
        }
    }

    return $res;
}