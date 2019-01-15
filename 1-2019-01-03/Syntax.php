
<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- SYNTAX ---
 *
 * PHP code always starts with <?php and end with ?>
 * ?> no need in php files
 * Can be use php code in html with tag <?php and end with ?>
 *
 * NOTE :
 * The end of the code of PHP always need semicolon ;
 *
 */
echo "<h1>1. SYNTAX</h1>";
/*
 * EXERCISE 1 : Code HTML in this file outside the <?php and ?>, display your name and the project which you wanna do.
 */
/*
 * SUGGESTION :
 * <!DOCTYPE html>
 * <html>
 * <header>
 * </header>
 * <body>
 * <h1>Hello World</h1>
 * </body>
 * </html>
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
?>
<DOCTYPE html>
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
        <h1>Hello World</h1>
        <?php
            echo "Tên tôi là Trần Đặng Văn Nguyên!!<br>";
            echo "Dự án tôi muốn làm là thiết kế nhà thông minh";
        ?>
    </body>
    </html>
