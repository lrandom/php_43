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
$arr = [9, 8, 7, 3, 23];
//array_push($arr, 10, 20);
//[9, 8, 7, 3, 23, 10, 20]
$arr[] = 10;
$arr[] = 20;
//echo $arr[4];//23
/*
$arr = array(9, 8, 7, 3, 23);
echo $arr[4];//23*/

foreach ($arr as $item) {
    echo $item;
}

for ($i = 0; $i < count($arr); $i++) {
    echo $item[$i];
}
?>
</body>
</html>