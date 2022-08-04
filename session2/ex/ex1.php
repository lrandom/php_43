<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
$products = [
    [
        'name' => 'Rau củ sạch',
        'image' => 'https://img1.kienthucvui.vn/uploads/2019/10/30/anh-chup-rau-cu-qua_112150407.jpg',
        'price' => '150.000',
        'sale_price' => '180.000'
    ],
    [
        'name' => 'Rau củ sạch',
        'image' => 'https://img1.kienthucvui.vn/uploads/2019/10/30/anh-chup-rau-cu-qua_112150407.jpg',
        'price' => '150.000',
        'sale_price' => '0'
    ],
    [
        'name' => 'Rau củ sạch',
        'image' => 'https://img1.kienthucvui.vn/uploads/2019/10/30/anh-chup-rau-cu-qua_112150407.jpg',
        'price' => '150.000',
        'sale_price' => '200.000'
    ],
    [
        'name' => 'Rau củ sạch',
        'image' => 'https://img1.kienthucvui.vn/uploads/2019/10/30/anh-chup-rau-cu-qua_112150407.jpg',
        'price' => '180.000',
        'sale_price' => '200.000'
    ]
]
?>

<div class="container">
    <div class="row">
        <?php
        foreach ($products as $product) {
            ?>
            <div class="col">
                <div class="card" style="width: 18rem; overflow: hidden">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top"
                         style="width: 100%;height: 200px"
                         alt="<?php echo $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text">
                            <?php if ($product['sale_price'] > 0) {
                                ?>
                                <span>Old <del><?php echo $product['price']; ?></del></span>
                                <?php
                            } ?>
                            <?php
                            if ($product['sale_price'] <= 0) {
                                ?>
                                <span>Price: <?php echo $product['price']; ?></span>
                                <?php
                            } else {
                                ?>
                                <span>Price: <?php echo $product['sale_price']; ?></span>
                                <?php
                            }
                            ?>
                        </p>
                        <div>
                            <button class="btn btn-primary">View</button>
                            <button class="btn btn-danger">Add cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</div>
</body>
</html>