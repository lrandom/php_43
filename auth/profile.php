<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div>Email: <?php echo $_SESSION['user']['email']; ?></div>
    <div>Name: <?php echo $_SESSION['user']['name']; ?></div>
    <a href="logout.php">Đăng xuất</a>
</div>
<style>
    .container {
        width: 500px;
        margin: 0px auto;
    }
</style>
</body>
</html>
