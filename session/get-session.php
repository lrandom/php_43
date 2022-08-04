<?php
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    echo 'name' . $user['name'];
    echo 'age' . $user['age'];
    echo 'email' . $user['email'];
}