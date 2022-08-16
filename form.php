<?php
if (isset($_FILES['img'])) {
    //var_dump($_FILES['img']);
    $month = date('m');//08
    $year = date('Y');//2022
    $newDir = $month . '_' . $year;//08_2022
    $newDir = 'uploads/' . $newDir;//uploads/8_2022
    if (!file_exists($newDir) || is_file($newDir)) {
        //tạo mới thư mục
        mkdir($newDir, 0775);
        //phần quyền của hệ điều hành linux/unix
        //3 nhóm người dùng: user, group user, everyone
        //trên mỗi file/thư mục được áp dụng 3 nhóm người dùng trên
        //user:sở hưũ thư mục /file
        //group user: nhóm người sở hữu thư mục/file
        //everyone: tất cả những người khác (những người ko sở hữu thư mục/file)
        //read->đọc(4), ex -> thực thi(2), ghi -> write (1)
    }
    move_uploaded_file($_FILES['img']['tmp_name'], $newDir . '/' . $_FILES['img']['name']);
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
<form method="post" enctype="multipart/form-data">
    <input type="file" name="img"/>
    <button>Upload file</button>
</form>
</body>
</html>