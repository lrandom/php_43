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
//$arr = [9, 8, 7, 3, 23];
//var_dump($arr);
//sort($arr);
//rsort($arr);
//var_dump($arr);

$arr = [
    'name' => 'Luan',
    'address' => "Quang Ninh"
];

krsort($arr);
var_dump($arr);
?>
</body>
</html>