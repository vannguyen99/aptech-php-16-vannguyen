<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="dangnhap.php" method="GET">
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="thu-dien-tu" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="mat-khau" required>
        </div>
        <div>
            <input type="submit" value="Đăng Nhập">
        </div>
    </form>
</body>
</html>