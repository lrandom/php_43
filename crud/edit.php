<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    //chuyển về trang list.php
    header('Location:list.php');
}
$id = $_GET['id'];
$connect = mysqli_connect('127.0.0.1', 'root', 'koodinh@', 'php_43');
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $sql = "UPDATE category SET name='$name' WHERE id=$id";
    mysqli_query($connect, $sql);
}
$sql = "SELECT * FROM category WHERE id = $id";
$rs = mysqli_query($connect, $sql);
$obj = mysqli_fetch_assoc($rs);
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
<h1>Edit Category</h1>
<form method="post">
    <div>
        <input type="text" name="name" placeholder="name" value="<?php echo $obj['name']; ?>"/>
    </div>
    <div>
        <button>Edit</button>
    </div>
</form>
</body>
</html>