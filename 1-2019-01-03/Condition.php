<?php
echo "<a href=\"./\">BACK</a>";
/* 8. --- CONDITIONS ---
 *
 * Conditional statements are used to perform different actions based on different conditions.
 *
 * Some common conditions in PHP :
 * if ... else ...
 * switch
 *
 */
echo "<h1>8. CONDITIONS</h1>";
/*
 * EXERCISE 1 : Checking $a = 9 is smaller or larger $b = 15 and display your result, using if else.
 *
 */
/*
 * SUGGESTION :
 * $a = 9;
 * $b = 15;
 * if ($a > $b) {
 * echo "$a larger than $b";
 * } else {
 * echo "$a smaller than $b";
 * }
 *
 */
/*
 * EXERCISE 2 : Display the meaning of acronym of some programming language  , using switch
 */
/*
 * SUGGESTION :
 * $language = 'PHP';
 * switch ($languge) {
 * case 'PHP':
 * echo "PHP: Hypertext Preprocessor";
 * break;
 * case 'JS':
 * echo "JavaScript";
 * break;
 * default:
 * echo "can not find meaning your language";
 * }
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
echo "<h1>EX1</h1><br>";
$a = 9;
$b = 15;
if ($a < $b) echo $a." nhỏ hơn ".$b;
else if ($a = $b) echo $a." bằng ".$b;
else echo $a." lớn hơn ".$b;
echo "<h2>EX2</h2>";
$car = "Vinfast";
switch($car){
    case "BMW": 
        echo "I like BMW";
        break;
    case "Vinfast":
        echo "I like Vinfast";
        break;
    case "LB":
        echo "I like LB";
        break;
    default: echo "can not find car brands i like";
}
?>