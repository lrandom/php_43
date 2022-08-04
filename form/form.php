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
<form method="post" action="handle-data.php">
    <div>
        <label>Email</label>
        <input name="email" type="text" placeholder="Vui lòng nhập email">
    </div>

    <div>
        <label>Mật khẩu</label>
        <input name="password" type="password" placeholder="Vui lòng nhập mật khẩu">
    </div>

    <div>
        <label>Tỉnh</label>
        <select name="province">
            <option value="1">Hà Nội</option>
            <option value="2">Hải Phòng</option>
            <option value="3">Quảng Ninh</option>
        </select>
    </div>

    <div>
        <label>Sở thích</label>
        <textarea name="bio" placeholder="Vui lòng cho biết sở thích"></textarea>
    </div>

    <div>
        <button>Đăng ký</button>
    </div>
</form>

<style>
    form {
        margin: 0px auto;
        width: 500px;
    }

    form div {
        margin-top: 10px;
    }

    form label {
        display: inline-block;
        width: 100px;
    }

    form input, form select, form textarea {
        width: 300px;
        height: 30px;
    }
</style>
</body>
</html>