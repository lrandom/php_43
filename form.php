<?php
if (isset($_FILES['img'])) {
    //var_dump($_FILES['img']);
    move_uploaded_file($_FILES['img']['tmp_name'], 'uploads/' . $_FILES['img']['name']);
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