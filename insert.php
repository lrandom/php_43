<?php
//C
//mở kết nối đến mysql server
$connect = mysqli_connect('127.0.0.1', 'root', 'koodinh@', 'php_43');
if (!$connect) {
    die("Lỗi rồi bạn ôi");
}
echo("Kết nối thành công, cần cù thì bù siêng năng");
/*$sql = "INSERT INTO category(name) VALUES ('Nội thất')";
mysqli_query($connect, $sql);*/

$sql = "INSERT INTO category(name) VALUES ('Du lịch');
        INSERT INTO category(name) VALUES('Trang sức')";
mysqli_multi_query($connect, $sql);
?>