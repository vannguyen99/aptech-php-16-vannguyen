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
<?php
        if (isset($_POST['login'])){
            $emailLg = $_POST['email_lg'];
            $passwordLg = $_POST['password_lg'];
            $result = mysqli_query($conn,
                'select * from manager.users where email="$emailLg" password="$passwordLg"'    
            );
            if (mysqli_query($conn,$result)){
                while ($row = mysqli_query($conn,$result) > 0 ){
                    echo "email: " .$row['email_Lg']. " -Password: ".$row['password_Lg'];
                }
            }
            if (!$row || mysqli_num_rows($row) == 1){
                echo "Login success!!";
                ?>
                    <a href="admin.php">Let'go </a>
                <?php
            }
            else echo "Login fail!!";
        }
    ?>
</body>
</html>