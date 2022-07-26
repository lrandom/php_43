<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
<?php
//IN RA MỘT DÒNG CHỮ "HELLO WORLD"
/*
  IN RA MỘT DÒNG CHỮ "HELLO WORLD"
 * */
echo '<p>Hello World</p>';
?>

<?php
//$myName = "Nguyễn Thành Luân";
//$myname = "Nguyễn Thành Luân";

//PasCal -> tên lớp ConNguoi
//camelCase -> đặt tên cho biến, hàm
//under_score  -> biến, hàm -> python

/*define('MY_SCHOOL', 'NIIT');
echo MY_SCHOOL;*/

$weather = "sunny";
/*if ($weather == "sunny") {
    echo "Đi xem phim";
}else{
    echo "Làm gì đó khác";
}*/
if ($weather == 'rainy') {
    echo "Ở nhà";
} else if ($weather == 'sunny') {
    echo "Đi xem phim";
} else if ($weather == 'cloudy') {
    echo "Đi đá bóng";
}

switch ($weather) {
    case 'rainy':
        echo "Ở nhà";
        break;
    case 'sunny':
        echo "Đi xem phim";
        break;
    case "cloudy":
        echo "Đi đá bóng";
        break;
    default:
        echo "Không biết làm gì";
}
?>
</body>
</html>