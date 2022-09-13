<?php
try {
    $connect = new PDO("mysql:host=127.0.0.1;dbname=php_43", "root", "koodinh@");
} catch (Exception $exception) {
    echo "Không thể mở kết nối đến CSDL" . $exception->getMessage();
}
$rs = $connect->query("SELECT * FROM category");
$prepare = $connect->prepare("INSERT INTO products(name,price,category_id) 
VALUES(:name,:price,:category_id)");
$prepare->bindParam(":name", $name);
$prepare->bindParam(":price", $price);
$prepare->bindParam(":category_id", $categoryId);
$category = $rs->fetchAll(PDO::FETCH_OBJ);
if (isset($_POST['price'])) {
    $price = $_POST['price'];
    $name = $_POST['name'];
    $categoryId = $_POST['category_id'];
    $prepare->execute();
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
<form method="post">
    <input type="text" name="name" placeholder="Name"/><br>
    <input type="text" name="price" placeholder="Price"/><br>
    <select name="category_id">
        <?php
        foreach ($category as $cat):
            ?>
            <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
        <?php endforeach; ?>
    </select>
    <button>Add</button>
</form>
</body>
</html>
