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
//hàm không có tham số
function printMyName()
{
    echo "Nguyễn Thành Luân";
}

/*printMyName();
printMyName();
printMyName();
printMyName();
printMyName();
printMyName();
printMyName();
printMyName();*/

function printMyName2($yourName)
{
    echo $yourName;
}

printMyName2("Trần Linh");

function total($a, $b)
{
    return $a + $b;
}

echo total(10, 20);//30
echo total(40, 50);//90

//hàm nặc danh
//hàm không tên
//first citizen function:php,javascript,python
$total = function ($a, $b) {
    return $a + $b;
};
$total2 = $total;
echo $total(20, 30);//50
echo $total2(50, 60);//110

//callback function
//$b là callback function : function được sử dụng như tham số cho hàm a
//a là higher order function: hàm bậc cao -> hàm sử dụng hàm khác như tham số
function a($b)
{
    $b();
}

a(function () {
    echo "HIHI";
    echo "HAHA";
});
//hook
function getTotal($a, $b, $func)
{
    $total = $a + $b;
    $func($total);
}

getTotal(10, 20, function ($total) {
    echo $total;
});

getTotal(10, 20, function ($total) {
    $multiple = $total * 2;
    echo $multiple;
});

getTotal(10, 20, function ($total) {
    $divide = $total / 2;
    echo $divide;
});

function getSub($a, $b = 20)
{
    return $a - $b;
}

getSub(20)
?>
</body>
</html>