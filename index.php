<?php

spl_autoload_register(function ($className) {
    ///include_once 'src/controllers/UserController.php';
    //include_once 'src/models/UserModel.php';
    ///echo $className;
    $classNameWithoutPrefix = str_replace('php43', '', $className);  //\controllers\UserController
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $classNameWithoutPrefix);//controllers/UserController
    require_once 'src' . $path . '.php'; //src/controllers/UserController.php
});

use php43\models\UserModel;
use php43\controllers\UserController;



$userController = new UserController();
$userController->index();

$userModel = new UserModel();
$userModel->index();

$postModel = new \php43\models\PostModel();
$postModel->index();