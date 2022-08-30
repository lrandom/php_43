<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $connect = mysqli_connect('127.0.0.1', 'root', 'koodinh@', 'php_43');
    $sql = "INSERT INTO category(name) VALUES ('$name')";
    mysqli_query($connect, $sql);
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
<h1>Add Category</h1>
<form method="post">
    <div>
        <input type="text" name="name" placeholder="name"/>
    </div>
    <div>
        <button>Add</button>
    </div>
</form>
</body>
</html>