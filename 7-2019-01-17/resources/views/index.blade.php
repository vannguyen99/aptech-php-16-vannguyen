<?php
    $severName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "manager";
    
    $conn = mysqli_connect($severName, $userName, $password, $dbName);
    if (!$conn) die ("connect die: " .$conn->connect_error);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action= "login.php">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email_lg">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password_lg">
        </div>
        <div>
            <button type="submit" name="login">Login</button>
        </div>
        <div>
            <a href="register.php">Do you have a account? Register now!!</a>
        </div>
    </form>
    </div>
</body>
</html>