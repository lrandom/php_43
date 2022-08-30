<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    //chuyển về trang list.php
    header('Location:list.php');
}

$id = $_GET['id'];
$connect = mysqli_connect('127.0.0.1', 'root', 'koodinh@', 'php_43');
$sql = "DELETE FROM category WHERE id =$id";
mysqli_query($connect, $sql);
header('Location:list.php');
?>