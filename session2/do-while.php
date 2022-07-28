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
$count = 0;
//vòng lặp ko biết trc số lần lặp
do {
    echo $count;
    echo '<br>';
    $count++;
} while ($count < 5);

?>
</body>
</html>