<?php
echo "<a href=\"./\">BACK</a>";
/* 6. --- DATA TYPES ---
 *
 * Variables can store data of different types.
 *
 * No need to declare type of variable.
 *
 * Data Types common in PHP :
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 *
 *
 */
echo "<h1>6. DATA TYPES</h1>";
/*
 * EXERCISE 1 : List all data types in variables and display it.
 */
/*
 * SUGGESTION :
 * $arr = [1,'2','Nam'];
 * print_r($arr);
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$car = array("BMW","Lambogini","Camry");
$number1 = 15;
$number2 = 25.6;
$test = true;
$say = "Viet Nam";
print_r ($car);
echo "<br>";    
var_dump($car);
echo '<br>'.$number1."<br>";
var_dump($number1);
echo '<br>'.$number2.'<br>';
var_dump($number2);
echo '<br>'.$test.'<br>';
var_dump($test);
echo '<br>'.$say.'<br>';
var_dump($say);
?>