<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- COOKIE ---
 *
 * setcookie(name,value,expire,path,domain,secure,httponly);
 *
 * setcookie must be set in top of file.
 *
 * NOTE : after setcookie, should be refresh page
 */
echo "<h1>1. COOKIE</h1>";
/*
 * EXERCISE 1 : Set cookie to store your name and name of your project which you wanna do and display it.
 *
 */
/*
 * SUGGESTION :
 * setcookie('myName', 'Nguyen Hai Nam',time() + 15);
 * if ($_COOKIE['myName']) {
 * echo "Value of cookie myName is : " . $_COOKIE['myName'];
 * }
 *
 */
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
setcookie('myName', 'Nguyen Hai Nam',time() + 15);
 if ($_COOKIE['myName']) {
echo "Value of cookie myName is : " . $_COOKIE['myName'];}
?>
</body>
</html>