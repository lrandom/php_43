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
if (isset($_REQUEST['email'])) {
    echo "Thông tin bạn nhập vào là";
    echo '<br>';
    echo "Email:" . $_REQUEST['email'];
    echo '<br>';
    echo "Password" . $_REQUEST['password'];
    echo '<br>';
    switch ($_REQUEST['province']) {
        case 1:
            echo 'Hà Nội';
            break;

        case 2:
            echo 'Hải Phòng';
            break;

        case 3:
            echo 'Quảng Ninh';
            break;
    }
    echo '<br>';
    echo "Sở thích" . $_REQUEST['bio'];
}
?>
</body>
</html>
