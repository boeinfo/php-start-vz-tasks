<?php
// -----------------------------------------------------
// PHP Start | Theory
// Lesson 2. https://php-start.com/lesson/php-start-theory/basics
// 
// Task 3. Operators.
// -----------------------------------------------------

/* 
 * Student: Oleg Baranchikov (boeinfo@ya.ru)
 * Date: 19.02.2022
 * 
 * https://www.php.net/manual/ru/language.expressions.php
 */

$numOne = 3;
$numTwo = 5;
$numThree = 8;

echo "первое слагаемое: $numOne,\nвторое слагаемое: $numTwo,\n"
        . "третье слагаемое: $numThree. \n";

$result = $numOne + $numTwo +$numThree;

echo nl2br("Сумма равна: $result. \n");

$result = 2 + 6 + 2/5 - 1;
echo "Результат вычисления: $result. \n";

?>
