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
<?php
if (isset($_COOKIE['school_name'])) {
    echo "Cookie school_name đã được khởi tạo";
    echo "<br>";
    echo "Giá trị của cookie là";
    echo "<br>";
    echo $_COOKIE['school_name'];
}
?>
</body>
</html>