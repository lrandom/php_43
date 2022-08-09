<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location:profile.php');
}
$accounts = [
    ["email" => "a@gmail.com", "name" => "Luan", "password" => "123456"],
    ["email" => "b@gmail.com", "name" => "Nam", "password" => "12345678"],
    ["email" => "c@gmail.com", "name" => "Linh", "password" => "12345690"]
];
$error = null;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //tìm trong CSDL có ông nào có email và password trùng khớp hay không
    $existAccount = null;
    foreach ($accounts as $account) {
        if ($account['email'] == $email && $account['password'] == $password) {
            $existAccount = $account;
            break;
        }
    }
    if ($existAccount) {
        $_SESSION['user'] = $existAccount;
        header('Location:profile.php');
    } else {
        $error = 'Thông tin đăng nhập không đúng, vui lòng thử lại';
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
    <title>Login</title>
</head>
<body>
<div class="container">
    <?php if ($error) {
        ?>
        <div style="color:red"><?php echo $error; ?></div>
        <?php
    } ?>
    <form method="post">
        <input type="email" name="email" placeholder="Vui lòng nhập Email">
        <input type="password" name="password" placeholder="Vui lòng nhập mật khẩu">
        <button>Login</button>
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