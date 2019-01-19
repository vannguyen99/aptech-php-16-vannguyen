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
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Nhập email đăng ký">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" value="mật khẩu">
        </div>
        <div>
            <label for="password">Retype Password</label>
            <input type="password" name="retypePassword" value="mật khẩu">
        </div>
        <div>
            <button type="submit" name="register">Register</button>
        </div>
    </form>
</body>
</html>
<?php
    if (isset($_POST['register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];
        
        if ($password != $retypePassword) 
            echo 'Register is stupid!!';
        else {
            $pass = md5($password);
            mysqli_query($conn,
                "insert into manager.users (email, password) values ('$email', '$pass') "
            );
            echo'Register is success!!';
            ?>
            <p><a href="index.php">Return login</a></p>
            <?php
        }
    }
?>