<?php
require_once __DIR__ . '/vendor/autoload.php';

$userController = new \Lrandom\Php43\controllers\UserController();
$userController->index();

$userModel = new \Lrandom\Php43\models\UserModel();
$userModel->index();

$postModel = new \Lrandom\Php43\models\PostModel();
$postModel->index();