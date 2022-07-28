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
/*$num1 = 10;
$num2 = 2;
$result = $num1 + $num2;
echo $result;
echo '<br>';
$result = $num1 - $num2;
echo $result;
echo '<br>';
$result = $num1 / $num2;
echo $result;
echo '<br>';
$result = $num1 % $num2;
echo $result;
echo '<br>';
$result = $num1 ** $num2;
echo $result;
echo '<br>';

$num1 += 20; // $num1 = $num1 + 20
echo $num1;

echo '<br>';
$numA = 10;//number
$numB = '10';//string
echo $numA == $numB; // true -> 1
echo '<br>';
echo $numA === $numB; // true -> 1
echo '<br>';
echo $numA !== $numB; // false -> 0
echo 10 > 5;// true
echo 10 < 5;// false
echo 10 >= 5;// true
echo 10 <= 5;// false
echo 10 != 5;//true*/

$counter = 10;
echo $counter++; //10
echo '<br>';
echo $counter;//11

/*echo ++$counter;//11
echo '<br>';
echo $counter;//11*/

echo(10 == 10 && 5 == 10);//false
echo(10 == 10 || 5 == 10);//true
echo(10 == 10 xor 20 == 20);//false
echo(!true);//false

//phép cộng chuỗi
/*$str1 = 'Hello';
$str2 = ' World';
$str3 = $str1 . $str2;
$str1 .= 'World';
echo $str1;*/
//echo $str3; //Hello World

$friendName = 'Nam';
$str4 = 'Hello, $friendName'; // Hello, $friendName
$str5 = "Hello, $friendName";//Hello, Nam
echo $str4;
echo '<br>';
echo $str5;
?>
</body>
</html>


