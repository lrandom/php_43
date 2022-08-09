<?php
session_start();
//nếu chưa có session accounts thì tạo ra
if (!isset($_SESSION['accounts'])) {
    $_SESSION['accounts'] = [
        ["pin" => "123456788", "amount" => "5000000", "name" => "Nam"],
        ["pin" => "234567891", "amount" => "6000000", "name" => "Luan"],
        ["pin" => "987654321", "amount" => "7000000", "name" => "Linh"]
    ];
}

$err = null;//mảng chứa cảnh báo lỗi
$existAccount = null;
if (isset($_POST['pin'])) {
    $accounts = $_SESSION['accounts'];
    $pin = $_POST['pin'];
    //kiểm tra xem mã pin này có tồn tại trong $accounts hay không
    foreach ($accounts as $account) {
        if ($pin == $account['pin']) {
            $existAccount = $account;
            break;
        }
    }
    if ($existAccount != null) {
        //tìm được tài khoản có mã pin trùng khớp
        //chuyển người dùng sang màn hình lựa chọn
        //header chuyển hướng sang tran main.php
        //set session để lưu giữ thông tin tk người dùng
        $_SESSION['account'] = $existAccount;
        header("Location:main.php");
    } else {
        //đưa ra cảnh báo là mã pin không chính xác
        $err= 'Mã pin bạn nhập vào không chính xác, vui lòng nhập lại';
    }
}

?>
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
<div class="container">
    <form method="post">
        <?php
        if ($err) {
            ?>
            <div><?php echo $err; ?></div>
            <?php
        }
        ?>

        <input type="text" name="pin" required
               placeholder="Vui lòng nhập mã PIN của bạn" style="height: 50px;border:1px solid #cdcdcd;width:100%"/>
    </form>
</div>
<style>
    .container {
        width: 500px;
        margin: 0px auto;
    }
</style>
</body>
</html>
