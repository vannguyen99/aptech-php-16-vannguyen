<?php
echo "<a href=\"./\">BACK</a>";
/* 9. --- LOOPS ---
 *
 *
 * Some common loops in PHP :
 * while
 * do ... while
 * for
 * foreach
 *
 */
echo "<h1>9. LOOPS</h1>";
/*
 * EXERCISE 1 : Assigning $a = 0, while $a < 5 then display $a to html.     Carefull with loops infinity, using while
 *
 */
/*
 * SUGGESTION :
 *
 * $a = 0;
 * while ($a < 5) {
 * echo "$a";
 * $a++;
 * }
 *
 */
/*
 * EXERCISE 2 : Using do while to echo $a while $a < 5;
 */
/*
 * SUGGESTION :
 * $a = 0;
 * do {
 * echo $a;
 * $a++;
 * } while ($a < 5);
 *
 */
/*
 * EXERCISE 3 : $a = 5, Using for loops to echo from 0 to $a;
 */
/*
 * SUGGESTION :
 * $a = 5;
 * for ($i = 0; $i <= $a; $i++) {
 * echo $i;
 * }
 *
 */
/*
 * EXERCISE 4 : Using foreach to echo key and value of array;
 */
/*
 * SUGGESTION :
 * $arr = ["name" => "Name", "class" => "PHP", "age" => 18];
 * foreach ($arr as $key => $value) {
 * echo $key . ' - ' . $value . '<br>';
 * }
 *
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
echo "<h1>EX1</h1>";
$a = 0;
while($a < 5) {
    echo $a.'<br>';
    $a++;
}
echo "<h2>EX2</h2>";
$b = 0;
do {
    echo $b.'<br>';
    $b++;
}while($b < 5);
echo "<h3>EX3</h3>";
$c = 5;
for ($i = 0; $i <= $c; $i++) echo $i."<br>";
echo "<h4>EX4</h4>";
$arr = array("1" => "Trần Đặng Văn Nguyên",
             "2" => "K02/09 Nguyễn Văn Cừ, Hòa Hiệp Bắc, Liên Chiểu, Đà Nẵng",
             "3" => "0796706754"
);
foreach ($arr as $key => $values){
    echo $key.' - '.$values.'<br>';
}
?>