<?php
function total($a, $b)
{
    $a = 20;
    return $a + $b;
}

$num = 50;
total($num, 40);//truyền tham trị
echo $num;//50

function total2(&$a, $b) //truyền tham chiếu
{
    $a = 20;
    return $a + $b;
}

total2($num, 40);
echo $num;//20
