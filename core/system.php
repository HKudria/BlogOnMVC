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