<?php
// -----------------------------------------------------
// PHP Start | Theory
// Lesson 2. https://php-start.com/lesson/php-start-theory/basics
// 
// Task 4. Using variables.
// -----------------------------------------------------

/* 
 * Student: Oleg Baranchikov (boeinfo@ya.ru)
 * Date: 19.02.2022
 * 
 * https://www.php.net/manual/ru/language.variables.php
 */

$a = 1;
$b = 2;
$c;
$d;
print("Значение переменных \$a = $a, \$b = $b. <br>");

$c = $a;
$d = &$b;
print("Значение переменных \$c = $c, \$d = $d. <br>");

$a = 3;
$b = 4;
print("Значение переменных \$a = $a, \$b = $b, \$c = $c, \$d = $d.");

?>
