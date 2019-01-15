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
    <?php
        $email = $passWord = "";
        $emailErr = $passWordErr = "";
        
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        if (empty($_POST['email']))
            $emailErr = "Email is required";
        else {
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                $emailErr = "Invalid email format";
        }
        if (empty($_POST['password'])){
            $passWordErr = "Password is required";
        }
        else {
            $passWord = test_input($_POST['password']);
            if (strlen($passWord) < 8) {
                $passWordErr = "Password too short (must be more than 8 characters ) !";
            }
        
            if (!preg_match("#[0-9]+#", $passWord)) {
                $PassWordErr = "Password must include at least one number!";
            }
        
            if (!preg_match("#[a-zA-Z]+#", $passWord)) {
                $passWordErr = "Password must include at least one letter!";
            } 
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form name="formdangnhap" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>
            <span style="color:red">*<?php echo $emailErr; ?></span>
        </div>
        <div>
            <label>Mật khẩu</label>
            <input type="password" name="password" value="<?php $passWord; ?>" required>
            <span style="color:red">*<?php echo $passWordErr; ?></span>
        </div>
        <div>
            <input type="submit" name="submit" value="Login">
        </div>
        <div>
            <a href="creatacc.php">Tạo tài khoản?</a>
        </div>
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        require 'checkDB.php';
        $checkEmail = "select users.email from manager.users";
        $checkPassword = "select users.password from manager.users";
        if ($emailErr == "" && $passWordErr == ""){
            if ($email == $checkEmail && $passWord == $checkPassword){
                echo "login success!!";
            }
            else echo "login fail!!";
        }
    }
?>