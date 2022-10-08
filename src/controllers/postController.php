<?php

namespace Lrandom\Php43\controllers;

use Lrandom\Php43\models\PostModel;

class postController
{
    function add()
    {
        $postModel = new PostModel();
        $postModel->add();
        echo "add post";
        loadView('post/add.php');
    }
}