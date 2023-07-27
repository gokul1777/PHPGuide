<?php
// Operators in PHP
/*
1- Arithmetic Operator
2- Assignment Operator
3- Comparison Operator
4- Logical Operator
*/

$a = 45;
$b = 8;

// 1- Arithmetic Operator
echo "For a + b the result is " . ($a + $b) . "<br>";
echo "For a - b the result is " . ($a - $b) . "<br>";
echo "For a * b the result is " . ($a * $b) . "<br>";
echo "For a / b the result is " . ($a / $b) . "<br>";
echo "For a % b the result is " . ($a % $b) . "<br>";
echo "For a ** b the result is " . ($a ** $b) . "<br>";


// 2- Assignment Operator
// $x = $a;
// $a += 6;
// echo "For a, the value is ". $a . "<br>";

// $a -= 6;
// echo "For a, the value is ". $a . "<br>";

// $a *= 6;
// echo "For a, the value is ". $a . "<br>";

// $a /= 5;
// echo "For a, the value is ". $a . "<br>";

// $a %= 5; // $a = $a % 5
// echo "For a, the value is ". $a . "<br>";

// 3- Comparison Operator
$x = 7;
$y = 78;
echo "For x > y, the result is ";
echo var_dump($x > $y);
echo "<br>";
echo "For x < y, the result is ";
echo var_dump($x < $y);
echo "<br>";
echo "For x <= y, the result is ";
echo var_dump($x <= $y);
echo "<br>";
echo "For x >= y, the result is ";
echo var_dump($x >= $y);
echo "<br>";
echo "For x <> y, the result is ";
echo var_dump($x <> $y);
echo "<br>";

// 4- Logical Operator

$m = true;
$n = false;
echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";
echo "For m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";
echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";




?>