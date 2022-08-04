<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
$totalQuantity = 0;
$totalPrice = 0;
$products = [
    [
        'id' => 1,
        'name' => 'Rau củ sạch 1',
        'image' => 'https://img1.kienthucvui.vn/uploads/2019/10/30/anh-chup-rau-cu-qua_112150407.jpg',
        'price' => '150.000',
        'quantity' => 2
    ],
    [
        'id' => 2,
        'name' => 'Rau củ sạch 2',
        'image' => 'https://img1.kienthucvui.vn/uploads/2019/10/30/anh-chup-rau-cu-qua_112150407.jpg',
        'price' => '150.000',
        'quantity' => 3
    ],
    [
        'id' => 3,
        'name' => 'Rau củ sạch 3',
        'image' => 'https://img1.kienthucvui.vn/uploads/2019/10/30/anh-chup-rau-cu-qua_112150407.jpg',
        'price' => '150.000',
        'quantity' => 5
    ],
    [
        'id' => 4,
        'name' => 'Rau củ sạch 4',
        'image' => 'https://img1.kienthucvui.vn/uploads/2019/10/30/anh-chup-rau-cu-qua_112150407.jpg',
        'price' => '180.000',
        'quantity' => 9
    ]
]
?>

<div class="container">
    <table border="1">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>SubTotal</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($products as $product) {
            $totalQuantity += $product['quantity'];
            $totalPrice += ($product['quantity'] * $product['price']);
            ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td>
                    <img src="<?php echo $product['image']; ?>"
                         width="100"/>
                </td>
                <td>
                    <?php echo $product['name']; ?>
                </td>
                <td>
                    <?php echo $product['price']; ?>
                </td>
                <td>
                    <?php echo $product['quantity']; ?>
                </td>
                <td>
                    <?php echo $product['price'] * $product['quantity']; ?>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4">Total Quantity</td>
            <td colspan="2"><?php echo $totalQuantity; ?></td>
        </tr>
        <tr>
            <td colspan="4">Total Price</td>
            <td colspan="2"><?php echo $totalPrice; ?></td>
        </tr>
        </tfoot>
    </table>
</div>
</body>
</html>