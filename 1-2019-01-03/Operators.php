<?php
echo "<a href=\"./\">BACK</a>";
/* 7. --- OPERATOR ---
 *
 * Operators are used to perform operation on variables and values.
 *
 * Group of operators:
 * Arithmetic operators
 * Assignment operators
 * Comparison operators
 * Increment/Decrement operatos
 * Logical operators
 * String operators
 * Array operatos
 *
 */
echo "<h1>7. OPERATORS</h1>";
/*
 * EXERCISE 1 : Using each of operators at least once.
 */
/*
 * SUGGESTION :
 * Can be watch more at : https://www.w3schools.com/php/php_operators.asp
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$x = 10;
$y = 5;
$tong = $x + $y;
echo $tong.'<br>';
$hieu = $x - $y;
echo $hieu.'<br>';
$tich = $x * $y;
echo $tich.'<br>';
$thuong = $x / $y;
echo $thuong.'<br>';
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
var_dump($x > $y);
var_dump($x < $y);
var_dump($x >= $y);
var_dump($x <= $y);
?>