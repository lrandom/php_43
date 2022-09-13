<?php
try {
    $connect = new PDO("mysql:host=127.0.0.1;dbname=php_43", "root", "koodinh@");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $exception) {
    echo "Không thể mở kết nối đến CSDL" . $exception->getMessage();
}

try {
    //bắt đầu một giao dịch
    $connect->beginTransaction();
    $connect->query("INSERT INTO category(name) VALUES('category_test_3')");
    $connect->query("INSERT INTO products(name,price,category_id) 
VALUES('test-1','test-2',1,'test-4')");
    $connect->commit();//thực sự đẩy dữ liệu vào trong CSDL thật
} catch (Exception $exception) {
    $connect->rollBack();
    echo "Có lỗi xảy ra";
}

?>