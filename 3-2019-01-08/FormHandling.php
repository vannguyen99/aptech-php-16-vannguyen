<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- FORM HANDLING ---
 *
 * Form data is html form.
 *
 * Can be use some superglobals to get data from form html.
 *
 */
echo "<h1>1. FORM HANDLING</h1>";
/*
 * EXERCISE 1 : Create form, input your name and the project which you wanna do and show it after submit form to itself, using method POST
 *
 */
/*
 * SUGGESTION : DO IT OUTSIDE the <?php ?>
 *
 * <!DOCTYPE html>
 * <html>
 * <head>
 * </head>
 * <body>
 * <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
 * Name : <input type="text" name="name">
 * <br>
 * Project : <input type="text" name="project">
 * <br>
 * <button type="submit">Submit</button>
 * </form>
 * </body>
 * </html>
 * <?php
 * if ($_SERVER["REQUEST_METHOD"] == "POST") {
 * $name = $_POST["name"];
 * $project = $_POST["project"];
 * echo "Your name is $name and name of your project is $project";
 * }
 * ?>
 *
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
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
    <form name="formnhap" method="POST">
        <div>
            <label>NAME</label>
            <input type="Text" name="name" placeholder="Input your name">
        </div>
        <div>
            <label>Your Project</label>
            <input type="text" name="project" placeholder="Input your project">
        </div>
        <div>
            <button type="submit">Display</button>
        </div>
    </form>
</body>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $yourProject = $_POST['project'];
        echo "Tên của bạn là $name với dự án của bạn là $yourProject!!";
    }
?>