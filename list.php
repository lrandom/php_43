<?php
//mở kết nối đến CSDL
try {
    $connect = new PDO("mysql:host=127.0.0.1;dbname=php_43", "root", "koodinh@");
} catch (Exception $exception) {
    echo "Không thể mở kết nối đến CSDL" . $exception->getMessage();
}

$rs = $connect->query("SELECT * FROM products");
$productList = $rs->fetchAll(PDO::FETCH_OBJ);
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
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($productList as $product) {
        ?>
        <tr>
            <td><?php echo $product->id; ?></td>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

</body>
</html>
