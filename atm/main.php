<?php
session_start();
if (isset($_POST['amount'])) {
    //lấy về số tiền người yêu cầu rút
    $amount = $_POST['amount'];
    $account = $_SESSION['account'];
    $account['amount'] -= $amount;
    $_SESSION['account'] = $account;
    //đồng bộ lại vào session tổng
    for ($i = 0; $i < count($_SESSION['accounts']); $i++) {
        if ($_SESSION['accounts'][$i]['pin'] == $account['pin']) {
            //update lại amount
            $_SESSION['accounts'][$i] = $account;
        }
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
<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'access-info') {
        //lấy thông tin của người dùng hiện tại và hiển thị ra màn hình
        $account = $_SESSION['account'];
        ?>
        <div class="container">
            <div>Họ tên: <?php echo $account['name']; ?></div>
            <div>Tài khoản: <?php echo $account['amount']; ?></div>
        </div>
        <?php
    } else if ($action == 'withdraw') {
        ?>
        <div class="container">
            <form method="post">
                <div>
                    <input type="text" name="amount" required
                           placeholder="Vui lòng nhập số tiền bạn muốn rút"
                           style="height: 50px;border:1px solid #cdcdcd;width:100%"/>
                </div>
                <div>
                    <input type="submit" value="Rút tiền" style="height: 50px;border:1px solid #cdcdcd;width:100%"/>
                </div>
            </form>
        </div>
        <?php
    } else if ($action == 'exit') {
        //thoát người dùng đưa lại về trang đăng nhập
        if (isset($_SESSION['account'])) {
            unset($_SESSION['account']);
        }
        echo '<script>window.location.href = "login.php";</script>';
    }
}
?>


<div class="container">
    <div>
        <a href="?action=withdraw">Rút tiền</a>
    </div>

    <div>
        <a href="?action=access-info">Truy vấn</a>
    </div>

    <div>
        <a href="?action=exit">Thoát</a>
    </div>
</div>

<style>
    .container {
        width: 500px;
        margin: 0px auto;
    }

    div > a {
        display: block;
        border: 1px solid #cdcdcd;
        padding: 10px;
    }
</style>
</body>
</html>