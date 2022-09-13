<?php
try {
    $connect = new PDO("mysql:host=127.0.0.1;dbname=php_43", "root", "koodinh@");
} catch (Exception $exception) {
    echo "Không thể mở kết nối đến CSDL" . $exception->getMessage();
}
$connect->query("INSERT INTO category(name) VALUES('test')")
?>