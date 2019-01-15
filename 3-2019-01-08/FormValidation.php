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
        $nameErr = $emailErr = $genderErr = "";
        $name = $email = $gender = $comment = "";
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            if (empty($_POST['name'])){
                $nameErr = "Name is required";
            }
            else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-z]*$/",$name)){
                    $nameErr = "Only letters and white space allowed";
                }
            }
            if (empty($_POST['email'])){
                $emailErr = "Email is required";
            }
            else {
                $email = test_input($_POST['email']);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }
            if (empty($_POST['comment'])){ 
                $comment = "";
            }
            else {
                $comment = test_input($_POST['comment']);
            }
            if (empty($_POST['gender'])){ 
                $genderErr = "Gender is required";
            }
            else {
                $gender = test_input($_POST['gender']);
            }
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h2>PHP Form Validation Example</h2>
    <p style="color:red">*required fields</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span style="color:red">*<?php echo $nameErr; ?></span>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email;?>">
            <span style="color:red">*<?php $emailErr; ?></span>
        </div>
        <div>
            <label>Comment</label>
            <textarea name="comment" rows="5" cols="50"><?php echo $comment; ?></textarea>
        </div>
        <div>
            <span>Gender</span><br>
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
            <span style="color:red">*<?php echo $genderErr; ?></span>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
<?php 
    echo "<h2>Your Input</h2>";
    if ($nameErr == "" && $emailErr == "" && $genderErr == ""){
        echo "Your name is : $name".'<br>';
        echo "Your email is : $email".'<br>';
        echo "Your comment is : $comment".'<br>';
        echo "Your gender is : $gender";
    }
    
?>