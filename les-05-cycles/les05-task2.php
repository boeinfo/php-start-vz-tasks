<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 5. Cycles. 
 * @link: https://php-start.com/lesson/php-start-theory/cycles
 * 
 * @task 2. Squares of numbers.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 20.02.2022
 * 
 * @link: https://www.php.net/manual/ru/control-structures.do.while.php
 * 
 * -----------------------------------------------------
 */

$num = 10;

$i = 1; $q = 1;
do {
    echo "Квадрат числа $i равен {$q}.<br>"; 
    $i++; 
    $q = pow($i, 2);          
} while($q <= $num);

echo "<hr>Величина большего квадрата не превышает {$num}.<br>";
