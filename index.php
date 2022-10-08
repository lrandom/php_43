<?php
require_once __DIR__ . '/vendor/autoload.php';
function loadView($viewPath)
{
    include_once('src/views/' . $viewPath);
}

if (isset($_GET['ct'])) {
    $ct = $_GET['ct'];//User/edit
    $ctArr = explode("/", $ct); //["User","edit"]
    $className = "Lrandom\\Php43\\controllers\\" . strtolower($ctArr[0]) . 'Controller'; //userController
    $objOfController = new $className;
    $action = $ctArr[1];
    $params = $ctArr[2];
    $objOfController->{$action}($params);
}