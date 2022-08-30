<?php
$connect = mysqli_connect('127.0.0.1', 'root', 'koodinh@', 'php_43');
if (!$connect) {
    die("Lỗi rồi bạn ôi");
}
echo("Kết nối thành công, cần cù thì bù siêng năng");
$sql = "SELECT * FROM category";
$resultSet = mysqli_query($connect, $sql);
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
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($category = mysqli_fetch_object($resultSet)):
        ?>
        <tr>
            <td><?php echo $category->id ?></td>
            <td><?php echo $category->name ?></td>
        </tr>
    <?php
    endwhile; ?>
    </tbody>
</table>
</body>
</html>
